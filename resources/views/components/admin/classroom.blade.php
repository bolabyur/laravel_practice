<x-admin.layout :title="$title">

    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom List</h1>

        {{-- Button Tambah Classroom --}}
        <button data-modal-target="createClassroomModal" data-modal-toggle="createClassroomModal"
            class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
            +Tambah Classroom
        </button>
    </div>

    {{-- Table Classroom --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Nama Kelas</th>
                    <th class="p-3">Jumlah Siswa</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3 font-medium text-gray-900 dark:text-white">{{ $classroom->class }}</td>
                        <td class="p-3 text-gray-700 dark:text-gray-300">
                            {{ $classroom->students ? $classroom->students->count() : 0 }} Siswa
                        </td>
                        <td class="p-3">
                            <button data-modal-target="editClassroomModal-{{ $classroom->id }}"
                                data-modal-toggle="editClassroomModal-{{ $classroom->id }}"
                                class="text-blue-600 hover:underline dark:text-blue-400">
                                Edit
                            </button>
                        </td>
                    </tr>

                    {{-- Modal Edit Classroom --}}
                    <div id="editClassroomModal-{{ $classroom->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
                        <div class="bg-white dark:bg-gray-700 rounded-lg p-6 w-full max-w-md shadow-md">
                            <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Edit Classroom</h3>

                            <form action="{{ route('admin.classroom.update', $classroom->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Nama Kelas</label>
                                <input type="text" name="class" value="{{ $classroom->class }}" required
                                    class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">

                                <div class="flex justify-end gap-2 border-t pt-4">
                                    <button type="button" data-modal-hide="editClassroomModal-{{ $classroom->id }}"
                                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-600 dark:text-gray-300">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modal Create Classroom --}}
    <div id="createClassroomModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
        <div class="bg-white dark:bg-gray-700 rounded-lg p-6 w-full max-w-md shadow-md">
            <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Tambah Classroom</h3>

            <form action="{{ route('admin.classroom.store') }}" method="POST">
                @csrf
                <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Nama Kelas</label>
                <input type="text" name="class" required
                    class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">

                <div class="flex justify-end gap-2 border-t pt-4">
                    <button type="button" data-modal-hide="createClassroomModal"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-600 dark:text-gray-300">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-admin.layout>
