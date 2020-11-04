<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 2 118140101</title>
</head>
<style>
	* {
		font-family:'TW Cen MT Condensed';
		font-size:12pt;
	}
</style>
<body>
	<fieldset>
        <h2 style="font-size:30pt;">Presensi Stadium Generale</h2>
        <form action="" method="POST" enctype="multipart/form-data">
		<p>
            		<label>Nama:</label><br>
            		<input type="text" id="textbox" name="nama" style="font-size:12pt; height:30px; width:800px;"/>
        	</p>
        	<p>
			<label>Jenis Kelamin :</label> <br>
            		<input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan<br>
        	</p>
		<p>
			<label>Status Pengguna :</label> <br>
            			<select name="status" style="font-size:12pt; height:30px; width:807.5px;">
					<option value="Umum">Umum</option>
					<option value="Mahasiswa">Mahasiswa</option>
                			<option value="Dosen">Dosen</option>
  
            			</select>
        	</p>
            		<label>Hobi:</label><br>
            		<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
			<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
        	</p>
        	<p>
            		<label>Alamat:</label><br>
            		<textarea name="alamat" style="font-size:12pt; height:60px; width:802.5px;"></textarea>
        	</p>
		<p>
			<label>Foto :</label> <br>
			<input type="file" name="gambar" accept="image/*" style="font-size:12pt; height:60px; width:802.5px;"> <br>
		</p>
        	<p>
            		<input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Submit" />
        	</p>
		
	</form>
        </fieldset>
	
	
	<?php
	
		if(isset($_POST['submit'])){
			
		echo "<table border=1 width=100%>";
			
		echo '<tr align="center">';
			
		echo "<th>Nama</th>";
			
		echo "<th>Jenis Kelamin</th>";
	
		echo "<th>Status Pengguna</th>";
			
		echo "<th>Hobi</th>";
			
		echo "<th>Alamat</th>";
			
		echo "<th>Foto</th>";
			
		echo "</tr>";

			
		echo '<tr align="center">';
			
		echo "<td>".$_POST['nama']."</td>";
			
		echo "<td>".$_POST['jk']."</td>";

		echo "<td>".$_POST['status']."</td>";

		echo "<td>";
		if(!empty($_POST['hobi'])){			
			foreach($_POST['hobi'] as $hobi){
				echo $hobi.'<br>';
			}
		}
		echo "</td>";			
		echo "<td>".$_POST['alamat']."</td>";

			
			if($_FILES['gambar']['tmp_name']){
				
				$imageData = file_get_contents($_FILES['gambar']['tmp_name']);
				
				echo sprintf('<td><img src="data:image;base64,%s"  height="100"/></td>', base64_encode($imageData));
			
			}
			
		echo "</tr>";
			
		echo "</table>";
	
		}
	
	?>
</body>
</html>