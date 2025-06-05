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
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $request->validate([
            'name' => required->name,
            'email' => required->email,
            'password' => Hash::make($request->password),
        ]);

        // 🔹 実際にDBへ登録
        $user = User::create([
            'name' => session('name'),
            'email' => session('email'),
            'password' => Hash::make(session('password')),
        ]);

        // 🔹 セッションをクリアして登録完了メッセージを設定
        session()->forget(['name', 'email', 'password']);
        return redirect()->route('login')->with('success', '新規登録完了しました！');

    }

    public function confirm(Request $request)
    {
        // セッションにデータを保存
        session([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('register.confirm');
    }

    public function register(Request $request)
    {
    }
}
