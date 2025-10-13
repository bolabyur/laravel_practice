<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-5xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Data Classroom</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">Id</th>
                            <th class="px-4 py-2 text-left">Student List</th>
                            <th class="px-4 py-2 text-left">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classrooms as $classroom)
                            <tr class="border-b">
                                <td class="px-4 py-2 whitespace-nowrap">{{ $classroom->id}}</td>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    @foreach ($classroom->students as $student)
                                        {{ $student->name }} <br>
                                    @endforeach
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $classroom->grade }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
