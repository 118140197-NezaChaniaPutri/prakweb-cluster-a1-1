<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	========================================
	
	<form action="tambahdata.php" method="POST">
		<h2>Tambah Data</h2>
		<b>NRP :</b>
		<input type="number" name="nrp" placeholder="max 10 digit" required=""><br>
		<b>Nama :</b>
		<input type="text" name="nama" maxlength="30" required=""><br>
		<b>Alamat :</b>
		<textarea style="resize: vertical;" name="alamat" rows="5" cols="30" maxlength="30" required=""></textarea><br>
		<b>ID Jurusan :</b>
		<select name="id_jur" required="">
			<option value="" hidden="">Pilih ID Jurusan</option>
			<option value="IF">IF</option>
			<option value="PWK">PWK</option>
			<option value="TI">TI</option>
			<option value="TG">TG</option>
		</select><br>
		<input type="submit" name="Simpan">
	</form>
	<br><br>
	========================================
	<form action="caridata.php" method="POST">
		<h2>Cari Data</h2>
		<b>NRP :</b>
		<input type="text" name="carinrp" required="">
		<input type="submit" value="Cari"><br>
	</form>
	<br><br>
	========================================
	<form action="hapusdata.php" method="POST">
		<h2>Hapus Data</h2>
		<b>NRP :</b>
		<input type="text" name="hapusnrp" required="">
		<input type="submit" value="Hapus"><br>
	</form>
</body>
</html>