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
        }
        .dropdown.active .dropdown-content {
            display: block;
        }
        .dropdown.active .dropdown-arrow {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
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
                            Paket Program
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
                            Paket Program
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
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 flex flex-col md:flex-row items-center gap-8 md:gap-12">
    <div class="flex-1 order-2 md:order-1">
      <p class="text-green-600 font-semibold mb-3">Bersama Membangun Kebaikan</p>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-5 leading-tight">Bergabunglah dengan IKRA untuk menciptakan dampak positif di masyarakat.</h1>
      <p class="text-gray-600 mb-6 text-lg leading-relaxed">
        IKRA adalah yayasan yang berkomitmen untuk meningkatkan kesejahteraan masyarakat melalui program pertanian, peternakan dan kegiatan sosial.
      </p>
    </div>
    <div class="flex-1 order-1 md:order-2">
      <img src="{{ asset('images/IMG20220324110113_01.jpg') }}" alt="Kegiatan di IKRA Land" class="w-full rounded-lg shadow-xl transition-transform hover:scale-[1.02]" loading="lazy" />
    </div>
  </section>

  <!-- Tentang IKRA dengan Carousel -->
  <section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 md:gap-12 items-center">
      <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3]">
        <div id="carouselSlides" class="flex transition-transform duration-500 ease-in-out h-full">
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/IMG20220324110119_01.jpg') }}" class="w-full h-full object-cover" alt="Fasilitas di IKRA Land" loading="lazy" />
          </div>
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/IMG20220324114031.jpg') }}" class="w-full h-full object-cover" alt="Kegiatan pertanian" loading="lazy" />
          </div>
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/IMG20220324114814.jpg') }}" class="w-full h-full object-cover" alt="Kegiatan sosial" loading="lazy" />
          </div>
        </div>
        <!-- Controls -->
        <button onclick="prevSlide()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow-md transition-all hover:scale-110" aria-label="Previous slide">
          ‹
        </button>
        <button onclick="nextSlide()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow-md transition-all hover:scale-110" aria-label="Next slide">
          ›
        </button>
        <!-- Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
          <button class="indicator w-3 h-3 rounded-full cursor-pointer focus:outline-none" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
          <button class="indicator w-3 h-3 rounded-full cursor-pointer focus:outline-none" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
          <button class="indicator w-3 h-3 rounded-full cursor-pointer focus:outline-none" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
        </div>
      </div>
      <div>
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-green-700">IKRALAND</h2>
        <p class="text-gray-700 leading-relaxed mb-6 text-lg">
          Ikraland adalah kawasan wakaf yang dikelola oleh Yayasan Wakaf IKRA Padjadjaran, berlokasi di Desa Padanaan, Kecamatan Paseh, Kabupaten Sumedang. Inisiatif ini dimulai sejak tahun 2018 dengan pembelian lahan seluas 6.000 m². Hingga kini, luas tanah wakaf telah berkembang menjadi 2,7 hektar dan dimanfaatkan untuk berbagai kegiatan produktif seperti pertanian, perikanan, dan edukasi lingkungan.
        </p>
        <p class="text-gray-700 leading-relaxed text-lg">
          Lebih dari sekadar lahan, Ikraland hadir sebagai "kelas tanpa dinding" yang mengajak setiap pengunjung untuk belajar langsung dari alam. Dengan konsep eksplorasi dan pembelajaran berbasis pengalaman, kawasan ini memberikan ruang bagi anak-anak, pelajar, maupun masyarakat umum untuk mengenal lebih dekat nilai-nilai keberlanjutan, ketahanan pangan, dan kearifan lokal dalam suasana pedesaan yang asri.
        </p>
      </div>
    </div>
  </section>

  <!-- Video + Map -->
  <section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 md:gap-12">
      <div class="aspect-video rounded-xl shadow-lg overflow-hidden">
        <iframe class="w-full h-full" src="https://www.google.com/maps?q=-6.7877,108.0312&hl=es;z=14&output=embed" frameborder="0" allowfullscreen loading="lazy" title="Lokasi IKRA Land"></iframe>
      </div>
      <div class="aspect-video rounded-xl shadow-lg overflow-hidden">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/E5qZoMEFi60" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="Video Profil IKRA Land"></iframe>
      </div>
    </div>
  </section>

  <script>
    // Carousel Logic
    let index = 0;
    let intervalId;
    const slides = document.getElementById("carouselSlides");
    const indicators = document.querySelectorAll('.indicator');
    
    if (slides && indicators) {
      const totalSlides = slides.children.length;
      
      function updateSlide() {
        slides.style.transform = `translateX(-${index * 100}%)`;
        indicators.forEach((dot, i) => {
          dot.classList.toggle('bg-green-600', i === index);
          dot.classList.toggle('bg-gray-400', i !== index);
        });
      }
      
      function nextSlide() {
        index = (index + 1) % totalSlides;
        updateSlide();
        resetInterval();
      }
      
      function prevSlide() {
        index = (index - 1 + totalSlides) % totalSlides;
        updateSlide();
        resetInterval();
      }
      
      function goToSlide(i) {
        index = i;
        updateSlide();
        resetInterval();
      }
      
      function resetInterval() {
        clearInterval(intervalId);
        startInterval();
      }
      
      function startInterval() {
        intervalId = setInterval(nextSlide, 5000);
      }
      
      updateSlide();
      startInterval();
      
      slides.parentElement.addEventListener('mouseenter', () => {
        clearInterval(intervalId);
      });
      
      slides.parentElement.addEventListener('mouseleave', () => {
        startInterval();
      });
    }
  </script>
</body>
</html>