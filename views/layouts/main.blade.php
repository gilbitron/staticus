<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', $page->title . ' - ' . $config['siteTitle'])</title>

    <link rel="stylesheet" href="/assets/main.css">
</head>

<body class="dark:bg-gray-900">
    <div class="max-w-5xl mx-auto px-6">
        <header
            class="flex items-center justify-between py-6 mb-6 border-b border-gray-200 dark:text-white dark:border-gray-700">
            <a href="/" class="text-xl font-bold">Staticus</a>
            <nav>
                <ul class="flex items-center space-x-6">
                    <li><a href="/docs/installation">Docs</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
    </div>
</body>

</html>
