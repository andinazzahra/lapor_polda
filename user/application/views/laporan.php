<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan Pengaduan</title>
</head>
<body>
    <h2>BUAT LAPORAN PENGADUAN</h2>
    <?= form_open('laporan/simpan') ?>
    <label>Judul Aduan</label><br>
    <input type="text" name="judul"><br>

    <label>Deskripsi Kejadian</label><br>
    <textarea name="deskripsi"></textarea><br>

    <label>Kategori Aduan</label><br>
    <select name="kategori">
        <option value="">-- Pilih Kategori --</option>
        <?php foreach($kategori as $row): ?>
            <option value="<?= $row->nama_kategori ?>"><?= $row->nama_kategori ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>Pilih Wilayah</label><br>
    <select name="wilayah">
        <option value="">-- Pilih Wilayah --</option>
        <option>Wilayah 1</option>
        <option>Wilayah 2</option>
    </select><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat"><br>

    <label>Lintang</label><br>
    <input type="text" name="lintang"><br>

    <label>Bujur</label><br>
    <input type="text" name="bujur"><br>

    <h3>DATA PENGIRIM</h3>
    <label>Nama</label><br>
    <input type="text" name="nama"><br>

    <label>No WhatsApp</label><br>
    <input type="text" name="no_whatsapp"><br>

    <label>Privasi</label><br>
    <input type="radio" name="privasi" value="Anonim" checked> Anonim
    <input type="radio" name="privasi" value="Rahasia"> Rahasia<br>

    <button type="submit">ADUKAN</button>
    <?= form_close() ?>
</body>
</html>
