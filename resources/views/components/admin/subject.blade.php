<x-admin.layout :title="$title">

    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Subject List</h1>

        {{-- Button Tambah Subject --}}
        <button data-modal-target="createSubjectModal" data-modal-toggle="createSubjectModal"
            class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            +Tambah Subject
        </button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama Subject</th>
                    <th class="px-6 py-3">Deskripsi</th>
                    <th class="px-6 py-3">Guru Pengampu</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subject as $sub)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $sub->name }}</td>
                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300">{{ $sub->description }}</td>
                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                            @if ($sub->teachers->count())
                                {{ $sub->teachers->pluck('name')->join(', ') }}
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
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MODAL TAMBAH --}}
    <div id="createSubjectModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
        <div class="bg-white dark:bg-gray-700 rounded-lg p-6 w-full max-w-md shadow-md">
            <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Tambah Subject</h3>

            <form action="{{ route('admin.subject.store') }}" method="POST">
                @csrf
                <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Nama Subject</label>
                <input type="text" name="name" required
                    class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">

                <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="description" class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white"></textarea>

                <div class="flex justify-end gap-2 border-t pt-4">
                    <button type="button" data-modal-hide="createSubjectModal"
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

    {{-- MODAL EDIT --}}
    @foreach ($subject as $sub)
        <div id="editSubjectModal-{{ $sub->id }}" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
            <div class="bg-white dark:bg-gray-700 rounded-lg p-6 w-full max-w-md shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Edit Subject</h3>

                <form action="{{ route('admin.subject.update', $sub->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Nama Subject</label>
                    <input type="text" name="name" value="{{ $sub->name }}" required
                        class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">

                    <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Deskripsi</label>
                    <textarea name="description"
                        class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">{{ $sub->description }}</textarea>

                    <div class="flex justify-end gap-2 border-t pt-4">
                        <button type="button" data-modal-hide="editSubjectModal-{{ $sub->id }}"
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

</x-admin.layout>
