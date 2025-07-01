<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Perikanan - IKRALAND</title>
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
    .hero-bg {
      background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset("images/Bioflok - Ikan Nila (1).jpg") }}');
      background-size: cover;
      background-position: center;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <!-- Top Bar -->
      <div class="flex justify-between items-center">
        <a href="/" class="flex items-center gap-2 group">
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
              <a href="/tentang/fasilitas" class="block px-4 py-2 hover:bg-gray-700">Fasilitas</a>
              <a href="/pertanian" class="block px-4 py-2 hover:bg-gray-700">Pertanian</a>
              <a href="/perikanan" class="block px-4 py-2 hover:bg-gray-700">Perikanan</a>
            </div>
          </div>
          
          <a href="/project" class="font-medium">Project</a>
          
          <div class="dropdown group relative">
            <button class="dropdown-btn flex items-center gap-1 font-medium">
              Program Kami
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2 min-w-[200px]">
              <a href="/programedukasi" class="block px-4 py-2 hover:bg-gray-700">Program Edukasi</a>
              <a href="/programrekreasi" class="block px-4 py-2 hover:bg-gray-700">Program Rekreasi</a>
              <a href="/programkesehatan" class="block px-4 py-2 hover:bg-gray-700">Program Kesehatan</a>
            </div>
          </div>
          
          <a href="/kontak" class="font-medium">Kontak</a>
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
              <a href="/tentang/fasilitas" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
              <a href="/pertanian" class="block px-4 py-2 hover:bg-gray-100">Pertanian</a>
              <a href="/perikanan" class="block px-4 py-2 hover:bg-gray-100">Perikanan</a>
            </div>
          </div>
          
          <a href="/project" class="px-4 py-2 font-medium">Project</a>
          
          <div class="dropdown">
            <button class="dropdown-btn w-full flex justify-between items-center px-4 py-2 font-medium">
              Program Kami
              <svg class="dropdown-arrow w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="dropdown-content pl-6">
              <a href="/programedukasi" class="block px-4 py-2 hover:bg-gray-100">Program Edukasi</a>
              <a href="/programrekreasi" class="block px-4 py-2 hover:bg-gray-100">Program Rekreasi</a>
              <a href="/programkesehatan" class="block px-4 py-2 hover:bg-gray-100">Program Kesehatan</a>
            </div>
          </div>
          
          <a href="/kontak" class="px-4 py-2 font-medium">Kontak</a>
        </div>
      </div>
    </div>
  </header>

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

  <!-- Hero Section -->
  <section class="relative py-32 hero-bg text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
      <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Program Perikanan Bioflok</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed">
          Sistem budidaya ikan modern yang ramah lingkungan dengan teknologi bioflok untuk hasil optimal dan berkelanjutan.
        </p>
      </div>
    </div>
  </section>

  <!-- Bioflok Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="md:flex items-center gap-12">
        <div class="md:w-1/2 mb-8 md:mb-0">
          <img src="{{ asset('images/fasilitas/perikanan/kkp-kembangkan-teknologi-budidaya-baru-sistem-bioflok-untuk-ikan-nila-50.jpeg') }}" alt="Sistem Bioflok Ikan Nila" class="w-full rounded-lg shadow-xl">
        </div>
        <div class="md:w-1/2">
          <h2 class="text-3xl font-bold text-gray-800 mb-6">Teknologi Bioflok Ikan Nila</h2>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Di Ikraland, sistem budidaya ikan bioflok dikembangkan sebagai bagian dari upaya ketahanan pangan berbasis teknologi ramah lingkungan. Menggunakan komoditas ikan Nila, sistem bioflok memungkinkan budidaya intensif dengan efisiensi tinggi, memanfaatkan mikroorganisme untuk menjaga kualitas air dan mengolah limbah organik menjadi pakan alami.
          </p>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Selain menghasilkan protein berkualitas bagi masyarakat, program ini juga melibatkan warga sekitar dalam proses pengolahan menjadi produk Nila Frozen Food, sehingga membuka peluang pemberdayaan ekonomi lokal.
          </p>
          <div class="flex flex-wrap gap-4">
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Budidaya Ikan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Proses pengembangan dan hasil dari program perikanan kami</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('images/fasilitas/perikanan/Bioflok - Ikan Nila (1).jpg') }}" alt="Budidaya Ikan Nila" class="w-full h-96 object-cover">
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('images/fasilitas/perikanan/Bioflok - Ikan Nila (2).jpg') }}" alt="Teknologi Bioflok" class="w-full h-96 object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Keunggulan Sistem Bioflok</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Keuntungan yang didapat dari penerapan teknologi bioflok</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm feature-card transition-all duration-300">
          <div class="text-blue-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Efisiensi Tinggi</h3>
          <p class="text-gray-600">Budidaya ikan dengan kepadatan tinggi namun tetap optimal.</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm feature-card transition-all duration-300">
          <div class="text-blue-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Penghematan Pakan</h3>
          <p class="text-gray-600">Mengkonversi limbah menjadi pakan alami untuk ikan.</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm feature-card transition-all duration-300">
          <div class="text-blue-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Ramah Lingkungan</h3>
          <p class="text-gray-600">Minim limbah dan tidak mencemari lingkungan sekitar.</p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white p-6 rounded-lg shadow-sm feature-card transition-all duration-300">
          <div class="text-blue-600 mb-4">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-3">Pemberdayaan</h3>
          <p class="text-gray-600">Menciptakan lapangan kerja dan usaha bagi masyarakat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Proses Pengolahan Nila Frozen Food</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Dari kolam bioflok hingga menjadi produk bernilai tinggi</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Step 1 -->
        <div class="text-center">
          <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-blue-600 text-xl font-bold mb-4 shadow-md">1</div>
          <h3 class="font-semibold text-lg mb-2">Budidaya Intensif</h3>
          <p class="text-gray-600">Ikan nila dibesarkan dalam sistem bioflok</p>
        </div>
        
        <!-- Step 2 -->
        <div class="text-center">
          <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-blue-600 text-xl font-bold mb-4 shadow-md">2</div>
          <h3 class="font-semibold text-lg mb-2">Panen Berkualitas</h3>
          <p class="text-gray-600">Seleksi ikan dengan standar tinggi</p>
        </div>
        
        <!-- Step 3 -->
        <div class="text-center">
          <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-blue-600 text-xl font-bold mb-4 shadow-md">3</div>
          <h3 class="font-semibold text-lg mb-2">Pengolahan</h3>
          <p class="text-gray-600">Proses filleting dan pembekuan</p>
        </div>
        
        <!-- Step 4 -->
        <div class="text-center">
          <div class="bg-white w-16 h-16 mx-auto rounded-full flex items-center justify-center text-blue-600 text-xl font-bold mb-4 shadow-md">4</div>
          <h3 class="font-semibold text-lg mb-2">Pemasaran</h3>
          <p class="text-gray-600">Distribusi produk ke pasar lokal</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>