<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - IKRALAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <a href="{{ url('/kontak') }}" class="block px-3 py-2 text-base font-medium rounded-md text-green-600 font-bold">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
        <div class="w-20 h-1 bg-green-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">Silakan hubungi kami melalui media sosial atau formulir kontak</p>
      </div>

      <!-- Social Media Links -->
      <div class="flex justify-center gap-6 mb-12">
        <!-- YouTube -->
        <a href="https://www.youtube.com/@ikradokterunpad" target="_blank" class="w-12 h-12 rounded-full bg-red-600 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-youtube text-xl"></i>
        </a>
        
        <!-- Instagram -->
        <a href="https://www.instagram.com/ikraland.nec/" target="_blank" class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        
        <!-- WhatsApp -->
        <a href="https://wa.me/6283103242552" target="_blank" class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center transition-transform hover:scale-110 hover:shadow-lg">
          <i class="fab fa-whatsapp text-xl"></i>
        </a>
      </div>

      <!-- Contact Button -->
      <div class="text-center">
        <a href="#" class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition-colors shadow-lg hover:shadow-xl">
          Hubungi Kami
        </a>
      </div>



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