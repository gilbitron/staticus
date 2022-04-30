@extends('layouts.main')

@section('content')
    <div class="formatted">
        <h1 class="text-2xl font-bold leading-snug mb-4">Docs</h1>

        <ul class="mb-4">
            @foreach ($pagination->items as $post)
                <li><a href="/{{ $post->path }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>

        @include('partials.pagination')
    </div>
@endsection
