<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-6 mt-10">
        <h1 class="text-2xl font-bold mb-6">Guardians</h1>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Job</th>
                    <th class="border px-4 py-2">Phone</th>
                    <th class="border px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guardians as $guardian)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $guardian['id'] }}</td>
                        <td class="border px-4 py-2">{{ $guardian['name'] }}</td>
                        <td class="border px-4 py-2">{{ $guardian['job'] }}</td>
                        <td class="border px-4 py-2">{{ $guardian['phone'] }}</td>
                        <td class="border px-4 py-2">{{ $guardian['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
