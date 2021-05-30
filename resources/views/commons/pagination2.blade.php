<div class="pagination-wrapper d-flex justify-content-center">
    <span class="btn_previous">
        <a href="{{ $rooms->previousPageUrl() }}" class="text1"><i class="fas fa-chevron-left"></i> 前ページ</a>
    </span>
    @for ($i = 0; $i < $table_pages; $i++)
        @if ($rooms->currentPage() === $i+1)
            <span class="btn_current">
                <a href="{{ $rooms->url($i+1) }}" class="text1 text-center">{{$i + 1}}</a>
            </span>
        @else
            <span class="btn_other">
                <a href="{{ $rooms->url($i+1) }}" class="text1 text-center">{{$i + 1}}</a>
            </span>
        @endif
    @endfor
    <span class="btn_next">
    <a href="{{ $rooms->nextPageUrl() }}" class="text1">次ページ <i class="fas fa-chevron-right"></i></a>
    </span>
</div>
