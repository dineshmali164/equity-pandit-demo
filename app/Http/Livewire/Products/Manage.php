<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Manage extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $photo;
    public $price;
    public $stock_quantity;

    public  $product;

    protected $rules = [
        'name' => ['required'],
        'description' => ['required'],
        'photo' => ['required','file', 'mimes:png,jpg,jpeg', 'max:10024'],
        'price' => ['required'],
        'stock_quantity' => ['required','integer'],
    ];
    public bool $editMode;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->editMode = $this->product->exists;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->image = $product->image;
        $this->price = $product->price;
        $this->stock_quantity = $product->stock_quantity;
    }

    public function submit()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->photo->store(rand(2000,300000)),
            'price' =>  $this->price,
            'user_id' => auth()->id(),
            'stock_quantity' => $this->stock_quantity,
            'slug' => Str::slug($this->name)
        ]);

        return to_route('products.index');
    }

    public function update()
    {
        $this->validate([
            'photo' => ['nullable', 'mimes:png,jpg,jpeg', 'max:10024'],
        ]);

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->photo ? $this->photo->store(rand(2000,300000)) : $this->image,
            'price' =>  $this->price,
            'user_id' => auth()->id(),
            'stock_quantity' => $this->stock_quantity,
            'slug' => Str::slug($this->name)
        ]);

        return to_route('seller.products.index');
    }

    public function render()
    {
        return view('livewire.products.manage');
    }
}
