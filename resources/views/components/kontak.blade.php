<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-2xl mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">📞 Kontak Saya</h1>

        <div class="bg-white shadow-lg rounded-2xl p-6 space-y-4">
            <p class="text-gray-700">
                <span class="font-semibold">Email:</span> {{ $kontak['email'] }}
            </p>
            <p class="text-gray-700">
                <span class="font-semibold">Instagram:</span> {{ $kontak['instagram'] }}
            </p>
        </div>

        <div class="mt-6">
            <a href="mailto:{{ $kontak['email'] }}"
               class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
                Kirim Email
            </a>
        </div>
    </div>
</x-layout>
