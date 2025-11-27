<div id="editGuardianModal-{{ $guardian->id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-96 p-6 relative">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Guardian</h2>

        <form action="{{ route('admin.guardian.update', $guardian->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name-{{ $guardian->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Nama</label>
                <input type="text" name="name" id="name-{{ $guardian->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $guardian->name }}" required>
            </div>

            <div class="mb-4">
                <label for="job-{{ $guardian->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Job</label>
                <input type="text" name="job" id="job-{{ $guardian->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $guardian->job }}" required>
            </div>

            <div class="mb-4">
                <label for="email-{{ $guardian->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input type="email" name="email" id="email-{{ $guardian->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $guardian->email }}" required>
            </div>

            <div class="mb-4">
                <label for="address-{{ $guardian->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Address</label>
                <input type="text" name="address" id="address-{{ $guardian->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $guardian->address }}" required>
            </div>

            <div class="flex justify-end gap-2">
                <button type="button" data-modal-hide="editGuardianModal-{{ $guardian->id }}"
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
