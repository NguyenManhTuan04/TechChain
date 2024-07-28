<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //Đăng nhập
    public function showFormLogin()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công

            // Lưu session_id vào session
            Session::put('session_id', Session::getId());

            // Kiểm tra vai trò của người dùng và chuyển hướng phù hợp
            $user = Auth::user();
            if ($user) {
                return redirect()->intended('admins'); // Đường dẫn dành cho admin
            }  else {
                Auth::logout();
                return redirect()->back()->withErrors(['msg' => 'Tài khoản không có quyền truy cập']);
            }
        }

        // Đăng nhập thất bại
        return redirect()->back()->withErrors(['msg' => 'Email hoặc mật khẩu không đúng']);
    }

    //Đăng ký
    public function showFormRegister()
    {
        return view('auth.admin.register');

    }

    public function register(Request $request)
    {
//        $data = $request->all();
//        dd($data);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::query()->create($data);
        $user->createToken('Personal Access Token')->plainTextToken;


        Auth::login($user);
        return redirect()->intended('admins');
    }

    //Đăng xuất

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.showFormLogin');
    }
}
