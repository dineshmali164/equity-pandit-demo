<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        $this->authorize('userList', auth()->user());

        return view('admin.user.index');
    }
}
