<nav class="navbar navbar-expand navbar-light">
    <a class="navbar-brand" href="/">
        <h1>Hogo</h1>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-center header_menu">
            @if (!Auth::check())
                <li>
                    <a class="" href="{{ route('user.login.show') }}">ログイン</a>
                </li>
                <li>
                    <a class="" href="{{ route('user.create') }}">新規登録</a>
                </li>
                <li>
                    <a class="ml-3" href="{{ route('admin_auth.login') }}">管理者の方</a>
                </li>
            @endif
            @if (Auth::check())
                <li>
                    <a class="nav-link far fa-user fa-lg"
                        href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
