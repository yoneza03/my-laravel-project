<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

use App\Models\User;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
    return view('auth.register');
    }

// public function register(Request $request)
// {
//     Log::info('register() メソッドが実行されました！', $request->all());

//     $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|unique:users',
//         'password' => 'required|string|min:8|confirmed',
//     ]);

//     $user = User::create([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//     ]);

//     return redirect()->route('login')->with('success', '新規登録が完了しました！');
// }
public function register(Request $request)
{
    Log::info('register() メソッドが実行されました！', $request->all());

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    try {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            dd('ユーザー登録に失敗しました！'); // ここでエラーが出るか確認！
        }

        dd('ユーザー登録完了！', $user); //  ユーザーが登録されているか最終確認！
    } catch (QueryException $e) {
        Log::error('ユーザー登録失敗！', ['error' => $e->getMessage()]);
        dd('登録処理エラー！', $e->getMessage()); // 例外が発生した場合、エラーメッセージを確認！
    }

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
