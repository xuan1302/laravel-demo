<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('home.pages.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'passwordRepeat' => 'required|same:password',
        ],
        [
            'required' => 'Không được để trống!',
            'email'    => 'Định dạng email không đúng.',
            'min'     => 'Nhập ít nhất 6 ký tự',
            'same' => 'Mật khẩu không trùng khớp',
            'unique' => 'Email đã tồn tại'
        ]
        );

        $data = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'role_id' => '2',
            'status' => '1',
        ];
        User::create($data);
        return redirect()->route('home.login')
            ->withSuccess('Đăng ký thành công');
    }
}
