<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../../css/detail-style.css" />
  <title>Detail Kue</title>
</head>
<?php
session_start();
$_SESSION['nama'] = "LAVA CAKE";
$_SESSION['harga'] = 70000;
?>
<body>
  <div class="container">
    <div class="header">
      <img class="foto-kue" src="../../image/LAVACAKE.jpeg" alt="Kue BlackForest" />
    </div>
    <div class="main">
      <h1>LAVA CAKE</h1>
      <h2>Rp. 70,000</h2>
      <form action="../../php/konfirmasi.php" method="POST">
        <label for="jumlahBeli">Jumlah :</label><br />
        <input type="number" id="jumlahBeli" min="1" name="jumlah" size="30" required /><br />
        <label for="ukuranBeli">Ukuran Kue :</label><br />
        <select name="opsi" id="ukuranBeli" required>
          <option value="">Pilih Ukuran Kue</option>
          <option value="Kecil">Kecil</option>
          <option value="Sedang">Sedang</option>
          <option value="Besar">Besar</option>
        </select><br />
        <label for="alamat">Alamat :</label><br />
        <input id="alamat" name="alamat" size="50" placeholder="Jalan, RT/RW, Kode Pos, Kelurahan-Kecamatan" required /><br />
        <label for="catatan">Catatan Tambahan :</label><br />
        <textarea id="catatan" rows="3" name="note"></textarea><br />
        <button type="submit" class="btn" value="Beli" />Beli</button>
        <button type="button" class="btn" onclick="history.back();" value="Kembali">Kembali</button>
      </form>
    </div>
  </div>
</body>

</html>