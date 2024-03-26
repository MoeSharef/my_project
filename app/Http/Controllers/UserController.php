<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        $usertype = Auth()->user()->usertype;
        if ($usertype == 'User') {
            $user = User::all();
            return view('users')->with('users', $user);
        } else {
            $user = User::all();
            return view('admin_users')->with('users', $user);
        }
    }
}
