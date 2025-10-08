<x-layout>
    <x-slot name="title">Beranda</x-slot>

    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-700 text-white py-24">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6">
                Selamat Datang di <span class="text-yellow-300">Aplikasi Siswa</span> 👋
            </h1>
            <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">
                Kelola data siswa dengan mudah, cepat, dan modern.  
                Tersedia informasi profil, data lengkap siswa, hingga kontak sekolah.
            </p>
            <div class="flex justify-center gap-4">
                <a href="/student" class="px-6 py-3 rounded-xl bg-yellow-400 text-gray-900 font-semibold hover:bg-yellow-300 transition transform hover:scale-105">
                    Lihat Data Siswa
                </a>
                <a href="/profile" class="px-6 py-3 rounded-xl bg-white text-blue-700 font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                    Profil Sekolah
                </a>
            </div>
        </div>
    </section>

    {{-- Section Tentang --}}
    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Aplikasi</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Aplikasi ini dibuat untuk mempermudah pengelolaan data siswa.  
                Dengan tampilan yang modern, semua data bisa diakses lebih cepat dan efisien.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Fitur utama meliputi data profil siswa, tabel daftar siswa, serta informasi kontak sekolah.
            </p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <img src="https://img.icons8.com/clouds/500/student-male.png" alt="Student Icon" class="w-full h-64 object-contain">
        </div>
    </section>

    {{-- Section Fitur --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">✨ Fitur Utama</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-semibold mb-2">Data Tabel</h3>
                    <p class="text-gray-600">Pantau daftar siswa dengan tabel rapi dan mudah dibaca.</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="text-4xl mb-4">📝</div>
                    <h3 class="text-xl font-semibold mb-2">Profil Lengkap</h3>
                    <p class="text-gray-600">Informasi detail setiap siswa, mulai dari nama hingga kontak.</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
                    <div class="text-4xl mb-4">📞</div>
                    <h3 class="text-xl font-semibold mb-2">Kontak Sekolah</h3>
                    <p class="text-gray-600">Hubungi sekolah dengan mudah melalui halaman kontak khusus.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-700 text-white text-center rounded-t-3xl mt-12">
        <h2 class="text-3xl font-bold mb-4">Siap Mengelola Data Siswa Lebih Mudah?</h2>
        <p class="mb-6 opacity-90">Gunakan aplikasi ini untuk meningkatkan efisiensi pengelolaan siswa.</p>
        <a href="/student" class="px-6 py-3 rounded-xl bg-yellow-400 text-gray-900 font-semibold hover:bg-yellow-300 transition transform hover:scale-105">
            Mulai Sekarang →
        </a>
    </section>
</x-layout>
