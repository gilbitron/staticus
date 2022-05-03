---
title: Pages
category: creating-content
sort: 5
---

In Staticus, pages are created using Blade [templates](/docs/templates) and are defined in `config.php`. A page can be created by adding a new key to the `content` array:

```php
use Staticus\Page;

return [
    'content' => [
        // ...
        'about' => new Page([
            'title' => 'About Me',
            'path'  => 'about',
        ]),
    ],
];
```

The array key of the page corresponds to the name of the Blade template that will be used to generate the page content (e.g. `about.blade.php`).

A page should always have a `title` and a `path`. The path determines the URL of the page. For example, a path of `docs/intro` will appear at the URL `https://example.com/docs/intro`.

Additional data can be passed to the Blade template by passing a `frontMatter` array to the page.

```php
'about' => new Page([
    'title' => 'About Me',
    'path'  => 'about',
    'frontMatter' => [
        'subtitle' => 'An example subtitle...',
    ],
]),
```

Then in the Blade template, the data can be accessed via `$page->getFrontMatter('subtitle')`.
