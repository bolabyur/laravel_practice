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
                    <textarea name="description" class="w-full p-2.5 mb-4 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">{{ $sub->description }}</textarea>

                    <div class="flex justify-end gap-2 border-t pt-4">
                        <button type="button" data-modal-hide="editSubjectModal-{{ $sub->id }}"
                            class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-600 dark:text-gray-300">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach