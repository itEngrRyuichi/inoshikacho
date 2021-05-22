{{----- 店舗管理 -----}}
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 nav-account">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/users/ino.jpg') }}" alt="account-img" class="rounded-circle">
        <span> 山中 いの</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li class="text-center account-list pt-2"><img src="{{ asset('images/users/ino.jpg') }}" alt="account-img" class="rounded-circle mx-auto"></li>
        <li class="account-list"><span class="dropdown-item text-muted user-type">店舗管理:</span></li>
        <li class="account-list"><a class="dropdown-item user-name" href="#">山中 いの</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="#">　宿泊施設一覧</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-list"></i> 予約履歴</a></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-history"></i> キャンセル待ち</a></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-person-booth"></i> 宿泊履歴</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> ログアウト</a></li>
    </ul>
</ul>
