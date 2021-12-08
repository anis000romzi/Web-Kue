<!DOCTYPE html>
<html>

<head>
	<title>Terima Kasih</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div id="Header" class="container-fluid p-4 bg-success text-white">
		<h2>Toko kue kreatif</h2>
	</div>
	<?php
	session_start();
	date_default_timezone_set('Asia/jakarta');
	$date = date('Y-m-d, H:i:s');
	?>
	<div class="container-fluid p-5">
		<div class="container-fluid p-2 border rounded">
			<h1 class="text-center">TERIMA KASIH</h1>
			<p>Terima kasih telah berbelanja di toko kue kami!</p>
			Kue pesanan anda akan dikirim segera.<br>
			<hr><br>
			Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
			Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
			Ukuran : <?php echo $_SESSION['opsi']; ?><br>
			Alamat : <?php echo $_SESSION['alamat'] ?><br>
			Catatan tambahan : <?php echo $_SESSION['note']; ?><br>
			Harga : <?php echo $_SESSION['total']; ?><br>
			Tanggal : <?php echo $date; ?><br><br>
			<form action="../html/Belanja.html">
				<button type="submit" class="btn btn-success" value="Pesan-Lagi">Pesan Lagi</button>
			</form>
			<form action="../html/Home.html">
				<button type="submit" class="btn btn-success" value="Home">Home</button>
			</form>
		</div>
	</div>
</body>

</html>