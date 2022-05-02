@extends('layouts.main')

@section('content')
    <div class="w-full md:flex md:h-screen">
        <div class="md:w-80 md:h-full pt-16 overflow-auto md:border-r md:border-gray-200 dark:text-white">
            <div class="px-6 py-12">
                <h3 class="text-sm text-gray-500 font-semibold uppercase tracking-wide mb-4">Getting Started</h3>
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
                        <li class="doc-{{ basename($item->path) }} mb-2">
                            <a href="/{{ $item->path }}"
                                class="hover:text-blue-600{{ $item->path === $page->path ? ' font-bold' : '' }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>

                <h3 class="text-sm text-gray-500 font-semibold uppercase tracking-wide mb-4 mt-10">Creating Content</h3>
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
                        <li class="doc-{{ basename($item->path) }} mb-2">
                            <a href="/{{ $item->path }}"
                                class="hover:text-blue-600{{ $item->path === $page->path ? ' font-bold' : '' }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-full px-6 md:pt-16 overflow-auto">
            <div class="max-w-3xl mx-auto py-12">
                <div class="formatted">
                    <h1>{{ $page->title }}</h1>
                    <div>
                        {!! $page->html !!}
                    </div>
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
