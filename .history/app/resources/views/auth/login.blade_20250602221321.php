<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h1>ログイン画面</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">メールアドレス:</label>
        <input type="email" name="email" required>
        <label for="password">パスワード:</label>
        <input type="password" name="password" required>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>