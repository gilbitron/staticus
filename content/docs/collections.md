---
title: Collections
category: creating-content
sort: 6
---

Out of the box, Staticus supports collections of Markdown files. Technically, these can be placed anywhere but we recommend putting them in the `/content` folder (e.g. `/content/posts`).

Like pages, collections must be added to the `content` array in `config.php`:

```php
use Staticus\Compilers\MarkdownCompiler;

return [
    'content' => [
        // ...
        'posts' => (new MarkdownCompiler('/blog/{slug}', __DIR__ . '/content/posts'))
            ->getContent(),
    ],
];
```

The array key of the collection corresponds to the name of the Blade template that will be used to generate the page content (e.g. `posts.blade.php` for archive pages and the singular `post.blade.php` for single entries).

`MarkdownCompiler` takes two arguments:

1. The path used to generate the URLs for the collection. The `{slug}` will be replaced by the filename of the markdown file (without the `.md` extension).
1. The absolute path to the folder containing the markdown files.

Entries can be sorted by some value that exists in the Markdown front matter. For example, a `date`:

```php
'posts' => (new MarkdownCompiler('/blog/{slug}', __DIR__ . '/content/posts'))
    ->getContent()
    ->sortByFrontMatter('date', 'desc'),
```

By default, archive pages will show 10 entries but this can be changed using the `perPage` method:

```php
'posts' => (new MarkdownCompiler('/blog/{slug}', __DIR__ . '/content/posts'))
    ->getContent()
    ->perPage(20),
```

## Markdown files

Markdown files should have some YAML front matter that should contain at least a `title` for the entry:

```
---
title: Example Post
date: '2022-04-29'
---

This is the markdown content of the post...
```
