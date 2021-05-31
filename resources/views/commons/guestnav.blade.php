{{-- ゲストユーザ --}}
<div class="navbar-nav ml-auto mb-2 mb-lg-0 storeSearch">
    <a href="{{route('stores.index')}}" class="nav-link"><i class="fas fa-search"></i> 宿を検索する</a>
</div>
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 guestuser">
    <li><a class="nav-link" href="/users/create"><i class="fas fa-user-plus"></i> 会員登録</a></li>
    <li><a class="nav-link" href="{{route('login.index',['url'=>url()->current()])}}"><i class="fas fa-sign-in-alt"></i> ログイン</a></li>
</ul>
