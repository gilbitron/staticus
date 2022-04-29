@extends('layouts.main')

@section('content')
    <h1 class="text-2xl font-bold leading-snug mb-4">{{ $page->title }}</h1>
    <p class="mb-4">{{ date('jS F Y', strtotime($page->getFrontMatter('date'))) }}</p>
    <div>
        {!! $page->html !!}
    </div>
@endsection
