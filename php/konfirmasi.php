<!DOCTYPE html>
<html lang="en">

<head>
	<title>Konfirmasi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div id="Header" class="container-fluid p-4 bg-success text-white">
		<h2>Toko kue kreatif</h2>
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

	<div class="container-fluid p-5">
		<div class="container-fluid p-2 border rounded">
			<h1 class="text-center">KONFIRMASI PEMBELIAN</h1>
			<p>Apakah data pembelian sudah sesuai?</p>
			<p>(tekan selesai jika yakin, tekan kembali jika tidak)</p>
			<hr>
			Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
			Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
			Ukuran : <?php echo $_SESSION['opsi']; ?><br>
			Alamat : <?php echo $_SESSION['alamat'] ?><br>
			Catatan tambahan : <?php echo $_SESSION['note']; ?><br><br>
			Harga : <?php echo $_SESSION['total']; ?><br><br>
			<form action="tampilstruk.php" method="POST">
				<button type="submit" class="btn btn-success" value="Selesai">Selesai</button>
				<button type="button" class="btn btn-danger" onclick="history.back();" value="Kembali">Kembali</button>
			</form>
		</div>
	</div>
</body>

</html>