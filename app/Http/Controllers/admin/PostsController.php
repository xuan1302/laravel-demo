<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function getAllPosts(){
        $posts = Post::with('user')->get();
        return view('admin.pages.posts.post',['posts'=>$posts]);
    }

    function getAddPost(){
        return view('admin.pages.posts.addpost');
    }

    public function postAddPost(Request $request)
    {
        dd($request);
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required',
//        ],
//            [
//                'required' => 'Không được để trống!',
//                'email'    => 'Định dạng email không đúng.'
//            ]);
//
//        $login = [
//            'email' => $request->email,
//            'password' => $request->password,
//        ];
//
//        if (Auth::attempt($login)) {
//            return redirect()->route('admin.dashboard');
//        } else {
//            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
//        }
    }

    public function getCategories(){
        return view('admin.pages.posts.categories');
    }

    public function postCategories(Request $request){

    }
}
