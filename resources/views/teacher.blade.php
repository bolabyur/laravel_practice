<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-7xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Daftar Data Guru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">Mata Pelajaran</th>
                            <th class="px-4 py-2 text-left">Telepon</th>
                            <th class="px-4 py-2 text-left">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($teacher as $item)
                                <tr class="border-b">
                                    <td class="px-4 py-2 whitespace-nowrap">{{ $item->id}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap">{{ $item->name }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap">{{ $item->subject->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap">{{ $item->phone}}</td>
                                    <td class="px-4 py-2 whitespace-nowrap">{{ $item->address}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
