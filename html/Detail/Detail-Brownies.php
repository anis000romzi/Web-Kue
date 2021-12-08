<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/2f1bb21032.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/detail-style.css" />
  <title>Detail Kue</title>
</head>
<?php
session_start();
$_SESSION['nama'] = "BROWNIES";
$_SESSION['harga'] = 40000;
?>

<body>
  <div class="container">
    <div class="header">
      <img class="foto-kue" src="../../image/BROWNIES.jpg" alt="Kue BlackForest" />
    </div>
    <div class="main">
      <h1>BROWNIES</h1>
      <h2>Rp. 40,000</h2>
      <form action="../../php/konfirmasi.php" method="POST">
        <label for="jumlahBeli">Jumlah :</label><br />
        <input type="number" id="jumlahBeli" min="1" name="jumlah" size="30" required /><br /><br />
        <label for="ukuranBeli">Ukuran Kue :</label><br />
        <select name="opsi" id="ukuranBeli" required>
          <option value="">Pilih Ukuran Kue</option>
          <option value="Kecil">Kecil</option>
          <option value="Sedang">Sedang</option>
          <option value="Besar">Besar</option>
        </select><br /><br />
        <label for="alamat">Alamat :</label><br />
        <input id="alamat" name="alamat" size="30" placeholder="Jalan, RT/RW, Kode Pos, Kelurahan-Kecamatan" required /><br /><br />
        <label for="catatan">Catatan Tambahan :</label><br />
        <textarea id="catatan" rows="3" name="note"></textarea><br />
        <input type="submit" class="btn" value="Beli" />
        <button type="button" class="btn btn-danger" onclick="history.back();" value="Kembali">Kembali</button>
      </form>
    </div>
  </div>
</body>

</html>