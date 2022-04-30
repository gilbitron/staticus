@extends('layouts.main')

@section('content')
    <div class="md:flex">
        <div class="md:w-1/4 mb-6">
            <ul>
                @foreach ($config['content']['docs']->collection()->all() as $item)
                    <li><a href="/{{ $item->path }}">{{ $item->title }}</a></li>
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
@endsection
