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
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 flex flex-col md:flex-row items-center gap-8 md:gap-12">
    <div class="flex-1 order-2 md:order-1">
      <p class="text-green-600 font-semibold mb-3">Bersama Membangun Kebaikan</p>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-5 leading-tight">Bergabunglah dengan IKRA untuk menciptakan dampak positif di masyarakat.</h1>
      <p class="text-gray-600 mb-6 text-lg leading-relaxed">
        IKRA adalah yayasan yang berkomitmen untuk meningkatkan kesejahteraan masyarakat melalui program pertanian, peternakan dan kegiatan sosial.
      </p>
    </div>
    <div class="flex-1 order-1 md:order-2">
      <img src="{{ asset('images/tentang.jpg') }}" alt="Kegiatan di IKRA Land" class="w-full rounded-lg shadow-xl transition-transform hover:scale-[1.02]" loading="lazy" />
    </div>
  </section>

  <!-- Tentang IKRA dengan Carousel -->
  <section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 md:gap-12 items-center">
      <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3]">
        <div id="carouselSlides" class="flex transition-transform duration-500 ease-in-out h-full">
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/slide1.jpg') }}" class="w-full h-full object-cover" alt="Fasilitas di IKRA Land" loading="lazy" />
          </div>
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/slide2.jpg') }}" class="w-full h-full object-cover" alt="Kegiatan pertanian" loading="lazy" />
          </div>
          <div class="w-full flex-shrink-0 h-full">
            <img src="{{ asset('images/slide3.jpg') }}" class="w-full h-full object-cover" alt="Kegiatan sosial" loading="lazy" />
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
          IKRALAND adalah sebuah kawasan berbasis sosial, lingkungan dan ekonomi umat yang didirikan untuk mendukung program pemberdayaan masyarakat melalui pertanian, peternakan, dan edukasi rekreatif.
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
    });
  </script>
</body>
</html>