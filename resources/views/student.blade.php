<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-6 mt-10">
        <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Kelas</th>
                    <th class="border px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $student['id'] }}</td>
                        <td class="border px-4 py-2">{{ $student['name'] }}</td>
                        <td class="border px-4 py-2">{{ $student['grade'] }}</td>
                        <td class="border px-4 py-2">{{ $student['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
