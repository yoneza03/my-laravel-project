@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2 class="text-danger">不正なアクセスです！</h2>
        <p>このページへのアクセスは許可されていません。</p>

        <!-- 元のページへ戻るボタン -->
        <button onclick="history.back()" class="btn btn-primary">元のページに戻る</button>
    </div>
@endsection