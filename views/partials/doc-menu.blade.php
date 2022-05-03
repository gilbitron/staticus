<div>
    <h3 class="text-sm text-gray-500 font-semibold uppercase tracking-wide mb-4">{{ $menuTitle }}</h3>
    @php
        $gettingStarted = $staticus
            ->content('docs')
            ->collection()
            ->items->filter(function ($item) use ($menuCategory) {
                return $item->getFrontMatter('category') === $menuCategory;
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
