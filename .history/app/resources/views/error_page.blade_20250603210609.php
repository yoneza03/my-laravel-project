@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2 class="text-danger">不正なアクセスです！</h2>
        <p>{{ $message ?? 'エラーが発生しました'}}</p>

        <!-- 元のページへ戻るボタン -->
        <button onclick="history.back()" class="btn btn-primary">元のページに戻る</button>
        {{-- <a href="{{ $back_url ?? url('/') }}" class="btn btn-primary">元のページに戻る</a> --}}
    </div>
@endsection