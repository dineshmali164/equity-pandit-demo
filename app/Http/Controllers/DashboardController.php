<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        switch (auth()->user()->getRole()) {
            case ROLE_ADMIN:
                return view('dashboard');
            case ROLE_SELLER:
                return view('dashboard');
            case ROLE_USER:
                return view('dashboard');
        }
    }
}
