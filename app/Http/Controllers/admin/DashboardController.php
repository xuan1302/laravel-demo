<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
//        $posts = Post::all();
//        dd($posts);
        return view('admin.pages.dashboard');
    }
}
