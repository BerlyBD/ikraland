<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IKRALAND - Yayasan Sosial dan Lingkungan</title>
  <meta name="description" content="IKRA adalah yayasan yang berkomitmen untuk meningkatkan kesejahteraan masyarakat melalui program pertanian, peternakan dan kegiatan sosial.">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" href="{{ asset('images/logo.png') }}" as="image">
</head>
<body class="bg-white text-gray-800 font-sans">
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
      /* Add padding to prevent gap between button and dropdown */
      padding-top: 20px;
      margin-top: -20px;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown.active .dropdown-content {
      display: block;
    }
    .dropdown.active .dropdown-arrow {
      transform: rotate(180deg);
    }
    /* Create an invisible area to keep dropdown open when moving cursor */
    .dropdown::after {
      content: '';
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 20px;
      background: transparent;
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
                        <div class="dropdown-content absolute hidden mt-2 bg-gray-800 text-white rounded shadow-lg py-2 min-w-[200px]">
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
                        <div class="dropdown-content absolute hidden mt-2 bg-gray-800 text-white rounded shadow-lg py-2 min-w-[200px]">
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

    @include('partials.footer')
</body>
</html>