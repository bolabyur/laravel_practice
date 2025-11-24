@props(['title', 'link', 'svg', 'active' => false])

<a href="{{ $link }}"
   class="flex items-center p-2 rounded {{ $active ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
    <span class="w-6 h-6 {{ $active ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}">
        {!! $svg !!}
    </span>
    <span class="ml-2">{{ $title }}</span>
</a>

