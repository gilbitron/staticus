---
title: Pagination
category: templates
sort: 2
---

Collection archive pages have a `$pagination` object injected into them:

```blade
<ul>
    @foreach ($pagination->items as $post)
        <li><a href="/{{ $post->path }}">{{ $post->title }}</a></li>
    @endforeach
</ul>

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
```

The `$pagination` object has the following attributes:

* `items` - An array of entries for this page
* `currentPage` - The index of the current page
* `perPage` - The number of entries per page
* `lastPage` - The index of the last page
* `total` - The total number of entries
* `path` - The base path for the collection (e.g. `posts`)
* `firstPagePath` - The path for the first page (e.g. `posts/page/1`)
* `lastPagePath` - The path for the last page (e.g. `posts/page/9`)
* `nextPagePath` - The path for the next page (e.g. `posts/page/2`)
* `prevPagePath` - The path for the previous page (e.g. `posts/page/8`)
