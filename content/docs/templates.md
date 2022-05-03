---
title: Blade Templates
category: templates
sort: 1
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
