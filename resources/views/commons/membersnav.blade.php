{{----- 会員 -----}}
<div class="collapse navbar-collapse storeSearchDropdown" id="navbarSupportedContent">
    {{-- <a class="nav-link dropdown-toggle" href="#" id="storeSearchDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span>宿を検索する</span>
    </a>
    <form action="#" class="dropdown-menu" aria-labelledby="storeSearchDropdown">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="checkin" class="form-label">ﾁｪｯｸｲﾝ </label>
                    <input type="date" class="form-control" name="checkin" id="checkin">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="checkout" class="form-label">ﾁｪｯｸｱｳﾄ </label>
                    <input type="date" class="form-control" name="checkout" id="checkout">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="adult" class="form-label">大人 </label>
                    <input type="number" class="form-control" name="adult" id="adult" min="1" max="5" value="2">
                </div>
                <div class="mb-3">
                    <label for="child" class="form-label">子供 </label>
                    <input type="number" class="form-control" name="child" id="child" min="0" max="5" value="0">
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="area" class="form-label">エリアを選んでください</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="1" id="1">
                        <label class="form-check-label" for="1">北海道</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="2" id="2" class="form-check-input">
                        <label for="2" class="form-checklabel">東北</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="3" id="3" class="form-check-input">
                        <label for="3" class="form-checklabel">北関東</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="4" id="4" class="form-check-input">
                        <label for="4" class="form-checklabel">首都圏</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="5" id="5" class="form-check-input">
                        <label for="5" class="form-checklabel">甲信越</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="6" id="6" class="form-check-input">
                        <label for="6" class="form-checklabel">東海</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="7" id="7" class="form-check-input">
                        <label for="7" class="form-checklabel">伊豆・箱根</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="8" id="8" class="form-check-input">
                        <label for="8" class="form-checklabel">北陸</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="9" id="9" class="form-check-input">
                        <label for="9" class="form-checklabel">近畿</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="10" id="10" class="form-check-input">
                        <label for="10" class="form-checklabel">四国</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="11" id="11" class="form-check-input">
                        <label for="11" class="form-checklabel">山陽・山陰</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="12" id="12" class="form-check-input">
                        <label for="12" class="form-checklabel">九州</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="13" id="13" class="form-check-input">
                        <label for="13" class="form-checklabel">沖縄</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary ax-auto">検索</button>
    </form> --}}
    <a href="#" class="nav-link"><i class="fas fa-search"></i> 宿を検索する</a>
</div>
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 profileDropdown">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/users/shikamaru.jpg') }}" alt="account-img" class="rounded-circle">
        <span> 奈良 シカマル</span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
        <li class="text-center account-list pt-2"><img src="{{ asset('images/users/shikamaru.jpg') }}" alt="account-img" class="rounded-circle mx-auto"></li>
        <li class="account-list"><span class="dropdown-item text-muted user-type">会員:</span></li>
        <li class="account-list"><a class="dropdown-item user-name" href="#">奈良 シカマル</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-list"></i> 宿泊予約履歴</a></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-history"></i> キャンセル待ち</a></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-person-booth"></i> 宿泊履歴</a></li>
        <li class="account-list"><hr class="dropdown-divider"></li>
        <li class="account-list"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> ログアウト</a></li>
    </ul>
</ul>
