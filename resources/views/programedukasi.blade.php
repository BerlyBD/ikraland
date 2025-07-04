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

    <!-- Hero Section -->
    <section class="relative bg-green-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Program Edukasi IKRALAND</h1>
                <p class="text-xl max-w-3xl mx-auto">Belajar langsung dari alam dengan pengalaman edukatif yang menyenangkan</p>
            </div>
        </div>
    </section>

    <!-- About Program Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Edukasi</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-4xl mx-auto">
                    Alam Ikraland menjadi ruang belajar yang hidup bagi anak-anak untuk mengeksplorasi ilmu secara langsung dan menyenangkan. Program-program edukatif kami meliputi:
                </p>
            </div>

            <!-- Program List -->
            <div class="space-y-12">
                <!-- Jelajah Tanaman -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/3">
                            <img src="{{ asset('images/programedukasi/berkebun 1.jpg') }}" alt="Jelajah Tanaman" class="w-full h-64 object-cover rounded-lg edu-image">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Jelajah Tanaman</h3>
                            <p class="text-gray-600">
                                Anak-anak diajak mengenal bagian dan fungsi tumbuhan, melakukan eksplorasi tanaman di Ikraland, menanam dan memanen, serta membuat karya dan mempresentasikannya.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kelas Berkebun -->
                            <div class="bg-gray-50 rounded-xl p-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/3">
                            <img src="{{ asset('images/programedukasi/jelajah tanaman.jpg') }}" alt="Jelajah Tanaman" class="w-full h-64 object-cover rounded-lg edu-image">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Kelas Berkebun</h3>
                            <p class="text-gray-600">
                                Kegiatan interaktif untuk anak-anak PAUD/TK dan SD yang mengajak mereka mengenal bagian-bagian tumbuhan dan manfaatnya, dilengkapi dengan praktik menanam secara langsung.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sinema Edukasi -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/3">
                            <img src="{{ asset('images/programedukasi/sinema-edukasi.jpg') }}" alt="Sinema Edukasi" class="w-full h-64 object-cover rounded-lg edu-image">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Sinema Edukasi</h3>
                            <p class="text-gray-600">
                                Kegiatan menonton film bersama yang bertema pengetahuan alam, diikuti dengan sesi penjelasan materi oleh narasumber. Melalui tayangan visual yang menarik, anak-anak diajak memahami berbagai topik ilmu pengetahuan dengan cara yang menyenangkan dan mudah dicerna.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- HABEL -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/3">
                            <img src="{{ asset('images/programedukasi/habel.png') }}" alt="HABEL" class="w-full h-64 object-cover rounded-lg edu-image">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">HABEL (Hayo Belajar Benda Langit)</h3>
                            <p class="text-gray-600">
                                Pengenalan ilmu astronomi dengan kegiatan mengamati matahari melalui teleskop, mempelajari benda langit, dan membuat roket air bersama narasumber seorang astronom. Program ini diperuntukkan bagi anak-anak SD dan SMP.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    @include('partials.footer')
</body>
</html>