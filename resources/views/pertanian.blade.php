<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Pertanian - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
  <style>
    .skew-bg {
      transform: skewY(-2deg);
      transform-origin: top left;
    }
    .skew-content {
      transform: skewY(2deg);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar Sticky -->
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <a href="{{ url('/') }}" class="flex items-center gap-2 group">
        <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain transition-transform group-hover:scale-105" loading="lazy" />
        <span class="text-lg font-bold text-green-700 group-hover:text-green-800 transition-colors">IKRALAND</span>
      </a>
      <button id="menuToggle" class="md:hidden text-3xl focus:outline-none transition-transform hover:scale-110" aria-label="Toggle menu" aria-expanded="false">
        ☰
      </button>
      <nav id="navMenu" class="hidden md:flex flex-col md:flex-row gap-4 md:gap-6 mt-4 md:mt-0 absolute md:static top-20 left-0 w-full md:w-auto bg-white md:bg-transparent px-6 md:px-0 py-4 md:py-0 shadow-lg md:shadow-none z-40 transition-all duration-300 ease-in-out">
        <div class="relative group">
          <a href="#" class="font-medium flex items-center gap-1 py-2">
            Tentang Kami
            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute hidden group-hover:block mt-0 bg-gray-800 text-white rounded-b shadow-lg py-2 min-w-[200px]">
            <a href="{{ url('/tentang/fasilitas') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Fasilitas</a>
            <a href="{{ url('/pertanian') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Pertanian</a>
            <a href="{{ url('/perikanan') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Perikanan</a>
          </div>
        </div>
        
        <div class="relative group">
          <a href="{{ url('/project') }}" class="font-medium flex items-center gap-1 py-2">
            Project
          </a>
        </div>
        
        <div class="relative group">
          <a href="#" class="font-medium flex items-center gap-1 py-2">
            Paket Program
            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <div class="absolute hidden group-hover:block mt-0 bg-gray-800 text-white rounded-b shadow-lg py-2 min-w-[200px]">
            <a href="{{ url('/programedukasi') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Program Edukasi</a>
            <a href="{{ url('/programrekreasi') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Program Rekreasi</a>
            <a href="{{ url('/programkesehatan') }}" class="block px-4 py-2 hover:bg-gray-700 transition-colors">Program Kesehatan</a>
          </div>
        </div>
        
        <a href="{{ url('/kontak') }}"class="font-medium py-2 hover:text-green-600 transition-colors">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative bg-green-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-green-800 skew-bg"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative skew-content">
      <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">Program Pertanian Berkelanjutan</h1>
        <p class="text-xl max-w-3xl mx-auto">Mengembangkan sistem pertanian organik yang ramah lingkungan dan meningkatkan produktivitas</p>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Fasilitas Pertanian Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Berbagai program dan fasilitas pertanian yang kami kembangkan untuk masyarakat</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Card 1 - Lahan Organik -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
        <img src="/images/fasilitas/pertanian/lahan.jpg" alt="Lahan Pertanian Organik" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-3">Lahan Pertanian Organik</h3>
          <p class="text-gray-600">Pengembangan lahan pertanian bebas bahan kimia dengan sistem organik.</p>
        </div>
      </div>


        <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
        <img src="/images/fasilitas/pertanian/bibit.jpg" alt="Lahan Pertanian Organik" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-3">Pembibitan Modern</h3>
          <p class="text-gray-600">Fasilitas pembibitan tanaman dengan teknologi terkini untuk hasil optimal.</p>
        </div>
      </div>


        <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
        <img src="/images/fasilitas/pertanian/pelatihan.jpg" alt="Lahan Pertanian Organik" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelatihan Pertanian</h3>
          <p class="text-gray-600">Program edukasi dan pelatihan teknik pertanian berkelanjutan bagi petani.</p>
        </div>
      </div>

      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Keunggulan Program</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Kami menawarkan solusi pertanian terpadu dengan pendekatan modern</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="text-green-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Organik 100%</h3>
          <p class="text-gray-600">Tanpa penggunaan bahan kimia sintetis, pupuk alami dan pestisida organik.</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="text-green-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Sertifikasi</h3>
          <p class="text-gray-600">Produk dengan sertifikasi organik resmi dan standar kualitas tinggi.</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="text-green-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Keamanan</h3>
          <p class="text-gray-600">Produk aman dikonsumsi dan ramah lingkungan untuk ekosistem sekitar.</p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="text-green-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Pemberdayaan</h3>
          <p class="text-gray-600">Memberdayakan petani lokal dengan pengetahuan dan teknologi terbaru.</p>
        </div>
      </div>
    </div>
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const toggleBtn = document.getElementById('menuToggle');
      const navMenu = document.getElementById('mobileMenu');
      const menuIcon = document.getElementById('menuIcon');
      const closeIcon = document.getElementById('closeIcon');

      if (toggleBtn && navMenu) {
        toggleBtn.addEventListener('click', function() {
          const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
          toggleBtn.setAttribute('aria-expanded', !isExpanded);
          navMenu.classList.toggle('hidden');
          
          menuIcon.classList.toggle('hidden');
          closeIcon.classList.toggle('hidden');
        });
      }
    });
  </script>
</body>
</html>