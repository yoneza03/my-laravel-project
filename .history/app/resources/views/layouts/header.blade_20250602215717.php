<header class="d-flex justify-content-between align-items-center p-3 bg-light">
    <a href="{{ route('login') }}">
        <img src="{{ asset('images/logo.png') }}" alt="ロゴ" class="logo">
    </a>

    @if(Auth::check()) {{-- ログイン済みなら表示 --}}
        <a href="{{ route('logout') }}" class="btn btn-danger">ログアウト</a>
    @endif
</header>