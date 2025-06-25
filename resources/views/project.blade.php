<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
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
  
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-white shadow-lg">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium rounded-md hover:text-green-600">Beranda</a>
        <a href="{{ url('/project') }}" class="block px-3 py-2 text-base font-medium rounded-md text-green-600 font-bold">Project</a>
        <a href="{{ url('/kontak') }}" class="block px-3 py-2 text-base font-medium rounded-md hover:text-green-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Project Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Project Kami</h2>
        <div class="w-20 h-1 bg-green-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">Berbagai kegiatan dan program pemberdayaan masyarakat</p>
      </div>

      <!-- Filter Buttons -->
      <div class="flex flex-wrap justify-center gap-4 mb-12">
        <button class="filter-btn px-6 py-2 rounded-full bg-green-600 text-white font-medium transition-all hover:bg-green-700" data-filter="all">Semua</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-white border border-green-600 text-green-600 font-medium transition-all hover:bg-green-50" data-filter="kesehatan">Kesehatan</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-white border border-blue-600 text-blue-600 font-medium transition-all hover:bg-blue-50" data-filter="lingkungan">Lingkungan</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-white border border-orange-600 text-orange-600 font-medium transition-all hover:bg-orange-50" data-filter="sosial">Sosial</button>
      </div>

      <!-- Projects Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project 1 - Kesehatan -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="kesehatan">
          <div class="h-48 bg-green-100 flex items-center justify-center">
            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Kampanye Kesehatan</h3>
            <p class="text-gray-600 mb-4">Program edukasi kesehatan masyarakat tentang pentingnya pola hidup sehat dan pemeriksaan rutin.</p>
            <a href="#" class="inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>

        <!-- Project 2 - Lingkungan -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="lingkungan">
          <div class="h-48 bg-blue-100 flex items-center justify-center">
            <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Kesadatan PINA</h3>
            <p class="text-gray-600 mb-4">Melakukan kampanye untuk meningkatkan kesadaran masyarakat tentang pentingnya pendidikan lingkungan.</p>
            <a href="#" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>

        <!-- Project 3 - Sosial -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="sosial">
          <div class="h-48 bg-orange-100 flex items-center justify-center">
            <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Kegiatan Literasi</h3>
            <p class="text-gray-600 mb-4">Mengorganisir program literasi untuk meningkatkan minat baca di kalangan anak-anak dan remaja.</p>
            <a href="#" class="inline-block px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>

        <!-- Project 4 - Lingkungan -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="lingkungan">
          <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/project/penghijauan.jpg') }}')"></div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Penghijauan Lingkungan</h3>
            <p class="text-gray-600 mb-4">Program penanaman pohon dan pemeliharaan lingkungan di area pemukiman warga.</p>
            <a href="#" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>

        <!-- Project 5 - Sosial -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="sosial">
          <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/project/pelatihan.jpg') }}')"></div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelatihan Keterampilan</h3>
            <p class="text-gray-600 mb-4">Mengadakan pelatihan keterampilan seperti menjahit, memasak, dan komputer untuk remaja.</p>
            <a href="#" class="inline-block px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>

        <!-- Project 6 - Kesehatan -->
        <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-xl" data-category="kesehatan">
          <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/project/posyandu.jpg') }}')"></div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Posyandu Plus</h3>
            <p class="text-gray-600 mb-4">Program kesehatan ibu dan anak dengan pemeriksaan rutin dan edukasi gizi.</p>
            <a href="#" class="inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">INFORMASI LEBIH LANJUT</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
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

      // Project filtering
      const filterButtons = document.querySelectorAll('.filter-btn');
      const projectCards = document.querySelectorAll('.project-card');

      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          const filterValue = this.getAttribute('data-filter');
          
          // Update active button
          filterButtons.forEach(btn => {
            btn.classList.remove('text-white', 'bg-green-600', 'bg-blue-600', 'bg-orange-600');
            btn.classList.add('bg-white', 'border');
            
            if (btn === this) {
              btn.classList.remove('bg-white', 'border');
              if (filterValue === 'all') {
                btn.classList.add('bg-green-600', 'text-white');
              } else if (filterValue === 'kesehatan') {
                btn.classList.add('bg-green-600', 'text-white');
              } else if (filterValue === 'lingkungan') {
                btn.classList.add('bg-blue-600', 'text-white');
              } else if (filterValue === 'sosial') {
                btn.classList.add('bg-orange-600', 'text-white');
              }
            }
          });

          // Filter projects
          projectCards.forEach(card => {
            if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
              card.classList.remove('hidden');
            } else {
              card.classList.add('hidden');
            }
          });
        });
        });
    });
  </script>
</body>
</html>