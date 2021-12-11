<!DOCTYPE html>
<html lang="en">

<head>
	<title>Konfirmasi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/konfirmasi-style.css" />
</head>

<body>
	<div class="container" align="center">
		<div class="header">
			<h1>KONFIRMASI PEMBELIAN</h1>
			<p>Apakah data pembelian sudah sesuai?</p>
			<p>(tekan selesai jika yakin, tekan kembali jika tidak)</p>
		</div>
		<?php
		session_start();
		$_SESSION['jumlah'] = (int)$_POST['jumlah'];
		$_SESSION['note'] = $_POST['note'];
		$_SESSION['opsi'] = $_POST['opsi'];
		$_SESSION['alamat'] = $_POST['alamat'];

		if ($_SESSION['opsi'] == "Kecil") {
			$_SESSION['ukur'] = -5000;
		} else if ($_SESSION['opsi'] == "Sedang") {
			$_SESSION['ukur'] = 0;
		} else if ($_SESSION['opsi'] == "Besar") {
			$_SESSION['ukur'] = 5000;
		}

		$_SESSION['total'] = ($_SESSION['harga'] + $_SESSION['ukur']) * $_SESSION['jumlah'];
		?>

		<div class="main">
			<div class="info">
				Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
				Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
				Ukuran : <?php echo $_SESSION['opsi']; ?><br>
				Alamat : <?php echo $_SESSION['alamat'] ?><br>
				Catatan tambahan : <?php echo $_SESSION['note']; ?><br><br>
				Harga : <?php echo $_SESSION['total']; ?><br><br>
			</div>
			<form action="tampilstruk.php" method="POST">
				<button type="submit" class="btn" value="Selesai">Selesai</button>
				<button type="button" class="btn" onclick="history.back();" value="Kembali">Kembali</button>
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