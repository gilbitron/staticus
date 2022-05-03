<?php

use Staticus\Compilers\MarkdownCollection;
use Staticus\Page;

return [
    'siteTitle' => 'Staticus',
    'analyticsScript' => '',
    'content' => [
        'index' => new Page([
            'title' => 'Staticus',
        ]),
        'docs' => MarkdownCollection::create('/docs/{slug}')
            ->fromMarkdownFiles(__DIR__ . '/content/docs')
            ->withoutArchives()
            ->fetchContent()
            ->sortByFrontMatter('sort', 'asc'),
    ],
];
