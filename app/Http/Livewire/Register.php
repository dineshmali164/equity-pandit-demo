<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{

    public $registerAs = 'user';

    public function render()
    {
        return view('livewire.register');
    }
}
