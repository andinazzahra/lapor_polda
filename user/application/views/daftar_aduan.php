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
 
  
<!-- Hero Section -->
<section class="relative w-full">
  <img class="w-full h-[300px] sm:h-[400px] md:h-[500px] object-cover brightness-75" src="<?php echo base_url('../assets/polda.png') ?>" alt="POLDA DIY" />
  <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4" style="text-shadow: 0 0 5px rgba(0,0,0,0.7)">
    <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold">LAPOR POLDA DIY</h1>
    <p class="mt-2 text-sm sm:text-lg md:text-xl font-normal max-w-3xl">E-lapor Kepolisian Daerah Istimewa Yogyakarta</p>
  </div>
</section>

<!-- Judul Laporan Pengaduan -->
<h3 class="text-center font-extrabold text-3xl sm:text-4xl max-w-3xl mx-auto mt-10 mb-6">LAPORAN PENGADUAN</h3>

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
  <div class="w-full flex justify-center mt-10 mb-20">
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
