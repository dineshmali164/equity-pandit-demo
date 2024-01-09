<?php

namespace App\Http\Livewire\User\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $search;


    public function render()
    {
        $products = Product::when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%");
            });
        })->paginate(10);

        return view('livewire.user.products.index',compact('products'));
    }
}
