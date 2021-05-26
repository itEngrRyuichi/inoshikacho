<nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="span1">猪鹿蝶</span><span class="span2">.travel</span></a>
        {{-- ゲストユーザ --}}
        @include('commons.guestnav')
        {{-- 会員ユーザ --}}
        {{-- @include('commons.membersnav') --}}
        {{-- 店舗管理ユーザ --}}
        {{-- @include('commons.storeadminnav') --}}
        {{-- サイト管理ユーザ --}}
        {{-- @include('commons.adminnav') --}}
    </div>
  </nav>
