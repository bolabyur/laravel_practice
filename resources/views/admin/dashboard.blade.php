<x-admin.layout :title="'Dashboard'">

    <div class="p-6 mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Students</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $students }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Teachers</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $teachers }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Subjects</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $subjects }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Classrooms</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $classrooms }}</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Guardian</h2>
                <p class="text-3xl font-bold text-indigo-600 dark:text-gray-200 mt-2">{{ $guardians }}</p>
            </div>

        </div>
    </div>

</x-admin.layout>
