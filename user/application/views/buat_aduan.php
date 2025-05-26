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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <!-- Leaflet CSS & JS (harus sudah ada) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <!-- Geocoder plugin -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>


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
  <!-- Form Section -->
  <!-- Container luar -->
<div class="min-h-screen flex items-center justify-center px-4 py-10">
  <!-- Kotak Form -->
  <div class="p-8 rounded-lg shadow-lg w-full max-w-screen-lg" style="background-color: #D9D9D9;">
    <h2 class="text-center text-2xl font-bold mb-6">BUAT LAPORAN PENGADUAN</h2>

    <form method="post" enctype="multipart/form-data">
      <div class="flex flex-col md:flex-row gap-6">
        <!-- Kolom Kiri -->
        <div class="md:w-1/2 w-full">
          <label class="block mb-2 font-semibold">Judul Aduan</label>
          <input type="text" name="judul" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm" required>

          <label class="block mb-2 font-semibold">Deskripsi Kejadian</label>
          <textarea name="deskripsi" rows="4" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm" required></textarea>

          <label class="block mb-2 font-semibold">Kategori Aduan</label>
          <select name="kategori" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm" required>
            <option disabled selected value="">-- Pilih Kategori --</option>
            <option value="1">Kategori 1</option>
            <option value="2">Kategori 2</option>
          </select>

          <label class="block mb-2 font-semibold">Pilih Wilayah</label>
          <select name="wilayah" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm" required>
            <option disabled selected value="">-- Pilih Wilayah --</option>
            <option value="bantul">Bantul</option>
            <option value="gunungkidul">Gunung Kidul</option>
            <option value="kulonprogo">Kulon Progo</option>
            <option value="sleman">Sleman</option>
            <option value="yogyakarta">Kota Yogyakarta</option>
          </select>

          <label for="lokasi" class="block mb-2 font-semibold">Lokasi Terkait</label>
          <input type="text" id="searchBox" class="w-full p-2 border rounded mb-2" placeholder="Cari lokasi atau alamat...">

          <p class="text-xs text-gray-600 mb-2">Jika titik lokasi tidak sesuai, silakan geser icon map atau cari lokasi/alamat anda</p>

          <input hidden type="text" name="lat" id="lat">
          <input hidden type="text" name="lng" id="lng">

          <!-- Google Map Placeholder -->
          <div id="map" class="w-full h-64 bg-gray-300 rounded mb-4 flex items-center justify-center">
            <p class="text-gray-500">Google Maps tidak dapat dimuat</p>
          </div>

          <button type="button" onclick="openModal()" class="w-full text-white py-2 font-semibold rounded flex items-center justify-center gap-2" style="background-color: #BD0808;">

            <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 002.828 2.828l6.586-6.586a4 4 0 00-5.656-5.656L6.343 12.343a6 6 0 108.485 8.485"></path>
            
            LAMPIRAN
          </button>
          <!-- Modal Lampiran -->
          <div id="lampiranModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white rounded-lg w-full max-w-md p-6 relative">
              <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
              <h2 class="text-xl font-semibold mb-4">Lampirkan File</h2>

              <label class="block mb-2 font-medium text-sm">Upload File</label>
              <input type="file" name="lampiran[]" accept=".jpg,.jpeg,.png,.pdf" multiple class="mb-2 block w-full text-sm text-gray-700 border border-gray-300 rounded px-3 py-2">
              <p class="text-xs text-gray-600 mb-4">*) Hanya .jpg, .jpeg, .png, .pdf - Minimal 1 file, Maksimal 3 file</p>

              <div class="text-right">
                <button onclick="closeModal()" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">OK</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="md:w-1/2 w-full">
          <h3 class="font-bold mb-4">DATA PENGIRIM</h3>

          <label class="block mb-2 font-semibold">Nama</label>
          <input type="text" name="nama" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm">

          <div class="flex items-center gap-4 mb-4">
            <label><input type="radio" name="status" value="anonim" checked> Anonim</label>
            <label><input type="radio" name="status" value="rahasia"> Rahasia</label>
          </div>

          <label class="block mb-2 font-semibold">No WhatsApp</label>
          <input type="tel" name="whatsapp" class="w-full border border-black rounded-sm px-2 py-1 mb-4 text-sm">

          <button type="button" class="text-white py-2 px-4 rounded mb-4" style="background-color: #BD0808;">VERIFY</button>

          <label class="block mb-2 font-semibold">Kode Verifikasi</label>
          <input type="text" name="kode_verifikasi" class="w-full border border-black rounded-sm px-2 py-1 mb-2 text-sm" placeholder="Masukkan kode 6 digit">

          <p class="text-xs text-gray-600 mb-4">Kode verifikasi akan dikirim ke WhatsApp Anda setelah klik tombol "Verify".</p>

          <!-- reCAPTCHA -->
          
          <button type="submit" class="w-full  text-white py-2 font-semibold rounded" style="background-color: #BD0808;">ADUKAN</button>
        </div>
      </div>
    </form>
  </div>
</div>


  <!-- Footer -->
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


<script>
  function openModal() {
    document.getElementById('lampiranModal').classList.remove('hidden');
    document.getElementById('lampiranModal').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('lampiranModal').classList.add('hidden');
    document.getElementById('lampiranModal').classList.remove('flex');
  }
</script>

<!-- fitur maps -->


<!-- <script>
  function initMap() {
    const lokasi = { lat: -6.200000, lng: 106.816666 };

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: lokasi
    });

    new google.maps.Marker({
      position: lokasi,
      map,
      title: "Lokasi Magang"
    });
  }
</script> -->

<!-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvcpt_oWXugpES47SyQEwFZxbfVykjCOA&libraries=places&callback=initMap">
</script> -->


<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
 
  <script>
  // Inisialisasi peta
  var map = L.map('map').setView([-7.797068, 110.370529], 13);

  // Layer peta
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
  }).addTo(map);

  // Tambahkan marker awal
  var marker = L.marker([-7.797068, 110.370529], { draggable: true }).addTo(map)
    .bindPopup('<b>Yogyakarta</b><br>Ini adalah marker.')
    .openPopup();

  // Update nilai input lat/lng saat marker dipindah
  function updateLatLngFields(latlng) {
    document.getElementById('lat').value = latlng.lat;
    document.getElementById('lng').value = latlng.lng;
  }

  updateLatLngFields(marker.getLatLng());

  marker.on('dragend', function (e) {
    updateLatLngFields(marker.getLatLng());
  });

  // Integrasi pencarian custom input box
  const searchBox = document.getElementById('searchBox');

  searchBox.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      if (searchBox.value.length > 3) {
        // Gunakan Nominatim API untuk pencarian lokasi
        fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${searchBox.value}`)
          .then(res => res.json())
          .then(data => {
            if (data && data.length > 0) {
              const result = data[0];
              const latlng = [parseFloat(result.lat), parseFloat(result.lon)];
              map.setView(latlng, 15);
              marker.setLatLng(latlng)
                .bindPopup(result.display_name)
                .openPopup();
              updateLatLngFields(marker.getLatLng());
            } else {
              alert("Lokasi tidak ditemukan.");
            }
          });
      }
    }
  });

  // Tambahkan juga geocoder control bawaan jika tetap ingin
  L.Control.geocoder({
    defaultMarkGeocode: false
  })
    .on('markgeocode', function (e) {
      const latlng = e.geocode.center;
      map.setView(latlng, 15);
      marker.setLatLng(latlng)
        .bindPopup(e.geocode.name)
        .openPopup();
      updateLatLngFields(latlng);
    })
    .addTo(map);
</script>



 </body>
</html>
