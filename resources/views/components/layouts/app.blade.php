<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Coding Jokes' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased bg-slate-300 text-slate-900 dark:bg-slate-800 dark:text-slate-200 font-mono flex flex-col h-screen justify-between">
    <header class="flex p-4 items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-20 h-20 pr-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
        </svg>
        <h1 class="text-2xl">Coding Jokes...</h1>
    </header>
    {{ $slot }}
    <footer class="justify-center items-center text-center py-4 text-slate-600">
        <p><a href="https://rscmedia.co.uk" class="hover:text-white">RSC Media Ltd</a> &copy; {{date('Y')}} - Powered by <a href="https://v2.jokeapi.dev/" target="_blank" rel="nofollow" class="hover:text-white">v2.jokeapi.dev</a>
    </footer>
    @livewireScripts
</body>

</html>
