<header class="sticky top-0 z-50 bg-white shadow">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="flex items-center gap-2">
      <img src="{{ asset('images/logo.png') }}" alt="Logo IKRA" class="h-10 w-10 object-contain" />
      <span class="text-lg font-bold text-green-700">IKRALAND</span>
    </div>
    <button id="menuToggle" class="md:hidden text-3xl font-bold text-gray-700 focus:outline-none">☰</button>
    <nav id="navMenu" class="hidden md:flex flex-col md:flex-row gap-4 md:gap-6 mt-4 md:mt-0 absolute md:static top-20 left-0 w-full md:w-auto bg-white md:bg-transparent px-6 md:px-0 py-4 md:py-0 shadow md:shadow-none z-40">
      <div class="relative group">
        <button class="font-medium">Tentang Kami</button>
        <div class="absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2">
          <a href="{{ url('/tentang/fasilitas') }}" class="block px-4 py-2 hover:bg-gray-700">Fasilitas</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Pertanian</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Perikanan</a>
        </div>
      </div>
      <!-- Project & Program -->
      <div class="relative group">
        <button class="font-medium">Project</button>
        <div class="absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Project Lingkungan</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Project Kolaborasi</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Project Sosial</a>
        </div>
      </div>
      <div class="relative group">
        <button class="font-medium">Paket Program</button>
        <div class="absolute hidden group-hover:block mt-2 bg-gray-800 text-white rounded shadow-lg py-2">
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Program Edukasi</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-700">Program Rekreasi</a>
        </div>
      </div>
      <a href="#" class="font-medium">Kontak</a>
    </nav>
  </div>
</header>

<script>
  const toggleBtn = document.getElementById('menuToggle');
  const navMenu = document.getElementById('navMenu');
  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
</script>
