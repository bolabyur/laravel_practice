@foreach($teachers as $teacher)
<div id="editTeacherModal-{{ $teacher->id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-96 p-6 relative">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Teacher</h2>

        <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name-{{ $teacher->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Nama</label>
                <input type="text" name="name" id="name-{{ $teacher->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $teacher->name }}" required>
            </div>

            <div class="mb-4">
                <label for="subject_id-{{ $teacher->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Subject</label>
                <select name="subject_id" id="subject_id-{{ $teacher->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
                    
                    {{-- Subject saat ini tetap tampil --}}
                    <option value="{{ $teacher->subject_id }}" selected>{{ $teacher->subject->name ?? '-' }}</option>
                    
                    {{-- Subject lain yang belum dipakai guru lain --}}
                    @foreach ($availableSubjects as $subject)
                        @if ($subject->id != $teacher->subject_id)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="email-{{ $teacher->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Email</label>
                <input type="email" name="email" id="email-{{ $teacher->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $teacher->email }}" required>
            </div>

            <div class="mb-4">
                <label for="phone-{{ $teacher->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Phone</label>
                <input type="text" name="phone" id="phone-{{ $teacher->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $teacher->phone }}" required>
            </div>

            <div class="mb-4">
                <label for="address-{{ $teacher->id }}" class="block text-gray-700 dark:text-gray-200 mb-1">Address</label>
                <input type="text" name="address" id="address-{{ $teacher->id }}"
                    class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white"
                    value="{{ $teacher->address }}" required>
            </div>

            <div class="flex justify-end gap-2">
                <button type="button" data-modal-hide="editTeacherModal-{{ $teacher->id }}"
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
