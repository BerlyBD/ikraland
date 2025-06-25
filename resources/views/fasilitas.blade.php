<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fasilitas - IKRALAND</title>
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

  <!-- Fasilitas Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Fasilitas IKRALAND</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/akasia.jpg') }}" alt="Blok Tanaman Akasia" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Toilet dan Tempat Wudhu</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id soluta dolor animi velit provident voluptate ab? Perferendis dolore, tenetur expedita, magni doloremque odio iure quidem ipsa dolorum perspiciatis natus laborum.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/kolam.jpg') }}" alt="Kolam Ikan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Mushola</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit laudantium voluptates ratione inventore, recusandae qui ut voluptatem molestias perspiciatis nam cupiditate reprehenderit consequuntur repudiandae possimus sunt odio! Consequatur, sit. Adipisci.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/rumah1.jpg') }}" alt="Rumah Belajar" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Rumah Belajar</h3>
            <p class="text-gray-600">Fasilitas belajar bagi anak-anak dan masyarakat sekitar untuk pendidikan informal.</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/saung.jpg') }}" alt="Rumah Belajar" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Saung Botram</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum obcaecati deleniti aperiam, nulla esse optio eos unde repudiandae quos, eum ea! Explicabo nulla a voluptatem ut impedit assumenda enim?</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/rumah2.jpg') }}" alt="Rumah Belajar 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Rumah Belajar 2</h3>
            <p class="text-gray-600">Gedung tambahan untuk kegiatan belajar dan pelatihan komunitas.</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02] hover:shadow-lg">
          <div class="h-64 overflow-hidden">
            <img src="{{ asset('images/fasilitas/tenda.jpg') }}" alt="Rumah Belajar" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Tenda Permanen</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum in sunt veritatis, suscipit nemo illum eligendi laudantium nam atque iusto iure repellendus, qui non accusantium nesciunt reprehenderit, odio provident laboriosam?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle Nav Mobile
      const toggleBtn = document.getElementById('menuToggle');
      const navMenu = document.getElementById('navMenu');
      
      if (toggleBtn && navMenu) {
        toggleBtn.addEventListener('click', () => {
          const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
          toggleBtn.setAttribute('aria-expanded', !isExpanded);
          navMenu.classList.toggle('hidden');
          
          toggleBtn.textContent = isExpanded ? '☰' : '✕';
        });
        
        const navItems = navMenu.querySelectorAll('a[href]');
        navItems.forEach(item => {
          item.addEventListener('click', () => {
            if (window.innerWidth < 768) {
              navMenu.classList.add('hidden');
              toggleBtn.setAttribute('aria-expanded', 'false');
              toggleBtn.textContent = '☰';
            }
          });
        });
      }
      
    });
  </script>
</body>
</html>