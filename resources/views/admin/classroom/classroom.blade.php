<x-admin.layout :title="$title">

    {{-- Header --}}
    <div class="flex justify-between items-center mt-16 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom List</h1>

        {{-- Button Tambah Classroom --}}
        <button data-modal-target="addClassroomModal" data-modal-toggle="addClassroomModal"
            class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            + Tambah Classroom
        </button>
    </div>

    {{-- Tabel Classroom --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama Kelas</th>
                    <th class="px-6 py-3">Jumlah Siswa</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classrooms as $classroom)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $classroom->class }}</td>
                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                            {{ $classroom->students->count() ?? 0 }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{-- Edit --}}
                            <button data-modal-target="editClassroomModal-{{ $classroom->id }}"
                                    data-modal-toggle="editClassroomModal-{{ $classroom->id }}"
                                    class="text-blue-600 hover:underline dark:text-blue-400 mr-2">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modal Tambah --}}
    @include('admin.classroom.classroom-add')

    {{-- Modal Edit --}}
    @foreach($classrooms as $classroom)
        @include('admin.classroom.classroom-edit', ['classroom' => $classroom])
    @endforeach

    {{-- Script Modal --}}
    @section('scripts')
    <script>
        document.querySelectorAll('[data-modal-target]').forEach(btn => {
            btn.addEventListener('click', () => {
                const modalId = btn.getAttribute('data-modal-target');
                const modal = document.getElementById(modalId);
                if(modal) modal.classList.remove('hidden');
            });
        });

        document.querySelectorAll('[data-modal-hide]').forEach(btn => {
            btn.addEventListener('click', () => {
                const modalId = btn.getAttribute('data-modal-hide');
                const modal = document.getElementById(modalId);
                if(modal) modal.classList.add('hidden');
            });
        });
    </script>
    @endsection

</x-admin.layout>
