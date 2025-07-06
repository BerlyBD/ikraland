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
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Program Rekreasi IKRALAND</h1>
                <p class="text-xl max-w-3xl mx-auto">Pengalaman rekreasi yang menyenangkan di alam pedesaan</p>
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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Program 1: Gowes Jelajah Alam -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/rekreasi/gowes1.jpg') }}" alt="Gowes Jelajah Alam" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Gowes Jelajah Alam</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Bersepeda santai menyusuri jalur persawahan dan pedesaan dengan pemandangan alam yang asri.</p>
                        <a href="#gowes" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>

                <!-- Program 2: Mulih ka Lembur -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/rekreasi/mulih1.jpg') }}" alt="Mulih ka Lembur" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Mulih ka Lembur</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Pengalaman kembali ke desa dengan aktivitas tradisional yang menyenangkan.</p>
                        <a href="#mulih" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>

                <!-- Program 3: Ngagogo Lauk -->
                <div class="program-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/rekreasi/ngagogo1.jpg') }}" alt="Ngagogo Lauk" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Ngagogo Lauk</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600">Pengalaman memancing tradisional dengan nuansa pedesaan yang autentik.</p>
                        <a href="#ngagogo" class="mt-4 inline-block text-green-600 font-medium">Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Program Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Detail Program Rekreasi</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-6"></div>
            </div>

            <!-- Gowes Jelajah Alam -->
            <div id="gowes" class="mb-16 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <div class="grid grid-cols-2 gap-1">
                            <img src="{{ asset('images/rekreasi/gowes1.jpg') }}" alt="Gowes 1" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/gowes2.jpg') }}" alt="Gowes 2" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/gowes3.jpg') }}" alt="Gowes 3" class="w-full h-48 object-cover rekreasi-image">
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Gowes Jelajah Alam</h3>
                        <p class="text-gray-600 mb-4">
                            Aktivitas bersepeda santai menyusuri jalur persawahan dan pedesaan dengan menikmati udara segar dan pemandangan alam yang asri.
                        </p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Rute melalui sawah dan perkebunan</li>
                            <li>Pemandangan alam pedesaan yang indah</li>
                            <li>Sarapan pagi dengan menu tradisional</li>
                            <li>Pemandu lokal yang berpengalaman</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mulih ka Lembur -->
            <div id="mulih" class="mb-16 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <div class="grid grid-cols-2 gap-1">
                            <img src="{{ asset('images/rekreasi/mulih1.jpg') }}" alt="Mulih 1" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/mulih2.jpg') }}" alt="Mulih 2" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/mulih3.jpg') }}" alt="Mulih 3" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/mulih4.jpg') }}" alt="Mulih 4" class="w-full h-48 object-cover rekreasi-image">
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Mulih ka Lembur</h3>
                        <p class="text-gray-600 mb-4">
                            Pengalaman kembali ke desa dengan berbagai aktivitas tradisional yang menyenangkan dan edukatif.
                        </p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Pengenalan alat pertanian tradisional</li>
                            <li>Praktik menanam padi</li>
                            <li>Memasak dengan kayu bakar</li>
                            <li>Kegiatan budaya Sunda</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Ngagogo Lauk -->
            <div id="ngagogo" class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <div class="grid grid-cols-2 gap-1">
                            <img src="{{ asset('images/rekreasi/ngagogo1.jpg') }}" alt="Ngagogo 1" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/ngagogo2.jpg') }}" alt="Ngagogo 2" class="w-full h-48 object-cover rekreasi-image">
                            <img src="{{ asset('images/rekreasi/ngagogo3.jpg') }}" alt="Ngagogo 3" class="w-full h-48 object-cover rekreasi-image">
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Ngagogo Lauk</h3>
                        <p class="text-gray-600 mb-4">
                            Pengalaman memancing tradisional di kolam atau sungai dengan nuansa pedesaan yang autentik.
                        </p>
                        <ul class="list-disc pl-5 text-gray-600 space-y-2">
                            <li>Teknik memancing tradisional</li>
                            <li>Pengenalan jenis ikan lokal</li>
                            <li>Memasak hasil tangkapan</li>
                            <li>Berinteraksi dengan nelayan lokal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')

</body>
</html>