<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PasswordResetController extends Controller
{
    public function showRequestForm()
    {
        return view('auth.password_reset_request');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        // 🔹 パスワードリセットリンクを送信
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'パスワードリセットリンクを送信しました！')
            : back()->withErrors(['email' => 'パスワードリセットリンクの送信に失敗しました']);
    }

    public function showResetForm($token)
    {
        return view('auth.password_reset', compact('token'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'ユーザーが見つかりません']);
        }

        // 🔹 パスワードを更新
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'パスワード再設定完了しました！');
    }

}
