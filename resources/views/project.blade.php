<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project - IKRALAND</title>
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
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar Sticky -->
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <!-- Top Bar -->
      <div class="flex justify-between items-center">
        <a href="{{ url('/') }}" class="flex items-center gap-2 group">
          <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain" loading="lazy" />
          <span class="text-lg font-bold text-green-700">IKRALAND</span>
        </a>
        
        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden text-2xl focus:outline-none" aria-expanded="false">
          ☰
        </button>
        
        <!-- Desktop Menu -->
        <nav class="hidden md:flex gap-6">
          <div class="dropdown group relative">
            <button class="dropdown-btn flex items-center gap-1 font-medium">
              Tentang Kami
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2 min-w-[200px]">
              <a href="{{ url('/tentang/fasilitas') }}" class="block px-4 py-2 hover:bg-gray-700">Fasilitas</a>
              <a href="{{ url('/pertanian') }}" class="block px-4 py-2 hover:bg-gray-700">Pertanian</a>
              <a href="{{ url('/perikanan') }}" class="block px-4 py-2 hover:bg-gray-700">Perikanan</a>
            </div>
          </div>
          
          <a href="{{ url('/project') }}" class="font-medium">Project</a>
          
          <div class="dropdown group relative">
            <button class="dropdown-btn flex items-center gap-1 font-medium">
              Paket Program
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2 min-w-[200px]">
              <a href="{{ url('/programedukasi') }}" class="block px-4 py-2 hover:bg-gray-700">Program Edukasi</a>
              <a href="{{ url('/programrekreasi') }}" class="block px-4 py-2 hover:bg-gray-700">Program Rekreasi</a>
              <a href="{{ url('/programkesehatan') }}" class="block px-4 py-2 hover:bg-gray-700">Program Kesehatan</a>
            </div>
          </div>
          
          <a href="{{ url('/kontak') }}" class="font-medium">Kontak</a>
        </nav>
      </div>
      
      <!-- Mobile Menu -->
      <div id="mobileMenu" class="mobile-menu md:hidden bg-white">
        <div class="flex flex-col gap-1 py-3">
          <div class="dropdown">
            <button class="dropdown-btn w-full flex justify-between items-center px-4 py-2 font-medium">
              Tentang Kami
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content pl-6">
              <a href="{{ url('/tentang/fasilitas') }}" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
              <a href="{{ url('/pertanian') }}" class="block px-4 py-2 hover:bg-gray-100">Pertanian</a>
              <a href="{{ url('/perikanan') }}" class="block px-4 py-2 hover:bg-gray-100">Perikanan</a>
            </div>
          </div>
          
          <a href="{{ url('/project') }}" class="px-4 py-2 font-medium">Project</a>
          
          <div class="dropdown">
            <button class="dropdown-btn w-full flex justify-between items-center px-4 py-2 font-medium">
              Paket Program
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content pl-6">
              <a href="{{ url('/programedukasi') }}" class="block px-4 py-2 hover:bg-gray-100">Program Edukasi</a>
              <a href="{{ url('/programrekreasi') }}" class="block px-4 py-2 hover:bg-gray-100">Program Rekreasi</a>
              <a href="{{ url('/programkesehatan') }}" class="block px-4 py-2 hover:bg-gray-100">Program Kesehatan</a>
            </div>
          </div>
          
          <a href="{{ url('/kontak') }}" class="px-4 py-2 font-medium">Kontak</a>
        </div>
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
    // Mobile menu functionality
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