@extends('layouts.main')

@section('content')
    <div class="md:flex">
        <div class="md:w-1/4 mb-12 dark:text-white">
            <h3 class="text-sm text-gray-500 font-semibold uppercase tracking-wide mb-2">Getting Started</h3>
            @php
                $gettingStarted = $staticus
                    ->content('docs')
                    ->collection()
                    ->items->filter(function ($item) {
                        return $item->getFrontMatter('category') === 'getting-started';
                    })
                    ->all();
            @endphp
            <ul>
                @foreach ($gettingStarted as $item)
                    <li class="doc-{{ basename($item->path) }} mb-1">
                        <a href="/{{ $item->path }}" class="hover:underline">{{ $item->title }}</a>
                    </li>
                @endforeach
            </ul>

            <h3 class="text-sm text-gray-500 font-semibold uppercase tracking-wide mb-2 mt-10">Creating Content</h3>
            @php
                $gettingStarted = $staticus
                    ->content('docs')
                    ->collection()
                    ->items->filter(function ($item) {
                        return $item->getFrontMatter('category') === 'creating-content';
                    })
                    ->all();
            @endphp
            <ul>
                @foreach ($gettingStarted as $item)
                    <li class="doc-{{ basename($item->path) }} mb-1">
                        <a href="/{{ $item->path }}" class="hover:underline">{{ $item->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="md:w-3/4">
            <div class="formatted">
                <h1>{{ $page->title }}</h1>
                <div>
                    {!! $page->html !!}
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/styles/atom-one-dark.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/highlight.min.js"></script>
    <script src="https://unpkg.com/highlightjs-blade/dist/blade.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
@endsection
