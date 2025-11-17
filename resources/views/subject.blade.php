<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-5xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Subject</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Mata Pelajaran</th>
                            <th class="px-4 py-2 text-left">Description</th>
                            <th class="px-4 py-2 text-left">Guru Kurikulum</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subject as $sub)
                            <tr class="border-b">
                                <td class="px-4 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $sub->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $sub->description }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    @if ($sub->teachers->count() > 0)
                                        {{ $sub->teachers->pluck('name')->join(', ') }}
                                    @else
                                        <span class="text-gray-400 italic">Belum ada guru</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-layout>
