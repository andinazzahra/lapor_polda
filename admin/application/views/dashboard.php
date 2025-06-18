<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - E-Lapor Polda DIY</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f9f9f9;
    }

    header {
      background: #545454;
      color: white;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 40px;
      margin-right: 10px;
    }

    nav a {
      margin: 0 10px;
      color: white;
      text-decoration: none;
      font-size: 14px;
    }

    .dashboard-container {
      padding: 20px;
    }

    .cards {
      display: flex;
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      flex: 1;
      text-align: center;
    }

    .card h3 {
      margin: 10px 0 5px;
    }

    .card span {
      color: red;
      font-weight: bold;
      font-size: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    table thead {
      background: #ddd;
    }

    table th, table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    .status {
      padding: 5px 10px;
      border-radius: 5px;
      color: white;
      font-size: 12px;
      font-weight: bold;
      display: inline-block;
    }

    .terkirim {
      background: #555;
    }

    .direspon {
      background: #007bff;
    }

    .selesai {
      background: #28a745;
    }

  </style>
</head>
<body>

<header>
  <div class="logo">
    <img src="C:\xampp\htdocs\laporpolda\assets\logo.png" alt="Logo Polda DIY">
    <strong>Portal Admin | E-Lapor Polda DIY</strong>
  </div>
  <nav>
    <a href="#">Dashboard</a>
    <a href="#">Admin</a>
    <a href="#">Daftar Aduan</a>
    <a href="#">Logout</a>
  </nav>
</header>

<div class="dashboard-container">

  <div class="cards">
    <div class="card">
      <img src="icon1.png" alt="Icon" height="30">
      <h3>Pengaduan Masuk</h3>
      <span>125</span>
    </div>
    <div class="card">
      <img src="icon2.png" alt="Icon" height="30">
      <h3>Belum Terbaca</h3>
      <span>45</span>
    </div>
    <div class="card">
      <img src="icon3.png" alt="Icon" height="30">
      <h3>Sedang Diproses</h3>
      <span>70</span>
    </div>
    <div class="card">
      <img src="icon4.png" alt="Icon" height="30">
      <h3>Selesai</h3>
      <span>10</span>
    </div>
  </div>

  <h2>Pengaduan Terbaru</h2>
  <table>
    <thead>
      <tr>
        <th>Pelapor</th>
        <th>Tanggal</th>
        <th>Kategori Aduan</th>
        <th>Judul</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Rina Sari</td>
        <td>24 Apr 2025</td>
        <td>Kriminalitas</td>
        <td>Tindak Pidana Pencurian</td>
        <td><span class="bg-gray-400 status terkirim" >Terkirim</span></td>
      </tr>
      <tr>
        <td>Rina Sari</td>
        <td>24 Apr 2025</td>
        <td>Lalu Lintas</td>
        <td>Tindak Pidana Pencurian</td>
        <td><span class="status direspon">Direspon</span></td>
      </tr>
      <tr>
        <td>Rina Sari</td>
        <td>24 Apr 2025</td>
        <td>Pelayanan Publik</td>
        <td>Tindak Pidana Pencurian</td>
        <td><span class="status direspon">Direspon</span></td>
      </tr>
      <tr>
        <td>Rina Sari</td>
        <td>24 Apr 2025</td>
        <td>Kriminalitas</td>
        <td>Tindak Pidana Pencurian</td>
        <td><span class="status selesai">Selesai</span></td>
      </tr>
      <tr>
        <td>Rina Sari</td>
        <td>24 Apr 2025</td>
        <td>Kriminalitas</td>
        <td>Tindak Pidana Pencurian</td>
        <td><span class="status selesai">Selesai</span></td>
      </tr>
    </tbody>
  </table>

</div>

</body>
</html>
