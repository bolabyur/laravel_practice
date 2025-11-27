<div id="editClassroomModal-{{ $classroom->id }}" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md w-full max-w-md">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Edit Classroom</h3>

        <form action="{{ route('admin.classroom.update', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Nama Kelas</label>
            <input type="text" name="class" value="{{ $classroom->class }}" required
                   class="w-full p-2.5 mb-4 rounded-lg border dark:bg-gray-800 dark:border-gray-600 dark:text-white">

            <div class="flex justify-end gap-2 border-t pt-4">
                <button type="button" data-modal-hide="editClassroomModal-{{ $classroom->id }}"
                        class="px-4 py-2 bg-gray-200 rounded-lg dark:bg-gray-600 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-500">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
