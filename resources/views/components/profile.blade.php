<x-layout>
    <x-slot name="title">{{ $title ?? 'Profil Siswa' }}</x-slot>

    <div class="max-w-2xl mx-auto mt-10">
        <!-- Card Utama -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-32"></div>

            <!-- Foto Profil -->
            <div class="flex justify-center -mt-16">
                <img class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-lg"
                     src="https://ui-avatars.com/api/?name=Bayu&background=random"
                     alt="Foto Profil">
            </div>

            <!-- Info Utama -->
            <div class="text-center px-6 py-4">
                <h1 class="text-2xl font-bold text-gray-800">Bayu Pratama</h1>
                <p class="text-gray-500">Siswa | XI PPLG 1</p>
            </div>

            <!-- Detail Info -->
            <div class="px-6 pb-6">
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600 font-medium">Email</span>
                        <span class="text-gray-800">bayu@smkradenumarsaid.com</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600 font-medium">Nomor Telepon</span>
                        <span class="text-gray-800">+62 812-3456-7890</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-600 font-medium">Sekolah</span>
                        <span class="text-gray-800">SMK Raden Umar Said</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
