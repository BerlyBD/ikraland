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
    .project-card {
      transition: all 0.3s ease;
    }
    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
      <div class="flex justify-between items-center">
        <a href="{{ url('/') }}" class="flex items-center gap-2 group">
          <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain" loading="lazy" />
          <span class="text-lg font-bold text-green-700">IKRALAND</span>
        </a>
        
        <button id="mobileMenuButton" class="md:hidden text-2xl focus:outline-none" aria-expanded="false">
          ☰
        </button>
        
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
              Program Kami
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
              Program Kami
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


  <!-- Projects Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Proyek Unggulan IKRA Land</h2>
        <div class="w-20 h-1 bg-green-600 mx-auto mb-6"></div>
        <p class="text-gray-600 max-w-3xl mx-auto">Inovasi berkelanjutan untuk lingkungan dan masyarakat</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Hutan Miyawaki -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/miyawaki-thumb.jpg') }}" alt="Hutan Miyawaki" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Hutan Miyawaki</h3>
            <p class="text-gray-600 mb-4">Metode penghijauan dengan menanam berbagai jenis pohon lokal secara rapat dalam area sempit.</p>
            <div class="flex justify-between items-center">
              <a href="#miyawaki-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>

        <!-- JADAM -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/jadam-thumb.jpg') }}" alt="Pertanian JADAM" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Pertanian JADAM</h3>
            <p class="text-gray-600 mb-4">Metode pertanian organik asal Korea yang hemat biaya dan mengandalkan bahan-bahan alami lokal.</p>
            <div class="flex justify-between items-center">
              <a href="#jadam-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>

        <!-- Bioflok -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/bioflok-thumb.jpg') }}" alt="Budidaya Bioflok" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Budidaya Bioflok</h3>
            <p class="text-gray-600 mb-4">Teknologi budidaya ikan yang efisien dan ramah lingkungan dengan sistem pengolahan limbah organik.</p>
            <div class="flex justify-between items-center">
              <a href="#bioflok-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>

        <!-- Hidram -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/hidram-thumb.jpg') }}" alt="Pompa Hidram" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Pompa Hidram</h3>
            <p class="text-gray-600 mb-4">Teknologi pompa air tanpa listrik yang bekerja dengan memanfaatkan tekanan air alami.</p>
            <div class="flex justify-between items-center">
              <a href="#hidram-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>

        <!-- Halfmoon -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/halfmoon-thumb.jpg') }}" alt="Teknik Halfmoon" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Teknik Halfmoon</h3>
            <p class="text-gray-600 mb-4">Teknik konservasi air sederhana berupa galian setengah lingkaran untuk menampung air hujan.</p>
            <div class="flex justify-between items-center">
              <a href="#halfmoon-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>

        <!-- Teba Modern -->
        <div class="project-card bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-48">
            <img src="{{ asset('images/projects/teba-thumb.jpg') }}" alt="Teba Modern" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Teba Modern</h3>
            <p class="text-gray-600 mb-4">Sistem pengelolaan sampah berbasis komunitas yang mengolah sampah organik menjadi kompos.</p>
            <div class="flex justify-between items-center">
              <a href="#teba-detail" class="text-green-600 font-medium hover:text-green-700">Selengkapnya →</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Details Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-12">
        <!-- Hutan Miyawaki -->
        <div id="miyawaki-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/miyawaki.jpg') }}" alt="Hutan Miyawaki" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-green-700 mb-4">Hutan Miyawaki</h3>
              <p class="text-gray-700 mb-4">Hutan Miyawaki adalah metode penghijauan dengan menanam berbagai jenis pohon lokal secara rapat dalam area sempit. Teknik ini mampu menciptakan ekosistem hutan mini yang tumbuh cepat, padat, dan mandiri hanya dalam waktu beberapa tahun.</p>
              <p class="text-gray-700 mb-4">Di Ikraland, pendekatan ini digunakan untuk memulihkan lahan kritis sekaligus membangun zona konservasi alami yang menunjang keseimbangan lingkungan.</p>
              <p class="text-gray-700">Penerapan Hutan Miyawaki di Ikraland tidak hanya memperkaya keanekaragaman hayati, tetapi juga menjadi sarana edukasi lingkungan bagi masyarakat dan anak-anak. Area ini kini menjadi ruang belajar terbuka tentang pentingnya penghijauan dan solusi iklim berbasis komunitas.</p>
            </div>
          </div>
        </div>

        <!-- JADAM -->
        <div id="jadam-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/jadam.jpg') }}" alt="Pertanian JADAM" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-yellow-700 mb-4">Pertanian JADAM</h3>
              <p class="text-gray-700 mb-4">JADAM (Jayonul Damun Saramdul) adalah metode pertanian organik asal Korea yang sangat hemat biaya dan mengandalkan bahan-bahan alami lokal. Di Ikraland, JADAM diterapkan sebagai bentuk kemandirian pertanian, tanpa pupuk dan pestisida kimia.</p>
              <p class="text-gray-700 mb-4">Petani membuat sendiri pupuk cair, mikroorganisme lokal, dan pestisida organik dari limbah dapur atau bahan alam sekitar.</p>
              <p class="text-gray-700">Dengan JADAM, Ikraland mengedukasi masyarakat bahwa pertanian sehat tidak harus mahal. Sistem ini mudah ditiru dan diterapkan oleh petani kecil sekalipun, sehingga mendukung ketahanan pangan lokal dan pelestarian tanah serta air secara berkelanjutan.</p>
            </div>
          </div>
        </div>

        <!-- Bioflok -->
        <div id="bioflok-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/bioflok.jpg') }}" alt="Budidaya Bioflok" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-blue-700 mb-4">Budidaya Bioflok</h3>
              <p class="text-gray-700 mb-4">Bioflok adalah teknologi budidaya ikan yang efisien dan ramah lingkungan. Sistem ini menggunakan mikroorganisme untuk mengolah limbah organik dalam kolam menjadi pakan alami bagi ikan. Di Ikraland, metode ini digunakan untuk membudidayakan ikan nila dengan kebutuhan air yang jauh lebih rendah dibanding budidaya konvensional.</p>
              <p class="text-gray-700">Teknologi ini bukan hanya solusi hemat air, tetapi juga menghasilkan protein tinggi dengan biaya operasional yang lebih efisien. Bioflok di Ikraland menjadi bagian dari upaya ketahanan pangan dan ekonomi produktif masyarakat, sekaligus memperkenalkan cara beternak ikan yang ramah lingkungan.</p>
            </div>
          </div>
        </div>

        <!-- Hidram -->
        <div id="hidram-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/hidram.jpg') }}" alt="Pompa Hidram" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-purple-700 mb-4">Pompa Hidram</h3>
              <p class="text-gray-700 mb-4">Hidram adalah teknologi pompa air tanpa listrik yang bekerja dengan memanfaatkan tekanan air alami. Di Ikraland, pompa ini digunakan untuk mengalirkan air dari sumber yang lebih rendah ke lahan yang berada di ketinggian.</p>
              <p class="text-gray-700">Teknologi sederhana ini dapat memompa air dari sumber mata air ke tempat yang lebih tinggi tanpa menggunakan listrik. Alat ini bekerja memanfaatkan tekanan dari air yang jatuh, sehingga hemat energi dan ramah lingkungan. Sistem ini sangat cocok untuk daerah terpencil atau minim akses energi.</p>
            </div>
          </div>
        </div>

        <!-- Halfmoon -->
        <div id="halfmoon-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/halfmoon.jpg') }}" alt="Teknik Halfmoon" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-orange-700 mb-4">Teknik Halfmoon</h3>
              <p class="text-gray-700 mb-4">Halfmoon adalah teknik konservasi air sederhana berupa galian setengah lingkaran yang dibuat di kontur tanah. Fungsinya adalah menampung air hujan dan memperkuat daya resap tanah, sehingga mengurangi limpasan dan meningkatkan kelembaban tanah di sekitarnya.</p>
              <p class="text-gray-700 mb-4">Di Ikraland, halfmoon digunakan untuk memulihkan lahan kering dan mendukung pertumbuhan vegetasi.</p>
              <p class="text-gray-700">Metode ini terbukti efektif, murah, dan mudah diaplikasikan di lahan-lahan kritis. Halfmoon menjadi langkah nyata adaptasi terhadap perubahan iklim, khususnya dalam menjaga siklus air tanah dan mendukung pertanian berkelanjutan.</p>
            </div>
          </div>
        </div>

        <!-- Teba Modern -->
        <div id="teba-detail" class="bg-gray-50 p-8 rounded-xl">
          <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
              <img src="{{ asset('images/projects/teba.jpg') }}" alt="Teba Modern" class="w-full rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
              <h3 class="text-2xl font-bold text-red-700 mb-4">Teba Modern</h3>
              <p class="text-gray-700 mb-4">Teba Modern adalah sistem pengelolaan sampah berbasis komunitas yang dikembangkan di Ikraland. Teba Modern mengolah sampah organik menjadi kompos dan memisahkan sampah anorganik untuk didaur ulang.</p>
              <p class="text-gray-700 mb-4">Fasilitas ini menjadi pusat edukasi lingkungan dan tempat praktik langsung pengurangan sampah rumah tangga.</p>
              <p class="text-gray-700">Dengan pendekatan ini, masyarakat diajak untuk lebih peduli terhadap sampah dan menyadari bahwa limbah pun bisa menjadi sumber daya. Teba Modern di Ikraland adalah contoh nyata pengelolaan sampah yang berkelanjutan dan dapat direplikasi di tingkat komunitas.</p>
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
</body>
</html>