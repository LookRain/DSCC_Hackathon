<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(User $user)
    {
    	return view('profiles.show', compact('user'));
    }
}
