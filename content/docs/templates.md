---
title: Templates
category: creating-content
sort: 7
---

Templates in Staticus are handled by Laravels Blade engine. To learn how to use Blade templates you should refer to the [Laravel Blade documentation](https://laravel.com/docs/9.x/blade).

## Page object

Every page will have a `$page` object injected into it that contains the information about the page defined in `config.php` (e.g. `$page->title`). A `$page` object may have the following attributes:

* `path` - The path to the page
* `title` - The title of the page
* `frontMatter` - An optional array of front matter data for the page

Collection entries contain the same data but also have the following attributes:

* `markdown` - The markdown content for the entry
* `html` - The generated HTML for the entry

## Pagination

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

## Staticus object

Every page will also have a `$staticus` object injected into it that can be used to access helpful information.

```php
// Get the current environment
$staticus->environment()

// Get config values
$staticus->config('siteTitle')

// Get content data
$staticus
    ->content('posts')
    ->collection()
    ->all();
```

## Assets

Compiled assets can be included in your templates using the `$staticus->asset()` method:

```blade
<link rel="stylesheet" href="{{ $staticus->asset('assets/main.css') }}">
```

This method ensures that assets are cache-busted when they have been updated.

## Global data

Any data included in your `config.php` will be globally available to all pages via `$staticus->config()`.

```
// config.php
return [
    'siteTitle' => 'Staticus',
    // ...
];

// In pages
{{ $staticus->config('siteTitle') }}
```
