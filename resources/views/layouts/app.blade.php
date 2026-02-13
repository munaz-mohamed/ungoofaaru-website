<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-50">
    <div class="flex">

        {{-- Desktop sidebar --}}
        <aside class="hidden lg:flex lg:flex-col w-72 bg-white border-r min-h-screen sticky top-0">
            <x-dashboard.sidebar />
        </aside>

        {{-- Main column --}}
        <div class="flex-1 min-w-0">
            <x-dashboard.topbar />

            <main class="px-4 sm:px-6 py-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
