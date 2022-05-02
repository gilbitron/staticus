@extends('layouts.main')

@section('title', 'Staticus - A static site generator in PHP powered by Laravel Blade')

@section('content')
    <div class="page">
        <div class="formatted">
            <div class="max-w-lg mx-auto py-12">
                <h1 class="text-center">Staticus</h1>
                <p>
                    Staticus is a static site generator in PHP powered by Laravel Blade. Out of the box, Staticus comes
                    with:
                </p>
                <ul>
                    <li>Powerful Blade templating</li>
                    <li>Markdown for content-driven pages</li>
                    <li>Laravel Mix to compile your JS &amp; CSS</li>
                </ul>
                <p class="not-prose text-center">
                    <a href="/docs/installation"
                        class="inline-block px-6 py-2 mt-6 bg-black text-white no-underline rounded">
                        Get started
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
