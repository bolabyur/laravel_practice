<div id="createStudentModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-96 p-6 relative">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Tambah Student</h2>
        <form action="{{ route('admin.student.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200 mb-1">Nama</label>
                <input type="text" name="name"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200 mb-1">Classroom</label>
                <select name="classroom_id" class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    required>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}">{{ $classroom->class }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200 mb-1">Address</label>
                <input type="text" name="address"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" data-modal-hide="createStudentModal"
                    class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700">Batal</button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>
