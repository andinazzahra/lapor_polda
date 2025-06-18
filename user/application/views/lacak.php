
<style>
  #map {
    height: 300px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 0.5rem;
  }
</style>
<style>
    body {
      background-color: #f8f9fa;
    }
    .chat-box {
      height: 90vh;
      overflow-y: auto;
      padding: 1rem;
    }
    .message {
      max-width: 75%;
      padding: 0.75rem 1rem;
      border-radius: 1rem;
      margin-bottom: 1rem;
    }
    .message.user {
      background-color: #dee2e6;
      align-self: start;
    }
    .message.admin {
      background-color: #e2eafc;
      align-self: end;
    }
    .input-area {
      padding: 1rem;
      border-top: 1px solid #dee2e6;
      background: #fff;
    }
    .left-panel {
      background-color: #e9ecef;
      padding: 1rem;
      height: 100%;
    }
    .tracking-id {
      background-color: #fff;
      padding: 0.5rem 1rem;
      font-weight: bold;
      border-radius: 0.25rem;
      display: inline-block;
      margin-bottom: 1rem;
    }
    .status-label {
      background-color: #0d6efd;
      color: #fff;
      font-size: 0.75rem;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
    }
  </style>
<div class="container-fluid mt-3">
  <div class="row">
    <!-- Panel Kiri -->
    <div class="col-md-4 left-panel">
      <div class="tracking-id">Tracking ID: 202500001</div>
      <p><strong>Kategori Aduan</strong><br>Gangguan Ketertiban Umum</p>
      <p><strong>Judul Aduan</strong><br>Balap Liar di Jalan Parangtritis</p>
      <p><strong>Lokasi Aduan</strong><br>Kota Yogyakarta</p>
      <p><strong>Alamat</strong><br>Jl. Parangtritis, Brontokusuman, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
      <div id="map" style="height: 300px;"></div>
      <button class="btn btn-success">Selesai</button>
    </div>

    <!-- Panel Kanan -->
    <div class="col-md-8 d-flex flex-column">
      <!-- Header Chat -->
      <div class="d-flex align-items-center p-3 border-bottom bg-white">
        <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="User"/>
        <div>
          <strong>Bapak Supri</strong><br>
          <small>16 April 2024</small>
        </div>
        <div class="ms-auto"><span class="status-label">Direspon</span></div>
      </div>

      <!-- Chat Box -->
      <div class="chat-box d-flex flex-column">
        <!-- Pesan dari user -->
        <div class="message user">
          Setiap malam minggu, sering terjadi balap liar yang sangat mengganggu dan berbahaya di sekitar Jalan Parangtritis KM 7.
        </div>

        <!-- Balasan dari admin -->
        <div class="message admin">
          Terima kasih atas informasi yang Saudara sampaikan. Menindaklanjuti laporan mengenai aktivitas balap liar di wilayah tersebut, kami telah menginstruksikan jajaran patroli lalu lintas dan unit Sabhara untuk meningkatkan pengawasan serta penindakan di lokasi yang dimaksud, khususnya pada jam-jam rawan malam hari. Apabila Saudara memiliki bukti tambahan seperti foto, video, atau waktu kejadian yang lebih detail, mohon dapat dilampirkan untuk membantu proses penindakan lebih lanjut. Terima kasih atas partisipasi Anda dalam menjaga keamanan dan ketertiban masyarakat.
        </div>

        <!-- Gambar lampiran -->
        <img src="https://via.placeholder.com/150x100?text=Foto+Balap+Liar" alt="Lampiran" class="rounded" style="width: 150px;" />
      </div>

      <!-- Kolom Input -->
      <div class="input-area">
        <form class="d-flex gap-2">
          <input type="text" class="form-control" placeholder="Ketik pesan" />
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>

 <script>
    // Koordinat Sleman (bisa Anda ganti sesuai kebutuhan)
    var lat = -7.7325;
    var lng = 110.4024;

    // Inisialisasi peta
    var map = L.map('map').setView([lat, lng], 13);

    // Tambahkan tile dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Tambahkan marker di Sleman
    L.marker([lat, lng]).addTo(map)
      .bindPopup('Lokasi Aduan: Sleman')
      .openPopup();
  </script>