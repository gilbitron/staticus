---
title: Collections
category: creating-content
sort: 6
---

Out of the box, Staticus supports collections of Markdown files. Technically, these can be placed anywhere but we recommend putting your markdown files in the `/content` folder (e.g. `/content/posts`).

Like [pages](/docs/pages), collections must be added to the `content` array in `config.php`:

```php
use Staticus\Compilers\MarkdownCollection;

return [
    'content' => [
        // ...
        'posts' => MarkdownCollection::create('/blog/{slug}')
            ->fromMarkdownFiles(__DIR__ . '/content/posts')
            ->fetchContent(),
    ],
];
```

The `MarkdownCollection::create()` method takes the path used to generate the URLs for the collection as an argument. The `{slug}` will be replaced by the filename of the markdown file (without the `.md` extension).

The `fromMarkdownFiles()` method is required and tells the collection where to find your markdown files.

## Views

The array key of the collection corresponds to the name of the Blade template that will be used to generate the page content (e.g. `posts.blade.php` for archive pages and the singular `post.blade.php` for single entries). However, These can be overidden using the `singleView()` and `collectionView()` methods:

```php
'posts' => MarkdownCollection::create('/blog/{slug}')
    ->fromMarkdownFiles(__DIR__ . '/content/posts')
    ->singleView('blog-post')
    ->collectionView('blog-posts')
    ->fetchContent(),
```

## Sorting

Entries can be sorted by some value that exists in the Markdown front matter (e.g. a `date`) using the `sortByFrontMatter()` method:

```php
'posts' => MarkdownCollection::create('/blog/{slug}')
    ->fromMarkdownFiles(__DIR__ . '/content/posts')
    ->fetchContent()
    ->sortByFrontMatter('date', 'desc'),
```

Note: `sortByFrontMatter()` must be called after `fetchContent()` for it to work.

## Pagination

Staticus generates paginated archive pages for collections. By default, archive pages will show 10 entries but this can be changed using the `perPage()` method:

```php
'posts' => MarkdownCollection::create('/blog/{slug}')
    ->fromMarkdownFiles(__DIR__ . '/content/posts')
    ->perPage(20),
    ->fetchContent(),
```

## Markdown files

Markdown files should have some YAML front matter that should contains at least a `title` for the entry:

```
---
title: Example Post
date: '2022-04-29'
---

This is the markdown content of the post...
```
