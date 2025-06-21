<header class="bg-white shadow-sm border-b border-gray-200">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
    <!-- Logo dan Nama -->
    <div class="flex items-center space-x-3">
      <img src="<?php echo base_url('../assets/logo.png') ?>" alt="Logo Kepolisian" class="w-10 h-12" />
      <div class="leading-tight">
        <p class="text-1xl font-semibold text-black">Kepolisian</p>
	    <p class="text-1xl text-gray-700"> Daerah Istimewa Yogyakarta</p>
      </div>
    </div>

    <!-- Hamburger (Mobile) -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-2xl focus:outline-none">
        <i class="fas fa-bars text-gray-800"></i>
      </button>
    </div>

    <!-- Menu (Desktop) -->
    <nav id="main-menu" class="hidden md:flex space-x-6 text-sm font-medium text-black">
      <a href="<?php echo base_url('homepage'); ?>" class="hover:underline">Home</a>
      <a href="<?php echo base_url('daftar_aduan'); ?>" class="hover:underline">Daftar Aduan</a>
    </nav>
  </div>

  <!-- Menu (Mobile dropdown) -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-3 space-y-2">
    <a href="<?php echo base_url('homepage'); ?>" class="block text-sm font-medium text-black hover:underline">Home</a>
    <a href="<?php echo base_url('daftar_aduan'); ?>" class="block text-sm font-medium text-black hover:underline">Daftar Aduan</a>
  </div>

  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>
