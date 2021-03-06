{{----- 店舗管理 -----}}
<div class="navbar-nav ml-auto mb-2 mb-lg-0 storeSearch">
    <a href="{{route('stores.index')}}" class="nav-link"><i class="fas fa-search"></i> 宿を検索する</a>
</div>
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 profileDropdown">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('storage/'.Auth::user()->images[0]->url) }}" alt="account-img" class="rounded-circle">
        <span> {{Auth::user()->name}}</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
        <li class="text-center account-list py-2"><img src="{{ asset('storage/'.Auth::user()->images[0]->url) }}" alt="account-img" class="rounded-circle mx-auto"></li>
        <li class="account-list"><span class="dropdown-item text-muted user-type">店舗管理:</span></li>
        <li class="account-list"><a class="dropdown-item user-name" href="/profile">{{Auth::user()->name}}</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="/users/{{Auth::user()->id}}/stores/"><i class="fas fa-list"></i> 管理店舗一覧</a></li>
        <li class="account-list"><a class="dropdown-item" href="/stores/create"><i class="far fa-plus-square"></i> 新規店舗登録</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                　
                <i class="fas fa-sign-out-alt"></i><input type="submit" value="ログアウト" style="background-color: transparent;border:none;outline:none;">
            </form>
        </li>
    </ul>
</ul>
