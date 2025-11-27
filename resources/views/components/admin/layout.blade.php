<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex bg-gray-100 dark:bg-gray-900 min-h-screen">

    {{-- Sidebar --}}
    @include('components.admin.sidebar')

    {{-- Main wrapper --}}
    <div class="flex-1 flex flex-col min-h-screen ml-64">
        {{-- Navbar --}}
        @include('components.admin.navbar')

        {{-- Content --}}
        <main class="p-6 flex-1">
            {{ $slot }}
        </main>
    </div>

    @vite('resources/js/app.js')
    @yield('scripts')
</body>
</html>
