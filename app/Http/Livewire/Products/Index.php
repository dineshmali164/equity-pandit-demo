<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $search;

    public function render()
    {
        $products = Product::where('user_id',auth()->id())
            ->when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%");
            });
        })->paginate(10);

        return view('livewire.products.index',compact('products'));
    }
}
