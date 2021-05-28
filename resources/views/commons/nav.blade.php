<nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="span1">猪鹿蝶</span><span class="span2">.travel</span></a>
        @auth
            @switch(Auth::user()->type)
                @case(1)
                    {{-- サイト管理ユーザ --}}
                    @include('commons.adminnav')
                    @break
                @case(2)
                    {{-- 店舗管理ユーザ --}}
                    @include('commons.storeadminnav')
                    @break
                @case(3)
                    {{-- 会員ユーザ --}}
                    @include('commons.membersnav')
                    @break
                @default
                    
            @endswitch
        @else
            {{-- ゲストユーザ --}}
            @include('commons.guestnav')
        @endauth
    </div>
</nav>