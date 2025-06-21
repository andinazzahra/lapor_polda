<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Lapor Polda DIY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-white text-black">

<!-- Hero Section -->
<section class="relative w-full">
  <img class="w-full h-[300px] sm:h-[400px] md:h-[500px] object-cover brightness-75" src="<?php echo base_url('../assets/polda.png') ?>" alt="POLDA DIY" />
  <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4" style="text-shadow: 0 0 5px rgba(0,0,0,0.7)">
    <h1 class="text-6xl font-bold text-white">
      LAPOR POLDA DIY gg
    </h1>
    <p class="mt-2 text-base sm:text-lg md:text-xl font-normal max-w-3xl">
      E-lapor Kepolisian Daerah Istimewa Yogyakartaaaaa
    </p>
  </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-10 space-y-12">

<div class="max-w-5xl mx-auto px-4 space-y-8">

  <!-- BUAT LAPORAN PENGADUAN -->
  <section class="w-full bg-[#BD0808] shadow-[0_4px_6px_rgba(0,0,0,0.3)] rounded-none p-6 text-center">
  <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-4">BUAT LAPORAN PENGADUAN</h2>
  <a href="<?php echo base_url('buat_aduan'); ?>">
    <button class="w-full sm:w-auto bg-white text-[#BD0808] font-bold text-xl py-3 px-8 shadow-md hover:brightness-110 transition uppercase">
      Adukan Disini
    </button>
  </a>
  </section>


  <!-- CARI DAN LACAK ADUAN -->
  <section class="w-full bg-[#BD0808] shadow-[0_4px_6px_rgba(0,0,0,0.3)] rounded-none p-6 text-center">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-4">CARI DAN LACAK ADUAN</h2>
    <form class="flex flex-col sm:flex-row gap-3 justify-center" action="<?php echo base_url("lacak/index") ?>">
      <input type="text" name="kode" placeholder="Masukkan Nomor Id Aduan"
        class="flex-1 sm:max-w-md border border-white bg-transparent text-white placeholder-white px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-white rounded-sm" />
      <button type="submit"
        class="bg-white text-[#BD0808] font-bold px-6 py-3 text-base uppercase hover:bg-gray-100 transition rounded-sm">
        Lacak
      </button>
    </form>
  </section>
</div>

<!-- Langkah Membuat Aduan -->
<section class="w-full bg-white py-10">
  
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 max-w-6xl mx-auto px-4">

    <!-- Step 1 -->
    <div class="text-center flex flex-col items-center">
      <div class="w-16 h-16 rounded-full bg-[#BD0808] text-white flex items-center justify-center text-2xl mb-4 shadow-md">
        <i class="fas fa-pen"></i>
      </div>
      <h3 class="font-bold text-lg mb-2">Tulis Laporan</h3>
      <p class="text-sm text-gray-600">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
    </div>

    <!-- Step 2 -->
    <div class="text-center flex flex-col items-center">
      <div class="w-16 h-16 rounded-full bg-white border border-gray-300 text-[#BD0808] flex items-center justify-center text-2xl mb-4 shadow-md">
        <i class="fas fa-share"></i>
      </div>
      <h3 class="font-bold text-lg mb-2">Proses Verifikasi</h3>
      <p class="text-sm text-gray-600">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang</p>
    </div>

    <!-- Step 3 -->
    <div class="text-center flex flex-col items-center">
      <div class="w-16 h-16 rounded-full bg-[#BD0808] text-white flex items-center justify-center text-2xl mb-4 shadow-md">
        <i class="fas fa-comment-dots"></i>
      </div>
      <h3 class="font-bold text-lg mb-2">Proses Tindak Lanjut</h3>
      <p class="text-sm text-gray-600">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda</p>
    </div>

    <!-- Step 4 -->
    <div class="text-center flex flex-col items-center">
      <div class="w-16 h-16 rounded-full bg-white border border-gray-300 text-[#BD0808] flex items-center justify-center text-2xl mb-4 shadow-md">
        <i class="fas fa-reply"></i>
      </div>
      <h3 class="font-bold text-lg mb-2">Beri Tanggapan</h3>
      <p class="text-sm text-gray-600">Anda dapat menanggapi kembali balasan dari instansi dalam waktu 10 hari</p>
    </div>

    <!-- Step 5 -->
    <div class="text-center flex flex-col items-center">
      <div class="w-16 h-16 rounded-full bg-[#BD0808] text-white flex items-center justify-center text-2xl mb-4 shadow-md">
        <i class="fas fa-check"></i>
      </div>
      <h3 class="font-bold text-lg mb-2">Selesai</h3>
      <p class="text-sm text-gray-600">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
    </div>

  </div>
</section>

  <!-- Judul Laporan Pengaduan -->
  <h3 class="text-center font-extrabold text-3xl sm:text-4xl max-w-3xl mx-auto">LAPORAN PENGADUAN</h3>

  <!-- Grid Laporan -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 px-2 sm:px-4">
    <?php
    $aduan = array_fill(0, 9, [
        "nama" => "D. Prasetyo",
        "tanggal" => "26-04-2023, 08:46 WIB",
        "judul" => "Pencurian Sepeda Motor di Area Kos",
        "isi" => "Telah terjadi pencurian sepeda motor pada malam hari di area kos Jalan Kelurahan KM 5, Sleman...",
        "kategori" => "Kriminalitas",
        "status" => "Terkirim",
        "warna_status" => "bg-gray-400"
    ]);

    foreach ($aduan as $lapor) {
    ?>
        <div class="border rounded-lg shadow-md p-4 flex flex-col h-full">
        <div class="flex items-center justify-between text-sm text-gray-600 mb-2">
            <div class="flex items-center gap-2">
            <i class="fas fa-user-circle text-xl"></i>
            <span class="font-semibold"><?= $lapor['nama'] ?></span>
            </div>
            <span class="text-xs"><?= $lapor['tanggal'] ?></span>
        </div>
        <div class="flex-grow">
            <h4 class="font-bold text-base mb-1"><?= $lapor['judul'] ?></h4>
            <p class="text-sm text-justify"><?= $lapor['isi'] ?></p>
        </div>
        <div class="flex space-x-2 mt-3">
            <span class="text-white px-2 py-1 rounded text-xs" style="background-color: #BD0808;"><?= $lapor['kategori'] ?></span>
            <span class="<?= $lapor['warna_status'] ?> text-white px-2 py-1 rounded text-xs"><?= $lapor['status'] ?></span>
        </div>
        </div>
    <?php } ?>
    </div>


  <!-- Pagination -->
  <div class="w-full flex justify-center mt-10">
    <nav class="flex flex-wrap items-center gap-2 text-sm sm:text-base" aria-label="Pagination">
      <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed">&lt; Previous</button>
      <button class="px-3 py-1 rounded border border-gray-300 bg-blue-600 text-white">1</button>
      <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
      <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
      <span class="px-3 py-1">...</span>
      <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">366</button>
      <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Next &gt;</button>
    </nav>
  </div>
</main>
</body>
</html>
