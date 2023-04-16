<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser(){
        $user = User::all();
        return view('admin.pages.users.users',['user'=>$user]);
    }
}
