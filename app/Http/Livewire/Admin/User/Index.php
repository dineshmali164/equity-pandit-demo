<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $search;


    public function render()
    {
        $users = User::when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            });
        })->role(ROLE_USER)
            ->paginate(10);

        return view('livewire.admin.user.index', compact('users'));
    }
}
