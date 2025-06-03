<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>エラー発生</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="text-center">
    <div class="container mt-5">
        <h2 class="text-danger">不正なアクセスです！</h2>
        <p>{{ $message ?? 'エラーが発生しました。' }}</p>

        <!-- 元のページへ戻るボタン -->
        <a href="{{ $back_url ?? url('/') }}" class="btn btn-primary">元のページに戻る</a>
    </div>
</body>
</html>
