<x-admin.layout :title="$title">

    <div class="flex justify-between items-center mt-16 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Teacher List</h1>

        <button data-modal-target="createTeacherModal" data-modal-toggle="createTeacherModal"
            class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            + Tambah Teacher
        </button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Address</th>
                    <th class="px-6 py-3">Subject</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $teacher->name }}</td>
                        <td class="px-6 py-4">{{ $teacher->email }}</td>
                        <td class="px-6 py-4">{{ $teacher->phone }}</td>
                        <td class="px-6 py-4">{{ $teacher->address }}</td>
                        <td class="px-6 py-4">{{ $teacher->subject->name ?? '-' }}</td>
                        <td class="px-6 py-4 relative">
                            <div class="inline-block text-left">
                                <button id="dropdownButton-{{ $teacher->id }}"
                                    class="inline-flex items-center justify-center w-10 h-10 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded hover:bg-gray-200 dark:hover:bg-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-indigo-500 transition"
                                    onclick="document.getElementById('dropdownMenu-{{ $teacher->id }}').classList.toggle('hidden')">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </button>

                                <div id="dropdownMenu-{{ $teacher->id }}"
                                    class="hidden origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-20">
                                    <div class="py-1">
                                        <button data-modal-target="editTeacherModal-{{ $teacher->id }}"
                                            data-modal-toggle="editTeacherModal-{{ $teacher->id }}"
                                            class="block w-full text-left px-4 py-2 text-sm text-blue-600 dark:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modal Tambah --}}
    @include('admin.teacher.teacher-add')

    {{-- Modal Edit --}}
    @foreach ($teachers as $teacher)
        @include('admin.teacher.teacher-edit', ['teacher' => $teacher])
    @endforeach

    @section('scripts')
        <script>
            document.querySelectorAll('[data-modal-target]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const modalId = btn.getAttribute('data-modal-target');
                    const modal = document.getElementById(modalId);
                    if (modal) modal.classList.remove('hidden');
                });
            });

            document.querySelectorAll('[data-modal-hide]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const modalId = btn.getAttribute('data-modal-hide');
                    const modal = document.getElementById(modalId);
                    if (modal) modal.classList.add('hidden');
                });
            });
        </script>
    @endsection

</x-admin.layout>
