<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-5xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Subject</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">ID</th>
                            <th class="px-4 py-2 text-left">Nama Guru</th>
                            <th class="px-4 py-2 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr class="border-b">
                                <td class="px-4 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $subject->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $subject->description }}</td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
