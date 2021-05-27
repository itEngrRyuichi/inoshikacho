{{-- サイト管理ユーザ --}}
<div class="navbar-nav ml-auto mb-2 mb-lg-0 storeSearch">
    <a href="#" class="nav-link"><i class="fas fa-search"></i> 宿を検索する</a>
</div>
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 profileDropdown">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/users/choji.png') }}" alt="account-img" class="rounded-circle">
        <span> {{Auth::user()->name}}</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
        <li class="text-center account-list py-2"><img src="{{ asset('images/users/choji.png') }}" alt="account-img" class="rounded-circle mx-auto"></li>
        <li class="account-list"><span class="dropdown-item text-muted user-type">サイト管理:</span></li>
        <li class="account-list"><a class="dropdown-item user-name" href="/profile">{{Auth::user()->name}}</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="/stores"><i class="fas fa-list"></i> 全店舗一覧</a></li>
        <li class="account-list"><a class="dropdown-item" href="/users"><i class="fas fa-list"></i> 全ユーザ一覧</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> ログアウト</a></li>
    </ul>
</ul>
