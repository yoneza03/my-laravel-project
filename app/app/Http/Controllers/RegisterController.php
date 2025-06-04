<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // ユーザー登録処理（仮）
    public function register(Request $request)
    {
        // ここに登録処理を追加（バリデーションなど）
        return redirect()->route('home')->with('success', 'ユーザー登録が完了しました！');
    }

}
