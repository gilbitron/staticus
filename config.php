<?php

use Staticus\Compilers\MarkdownCompiler;
use Staticus\Page;

return [
    'siteTitle' => 'Staticus',
    'content' => [
        'index' => new Page([
            'title' => 'Staticus',
        ]),
        'about' => new Page([
            'path' => 'about',
            'title' => 'About',
        ]),
        'posts' => (new MarkdownCompiler('/blog/{slug}', __DIR__ . '/content/posts'))
            ->getContent()
            ->sortByFrontMatter('date', 'desc'),
    ],
];
