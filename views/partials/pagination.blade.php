@if ($pagination && $pagination->lastPage > 1)
    <div class="pagination">
        @if ($pagination->prevPagePath)
            <a href="/{{ $pagination->prevPagePath }}">&lt;</a>
        @endif

        @for ($i = 1; $i <= $pagination->lastPage; $i++)
            <a href="/{{ $pagination->path }}/page/{{ $i }}">{{ $i }}</a>
        @endfor

        @if ($pagination->nextPagePath)
            <a href="/{{ $pagination->nextPagePath }}">&gt;</a>
        @endif
    </div>
@endif
