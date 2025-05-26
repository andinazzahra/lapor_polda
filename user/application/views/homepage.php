<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Lapor Polda DIY
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-black">
  <!-- Header -->
  <header class="bg-gray-100 border-b border-gray-300">
   <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
    <div class="flex items-center space-x-2">
    <img src="<?php echo base_url('../assets/logo.png') ?>" alt="Logo Kepolisian" class="w-10 h-12" height="32"/>
     <div class="text-sm leading-tight">
      <p class="text-1xl font-semibold text-black">
       Kepolisian
      </p>
      <p class="text-1xl text-gray-700">
       Daerah Istimewa Yogyakarta
      </p>
     </div>
    </div>
    <nav class="text-sm font-normal text-black space-x-6">
     <a href="<?php echo base_url('homepage'); ?>" class="hover:underline" href="#">
      Home
     </a>
     <a href="<?php echo base_url('daftar_aduan'); ?>" class="hover:underline" href="#">
      Daftar Aduan
     </a>
    </nav>
   </div>
  </header>
  <!-- Hero Section -->
  <section class="relative w-full">
  <img class="w-full object-cover brightness-75" src="<?php echo base_url('../assets/polda.png') ?>" alt="POLDA DIY" />
  <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4" style="text-shadow: 0 0 5px rgba(0,0,0,0.7)">
    <h1 class="text-6xl font-bold text-white">
      LAPOR POLDA DIY
    </h1>
    <p class="mt-2 text-base sm:text-lg md:text-xl font-normal max-w-3xl">
      E-lapor Kepolisian Daerah Istimewa Yogyakarta
    </p>
  </div>
</section>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 py-10 space-y-6">
  <!-- Buat Laporan Pengaduan -->
  <section class="shadow-lg w-full px-8 py-12 mb-8" style="background-color: #D9D9D9;">
    <h2 class="font-extrabold text-5xl mb-6 text-center" >
      BUAT LAPORAN PENGADUAN
    </h2>
    <div class="text-center">
      <a href="<?php echo base_url('buat_aduan'); ?>">
        <button class="text-white font-bold text-3xl uppercase px-12 py-3 shadow-sm hover:brightness-110 transition rounded-md" style="background-color: #BD0808;">
          BUAT ADUAN
        </button>
      </a>
      </div>
    </section>

  <!-- Cari dan Lacak Aduan -->
  <section class="shadow-lg w-full px-8 py-12" style="background-color: #BD0808;">
    <h2 class="text-white font-extrabold text-4xl mb-6 text-center">
      CARI DAN LACAK ADUAN
    </h2>
    <form class="flex max-w-2xl mx-auto space-x-4">
      <input class="flex-grow rounded-md border border-white bg-transparent px-4 py-3 text-white placeholder-white text-base focus:outline-none focus:ring-2 focus:ring-white" placeholder="Masukkan Nomor Id Aduan" type="text"/>
      <button class="bg-white text-[#BD0808] font-semibold text-2xl px-8 py-3 rounded-md hover:bg-gray-100 transition">
        LACAK
      </button>
    </form>
  </section>

   <!-- Laporan Pengaduan Title -->
    <h3 class="text-center font-extrabold text-4xl max-w-3xl mx-auto">LAPORAN PENGADUAN</h3>

    <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-4 pb-12">

    <!-- Kartu 1 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">D. Prasetyo</span>
        </div>
        <span class="text-xs">26-04-2023, 08:46 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Pencurian Sepeda Motor di Area Kos</h4>
        <p class="text-sm text-justify">Telah terjadi pencurian sepeda motor pada malam hari di area kos Jalan Kelurahan KM 5, Sleman. Motor saya hilang saat diparkir dalam keadaan terkunci.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Kriminalitas</span>
        <span class="bg-gray-400 text-white px-2 py-1 rounded text-xs">Terkirim</span>
      </div>
    </div>

    <!-- Kartu 2 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Agung Kurniawan</span>
        </div>
        <span class="text-xs">05-04-2023, 09:46 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Kemacetan Setiap Pagi di Ring Road Utara</h4>
        <p class="text-sm text-justify">Setiap pagi terjadi kemacetan panjang di Ring Road Utara (dekat flyover Jombor). Mohon evaluasi rekayasa lalu lintas agar lebih lancar.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Lalu Lintas</span>
        <span class="bg-gray-400 text-white px-2 py-1 rounded text-xs">Terkirim</span>
      </div>
    </div>

    <!-- Kartu 3 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Anonim</span>
        </div>
        <span class="text-xs">18-04-2023, 15:40 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Dugaan Peredaran Narkoba di Wilayah Kost</h4>
        <p class="text-sm text-justify">Saya mencurigai aktivitas mencurigakan di kamar kos sebelah. Banyak orang keluar masuk malam hari dan terdengar bau aneh.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Narkoba</span>
        <span class="bg-blue-600 text-white px-2 py-1 rounded text-xs">Dibaca</span>
      </div>
    </div>

    <!-- Kartu 4 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Josep Saputra</span>
        </div>
        <span class="text-xs">18-04-2023, 16:48 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Kecelakaan Beruntun di Jalan Magelang KM 9</h4>
        <p class="text-sm text-justify">Kecelakaan antara 3 kendaraan di KM 9 jam 07:15 WIB. Lalu lintas macet total dan ada korban luka.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Kecelakaan</span>
        <span class="bg-orange-400 text-white px-2 py-1 rounded text-xs">Direspon</span>
      </div>
    </div>

    <!-- Kartu 5 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">D. Prasetyo</span>
        </div>
        <span class="text-xs">17-04-2023, 09:33 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Tertipu Belanja Online Mengatasnamakan Toko Resmi</h4>
        <p class="text-sm text-justify">Saya membeli barang dari akun yang mengaku official store, namun barang tidak dikirim hingga sekarang.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Penipuan</span>
        <span class="bg-blue-600 text-white px-2 py-1 rounded text-xs">Dibaca</span>
      </div>
    </div>

    <!-- Kartu 6 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Rini W.</span>
        </div>
        <span class="text-xs">18-04-2023, 20:30 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Kekerasan Rumah Tangga Tetangga</h4>
        <p class="text-sm text-justify">Saya sering mendengar suara cekcok keras dari rumah sebelah, bahkan suara tangisan anak. Mohon ditindaklanjuti.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">KDRT</span>
        <span class="bg-orange-400 text-white px-2 py-1 rounded text-xs">Direspon</span>
      </div>
    </div>

    <!-- Kartu 7 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Bapak Supri</span>
        </div>
        <span class="text-xs">16-04-2023, 14:21 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Balap Liar di Jalan Parangtritis</h4>
        <p class="text-sm text-justify">Setiap malam minggu, sering terjadi balap liar yang mengganggu dan membahayakan pengguna jalan lain.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Gangguan</span>
        <span class="bg-green-600 text-white px-2 py-1 rounded text-xs">Selesai</span>
      </div>
    </div>

    <!-- Kartu 8 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">A. Suryo</span>
        </div>
        <span class="text-xs">18-04-2023, 20:00 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Musik Keras Dini Hari di Area Perumahan</h4>
        <p class="text-sm text-justify">Tetangga saya sering memutar musik keras dini hari dan tidak menggubris teguran.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Gangguan</span>
        <span class="bg-orange-400 text-white px-2 py-1 rounded text-xs">Direspon</span>
      </div>
    </div>

    <!-- Kartu 9 -->
    <div class="border p-4 rounded-md shadow-sm h-full flex flex-col justify-between">
      <div class="flex items-center justify-between mb-2 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <i class="fas fa-user-circle text-xl"></i>
          <span class="font-semibold">Anonim</span>
        </div>
        <span class="text-xs">22-04-2023, 22:15 WIB</span>
      </div>
      <div class="flex-grow">
        <h4 class="font-bold text-base mb-1">Pelecehan Seksual di Angkutan Umum Isi</h4>
        <p class="text-sm text-justify">Saya mengalami pelecehan oleh seorang penumpang pria di bus jurusan Giwangan - Condongcatur. Mohon agar ada patroli atau pengawasan lebih.</p>
      </div>
      <div class="flex space-x-2 mt-3">
        <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;">Pelecehan</span>
        <span class="bg-green-600 text-white px-2 py-1 rounded text-xs">Selesai</span>
      </div>
    </div>
  </div>

  <!-- Pagination Wrapper -->
<div class="w-full flex justify-center items-center mt-8 text-center">
  <nav class="flex space-x-1" aria-label="Pagination">
    <!-- Tombol Previous -->
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed">
      &lt; Previous
    </button>

    <!-- Tombol Nomor Halaman -->
    <button class="px-3 py-1 rounded border border-gray-300 bg-blue-600 text-white">1</button>
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">4</button>
    <span class="px-3 py-1">...</span>
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">366</button>

    <!-- Tombol Next -->
    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">
      Next &gt;
    </button>
  </nav>
</div>

</main>


  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 text-xs">
   <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6">
    <!-- Kewilayahan -->
    <div>
     <h4 class="font-bold mb-3 text-white">
      KEWILAYAHAN
     </h4>
     <ul class="space-y-1">
      <li>
       <a class="hover:underline" href="#">
        POLRESTA Yogyakarta
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        POLRESTA Sleman
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        POLRES Bantul
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        POLRES Kulonprogo
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        POLRES Gunungkidul
       </a>
      </li>
     </ul>
    </div>
    <!-- Menu -->
    <div>
     <h4 class="font-bold mb-3 text-white">
      MENU
     </h4>
     <ul class="space-y-1">
      <li>
       <a class="hover:underline" href="#">
        Menu Beranda
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Menu Tribata News
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Menu Galeri
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Menu Agenda
       </a>
      </li>
      <li>
       <a class="hover:underline" href="#">
        Menu IKM
       </a>
      </li>
     </ul>
    </div>
    <!-- Kontak Kami -->
    <div class="col-span-2 md:col-span-1">
     <h4 class="font-bold mb-3 text-white">
      KONTAK KAMI
     </h4>
     <address class="not-italic space-y-1 text-gray-400 text-xs">
      <p>
       Jalan Padjadjaran (Ringroad Utara) Condongcatur Depok Sleman
            Yogyakarta City, Indonesia Special Region of Yogyakarta
      </p>
      <p>
       <span class="font-semibold">
        Telp :
       </span>
       (0274) 864144
      </p>
      <p>
       <span class="font-semibold">
        Email :
       </span>
       bidhumascdiy@polri.go.id
      </p>
     </address>
    </div>
    <!-- Social Media -->
    <div>
     <h4 class="font-bold mb-3 text-white">
      Social Media
     </h4>
     <p class="mb-3 text-gray-400 text-xs">
      Temukan kami di Social Media dan jangan lupa follow/subscribe
     </p>
     <div class="flex space-x-3 text-gray-400">
      <a aria-label="Facebook" class="hover:text-white" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a aria-label="Instagram" class="hover:text-white" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a aria-label="Twitter" class="hover:text-white" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a aria-label="YouTube" class="hover:text-white" href="#">
       <i class="fab fa-youtube">
       </i>
      </a>
      <a aria-label="TikTok" class="hover:text-white" href="#">
       <i class="fab fa-tiktok">
       </i>
      </a>
     </div>
    </div>
   </div>
   <div class="border-t border-gray-700 text-center py-3 text-gray-400 text-xs">
    © Copyright 2023 Kepolisian Daerah Istimewa Yogyakarta
   </div>
  </footer>
  <!-- WhatsApp floating button bottom right -->
  <a aria-label="WhatsApp Contact" class="fixed bottom-4 right-4 bg-red-700 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:brightness-110 transition" href="#">
   <i class="fab fa-whatsapp fa-lg">
   </i>
  </a>
 </body>
</html>
