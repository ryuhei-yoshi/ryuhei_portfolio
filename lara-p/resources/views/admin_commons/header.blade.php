<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('admin_auth.home') }}">
        <h1>Hogo</h1>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-center header_menu">
            @if (Auth::guard('admin')->check())
                <li>
                    <a class="" href="{{ route('cat.create') }}">猫登録</a>
                </li>
                <li>
                    <a class="nav-link far fa-user fa-lg"
                        href="/admin/{{ Auth::guard('admin')->user()->id }}">{{ Auth::guard('admin')->user()->name }}
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
