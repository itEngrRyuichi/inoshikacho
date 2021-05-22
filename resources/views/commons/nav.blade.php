<nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="span1">猪鹿蝶</span><span class="span2">.travel</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- ゲストユーザ --}}
        {{-- @include('commons.guestnav') --}}
        {{-- 会員ユーザ --}}
        @include('commons.membersnav')
        {{-- 店舗管理ユーザ --}}
        {{-- @include('commons.storeadminnav') --}}
        {{-- サイト管理ユーザ --}}
        {{-- @include('commons.adminnav') --}}
    </div>
  </nav>
