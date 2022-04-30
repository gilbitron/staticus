<?php

use Staticus\Compilers\MarkdownCompiler;
use Staticus\Page;

return [
    'siteTitle' => 'Staticus',
    'content' => [
        'index' => new Page([
            'title' => 'Staticus',
        ]),
        'docs' => (new MarkdownCompiler('/docs/{slug}', __DIR__ . '/content/docs'))
            ->getContent()
            ->sortByFrontMatter('sort', 'asc'),
    ],
];
