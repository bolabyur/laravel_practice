    <x-admin.layout :title="'Home'">

            <div class="items-center m-10">
        {{-- Card Welcome --}}
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 border border-gray-200 dark:border-gray-700 text-center mb-4">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Welcome to Admin Panel</h1>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Selamat datang di halaman dashboard admin. Gunakan panel ini untuk mengelola data siswa, guru, mata pelajaran, dan lainnya.
            </p>
        </div>

        {{-- Grid Statistik --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Students</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $students }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Teachers</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $teachers }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Subjects</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $subjects }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Classrooms</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $classrooms }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Guardian</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $guardian }}</p>
            </div>
        </div>
    </x-admin.layout>
