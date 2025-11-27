<x-admin.layout>
    <div class="pt-16 sm:pt-20 px-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
            <button data-modal-target="createSubjectModal" data-modal-toggle="createSubjectModal"
                class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
                Tambah Subject
            </button>
        </div>

        <div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Deskripsi</th>
                        <th scope="col" class="px-6 py-3">Guru</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $sub)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $sub->name }}</td>
                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300">{{ $sub->description }}</td>
                            <td>
                                @if ($sub->teacher)
                                    {{ $sub->teacher->name }}
                                @else
                                    <span class="text-gray-400 italic">Belum ada guru</span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <button data-modal-target="editSubjectModal-{{ $sub->id }}"
                                    data-modal-toggle="editSubjectModal-{{ $sub->id }}"
                                    class="text-blue-600 hover:underline dark:text-blue-400">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        {{-- Modal Edit --}}
                        <div id="editSubjectModal-{{ $sub->id }}"
                            class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-96 p-6 relative">
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Subject</h2>
                                <form action="{{ route('admin.subject.update', $sub->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4">
                                        <label class="block text-gray-700 dark:text-gray-200 mb-1">Nama</label>
                                        <input type="text" name="name" value="{{ $sub->name }}"
                                            class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                                            required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 dark:text-gray-200 mb-1">Deskripsi</label>
                                        <input type="text" name="description" value="{{ $sub->description }}"
                                            class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                                    </div>
                                    <div class="flex justify-end gap-2">
                                        <button type="button" data-modal-hide="editSubjectModal-{{ $sub->id }}"
                                            class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700">
                                            Batal
                                        </button>
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Tambah --}}
    <div id="createSubjectModal"
        class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-96 p-6 relative">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Tambah Subject</h2>
            <form action="{{ route('admin.subject.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-200 mb-1">Nama</label>
                    <input type="text" name="name"
                        class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-200 mb-1">Deskripsi</label>
                    <input type="text" name="description"
                        class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>
                <div class="flex justify-end gap-2">
                    <button type="button" data-modal-hide="createSubjectModal"
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin.layout>
