{{-- navigation bar --}}
{{-- ４つのアカウントで表示を変え、リンク先を設ける --}}

<nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-1 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-hotel"></i> 宿一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users"></i> 会員一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-paw"></i> 予約履歴</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> プロフィール</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
