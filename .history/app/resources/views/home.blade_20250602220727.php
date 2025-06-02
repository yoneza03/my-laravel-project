<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.header')  {{-- ヘッダーを追加 --}}
    @if(Auth::check())
    <p>ログインしています！</p>
@else
    <p>ログインしていません。</p>
@endif
    <div class="container">
        <h1>ようこそ！</h1>
        <p>これはホーム画面です。</p>
    </div>
</body>
</html>