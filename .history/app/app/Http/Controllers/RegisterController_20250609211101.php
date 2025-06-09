<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
    return view('auth.register');
    }

    public function register(Request $request)
    {
        dd('リクエスト受信！', $request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        dd('リダイレクト直前！'); // 🔹 ここでデバッグ！
        return redirect()->route('login')->with('success', '新規登録が完了しました！');   
    }

    public function confirm(Request $request)
    {
        session([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return view('auth.register_confirm')->with([
            'name' => session('name'),
            'email' => session('email'),
            'password' => session('password')
        ]);
    }
}
