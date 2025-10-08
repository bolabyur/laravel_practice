<!DOCTYPE html>
<html lang="en">
<head class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<!-- Include this script tag or install @tailwindplus/elements via npm: -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Document</title>
</head>
<body class="h-full">
    <div class="min-h-full">
      
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>
</body>
</html>
