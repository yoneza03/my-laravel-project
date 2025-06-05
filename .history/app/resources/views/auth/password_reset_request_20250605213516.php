<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>パスワード再設定</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="border rounded p-4 shadow text-center" style="width: 400px;">
            <h2 class="mb-4">パスワード再設定</h2>

            <form action="{{ route('register.post') }}" method="POST">
                @csrf

                <!-- メールアドレスフォーム -->
                <div class="mb-3">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <!-- メール送信ボタン -->
                <button type="submit" class="btn btn-primary w-100">メール送信</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>