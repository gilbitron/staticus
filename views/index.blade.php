@extends('layouts.main')

@section('title', 'Staticus - A static site generator in PHP powered by Laravel Blade')

@section('content')
    <div class="formatted">
        <p>
            Staticus is a static site generator in PHP powered by Laravel Blade. Out of the box, Staticus comes with:
        </p>
        <ul>
            <li>Powerful Blade templating</li>
            <li>Markdown for content-driven pages</li>
            <li>Laravel Mix to compile your JS &amp; CSS</li>
        </ul>
        <p>
            However, Staticus is designed to be flexible and easy to extend. Almost every feature is optional or can be
            changed:
        </p>
        <ul>
            <li>Store content in JSON instead of markdown files? No problem.</li>
            <li>Load content from a remote service like Contentful? Sure.</li>
            <li>Use a custom CSS framework? Easy peasy.</li>
        </ul>
        <p class="not-prose">
            <a href="/docs/installation" class="inline-block px-6 py-2 mt-6 bg-black text-white no-underline rounded">
                Get started
            </a>
        </p>
    </div>
@endsection
