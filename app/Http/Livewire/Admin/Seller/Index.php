<?php

namespace App\Http\Livewire\Admin\Seller;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $search;


    public function render()
    {
        $sellers = User::when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            });
        })->role(ROLE_SELLER)
            ->paginate(10);

        return view('livewire.admin.seller.index', compact('sellers'));
    }
}
