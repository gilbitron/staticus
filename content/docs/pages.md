---
title: Pages
category: creating-content
sort: 5
---

There are two ways to create content in Staticus:

1. Using Blade templates
2. Using collections of Markdown files

All pages and [collections](/docs/collections) (e.g. blog posts) are defined in `config.php`:

```php
use Staticus\Compilers\MarkdownCompiler;
use Staticus\Page;

return [
    'content' => [
        'index' => new Page([
            'title' => 'Staticus',
        ]),
        'docs' => (new MarkdownCompiler('/docs/{slug}', __DIR__ . '/content/docs'))
            ->getContent()
            ->sortByFrontMatter('sort', 'asc'),
    ],
];
```

## Creating pages

A page can be created by adding a new key to the `content` array:

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

The array key of the page corresponds to the name of the Blade template that will be used to generate the page content (e.g. `about.blade.php`). A page should always have a `title` and a `path`. The path determines the URL of the page. For example, a path of `docs/intro` will appear at the URL `https://example.com/docs/intro`.

Additional data can be passed to the Blade template by passing a `frontMatter` array to the page.

```php
'about' => new Page([
    'title' => 'About Me',
    'path'  => 'about',
    'fontMatter' => [
        'subtitle' => 'An example subtitle...',
    ],
]),
```

Then in the Blade template, the data can be accessed via `$page->getFrontMatter('subtitle')`.
