@extends('layouts.main')

@section('content')
    <div class="w-full md:flex md:h-screen">
        <div class="md:w-80 md:h-full pt-16 overflow-auto md:border-r md:border-gray-200 dark:text-white">
            <div class="px-6 py-12 space-y-10">
                @include('partials.doc-menu', [
                    'menuTitle' => 'Getting Started',
                    'menuCategory' => 'getting-started',
                ])
                @include('partials.doc-menu', [
                    'menuTitle' => 'Creating content',
                    'menuCategory' => 'creating-content',
                ])
                @include('partials.doc-menu', [
                    'menuTitle' => 'Templates',
                    'menuCategory' => 'templates',
                ])
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
