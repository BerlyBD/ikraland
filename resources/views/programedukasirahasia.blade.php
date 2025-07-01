<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Edukasi - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
  <style>
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }
    .mobile-menu.open {
      max-height: 500px;
      transition: max-height 0.5s ease-in;
    }
    .dropdown-content {
      display: none;
    }
    .dropdown.active .dropdown-content {
      display: block;
    }
    .dropdown.active .dropdown-arrow {
      transform: rotate(180deg);
    }
    .edu-image {
      transition: transform 0.3s ease;
    }
    .edu-image:hover {
      transform: scale(1.03);
    }
    .program-card {
      transition: all 0.3s ease;
    }
    .program-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-gray-50">
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <!-- Header content remains the same as before -->
        <!-- ... -->
    </header>

    <!-- Hero Section -->
    <section class="relative bg-green-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Program Edukasi IKRALAND</h1>
                <p class="text-xl max-w-3xl mx-auto">Belajar langsung dari alam dengan pengalaman edukatif yang menyenangkan</p>
            </div>
        </div>
    </section>

    <!-- Program Highlights -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Unggulan Kami</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Program 1 -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/programedukasi/jelajah-tanaman.jpg') }}" alt="Jelajah Tanaman" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Jelajah Tanaman</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Mengenal bagian dan fungsi tumbuhan, eksplorasi tanaman, menanam dan memanen, serta membuat karya.</p>
                        <a href="#jelajah-tanaman" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/programedukasi/berkebun 1.jpg') }}" alt="Kelas Berkebun" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Kelas Berkebun</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Praktik menanam langsung untuk anak-anak PAUD/TK dan SD dengan metode interaktif.</p>
                        <a href="#kelas-berkebun" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/programedukasi/habel.jpg') }}" alt="HABEL" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">HABEL</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Pengenalan astronomi dengan pengamatan matahari dan pembuatan roket air untuk anak SD/SMP.</p>
                        <a href="#habel" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Program Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Detail Program Edukasi</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-6"></div>
            </div>

            <!-- Jelajah Tanaman -->
            <div id="jelajah-tanaman" class="mb-16 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="{{ asset('images/programedukasi/jelajah-tanaman.jpg') }}" alt="Jelajah Tanaman" class="w-full h-full object-cover edu-image">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Jelajah Tanaman</h3>
                        <p class="text-gray-600 mb-4">
                            Anak-anak diajak mengenal bagian dan fungsi tumbuhan, melakukan eksplorasi tanaman di Ikraland, menanam dan memanen, serta membuat karya dan mempresentasikannya.
                        </p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Pengenalan berbagai jenis tanaman</li>
                            <li>Praktik menanam dan merawat tanaman</li>
                            <li>Kegiatan memanen hasil kebun</li>
                            <li>Pembuatan karya dari bahan alam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kelas Berkebun -->
            <div id="kelas-berkebun" class="mb-16 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <div class="grid grid-cols-2 gap-1">
                            <img src="{{ asset('images/programedukasi/berkebun 1.jpg') }}" alt="Berkebun 1" class="w-full h-48 object-cover edu-image">
                            <img src="{{ asset('images/programedukasi/berkebun 2.jpg') }}" alt="Berkebun 2" class="w-full h-48 object-cover edu-image">
                            <img src="{{ asset('images/programedukasi/berkebun 3.jpg') }}" alt="Berkebun 3" class="w-full h-48 object-cover edu-image">
                            <img src="{{ asset('images/programedukasi/berkebun 4.jpg') }}" alt="Berkebun 4" class="w-full h-48 object-cover edu-image">
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Kelas Berkebun</h3>
                        <p class="text-gray-600 mb-4">
                            Kegiatan interaktif untuk anak-anak PAUD/TK dan SD yang mengajak mereka mengenal bagian-bagian tumbuhan dan manfaatnya, dilengkapi dengan praktik menanam secara langsung.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Untuk PAUD/TK:</h4>
                                <ul class="list-disc pl-5 text-gray-600 space-y-1">
                                    <li>Pengenalan tanaman sederhana</li>
                                    <li>Menanam biji kacang</li>
                                    <li>Menyiram tanaman</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Untuk SD:</h4>
                                <ul class="list-disc pl-5 text-gray-600 space-y-1">
                                    <li>Memahami siklus tanaman</li>
                                    <li>Praktik menanam sayuran</li>
                                    <li>Pembuatan pupuk alami</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HABEL -->
            <div id="habel" class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="{{ asset('images/programedukasi/habel.jpg') }}" alt="HABEL" class="w-full h-full object-cover edu-image">
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">HABEL (Hayo Belajar Benda Langit)</h3>
                        <p class="text-gray-600 mb-4">
                            Pengenalan ilmu astronomi dengan kegiatan mengamati matahari melalui teleskop, mempelajari benda langit, dan membuat roket air bersama narasumber seorang astronom. Program ini diperuntukkan bagi anak-anak SD dan SMP.
                        </p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Pengamatan matahari dengan teleskop khusus</li>
                            <li>Pengenalan tata surya dan benda langit</li>
                            <li>Workshop pembuatan roket air</li>
                            <li>Pemahaman dasar astronomi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-green-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Tertarik dengan Program Edukasi Kami?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Daftarkan sekolah atau kelompok Anda sekarang untuk pengalaman belajar yang tak terlupakan</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/kontak" class="inline-block bg-white text-green-700 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">Hubungi Kami</a>
                <a href="tel:+62213141516" class="inline-block border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-green-700 transition duration-300">Telepon Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">IKRALAND</h3>
                    <p class="text-gray-400">Ruang hidup yang menyatukan misi sosial, pendidikan, dan pelestarian budaya.</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Program</h3>
                    <ul class="space-y-2">
                        <li><a href="/programedukasi" class="text-gray-400 hover:text-white">Edukasi</a></li>
                        <li><a href="/programrekreasi" class="text-gray-400 hover:text-white">Rekreasi</a></li>
                        <li><a href="/programkesehatan" class="text-gray-400 hover:text-white">Kesehatan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="/tentang" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="/project" class="text-gray-400 hover:text-white">Project</a></li>
                        <li><a href="/kontak" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Desa Padanaan, Kec. Paseh</li>
                        <li>Sumedang, Jawa Barat</li>
                        <li>Email: info@ikraland.com</li>
                        <li>Telp: (022) 3141516</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>© 2023 IKRALAND. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const menuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuButton.addEventListener('click', function() {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('open');
            menuButton.textContent = isExpanded ? '☰' : '✕';
        });
        
        // Mobile dropdown functionality
        const dropdownBtns = document.querySelectorAll('.dropdown-btn');
        
        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                if (window.innerWidth >= 768) return;
                
                const dropdown = this.closest('.dropdown');
                dropdown.classList.toggle('active');
                
                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(d => {
                    if (d !== dropdown) d.classList.remove('active');
                });
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown') && window.innerWidth < 768) {
                document.querySelectorAll('.dropdown').forEach(d => {
                    d.classList.remove('active');
                });
            }
        });
    });
    </script>
</body>
</html>