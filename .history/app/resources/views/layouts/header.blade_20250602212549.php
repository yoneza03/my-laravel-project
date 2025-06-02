 <header class="text-center">
    <a href="{{ route('login') }}">
        <img src="{{ asset('images/logo.png') }}" alt="ロゴ" class="logo">
    </a>
    <h1>共有ページ</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">ホーム</a></li>
            <li><a href="{{ url('/shared') }}">共有ページ</a></li>
            <li><a href="{{ url('/profile') }}">プロフィール</a></li>
        </ul>
    </nav>
</header>