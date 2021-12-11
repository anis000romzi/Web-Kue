<!DOCTYPE html>
<html lang="en">

<head>
	<title>Terima Kasih</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/konfirmasi-style.css" />
</head>

<body>
	<div class="container" align="center">
		<div class="header">
			<h1>TERIMA KASIH</h1>
			<p>Terima kasih telah berbelanja di toko kue kami!</p>
			<p>Kue pesanan anda akan segera dikirim.</p>
		</div>
		<?php
		session_start();
		date_default_timezone_set('Asia/jakarta');
		$date = date('Y-m-d, H:i:s');
		?>
		<div class="main">
			<div class="info">
				Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
				Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
				Ukuran : <?php echo $_SESSION['opsi']; ?><br>
				Alamat : <?php echo $_SESSION['alamat'] ?><br>
				Catatan tambahan : <?php echo $_SESSION['note']; ?><br><br>
				Harga : <?php echo $_SESSION['total']; ?><br>
				Tanggal : <?php echo $date; ?><br>
			</div>
			<form action="../html/Belanja.html">
				<button type="submit" class="btn" value="Pesan-Lagi">Pesan Lagi</button>
			</form>
			<form action="../html/Home.html">
				<button type="submit" class="btn" value="Home">Home</button>
			</form>
		</div>
		<div class="footer-text">
			<h2>TOKO KUE</h2>
		</div>
		<div class="footer" align="center">
			<p>Copyright &copy; 2021, Kelompok 6</p>
		</div>
	</div>
</body>

</html>