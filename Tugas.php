<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Tugas 118140101</title>
</head>
<style>
	* {
		font-family:'TW Cen MT Condensed';
		font-size:12pt;
	}
	
	.header {
		width: 784px;
		height: 200px;
		background-image: url(https://ifmasandiego.org/wp-content/uploads/2011/06/ifma-header-image-784x200-042.jpg);
		
	} 

	li {
		width: 200px;
		height: auto;
		padding: 30px 0;
		text-align: "center";
		background-color: #659dbd;
		font-size:24pt;
	}
	
	.bag2 {
		width: 584px;
		height: 250px;
		background-color: #bc986a;
		margin-left: 200px;
	}
	
	footer {
		width: 784px;
		height: 100px;
		background-color: #5cdb95;
		padding: 1px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
<body>
	<h1 class="header">
	</h1>
	
	<a href="#home"><li>Home</li>
	<a href="#data"><li>Data</li>
	<a href="#penutup"><li>Penutup</li>
	
	
	<h2 class="bag2" style="color:white; text-align="justify";">
		ITERA merupakan suatu Perguruan Tinggi di Indonesia. Pada form ini, isi data sesuai dengan kebutuhan anda
		<form action="" method="POST" enctype="multipart/form-data">
		<label>Nama:</label><br>
            	<input type="text" id="textbox" name="nama"/>
		<input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Submit" />
	</h2>
	<footer>
	Credit 118140101 Rahmat Ramadhan	
	</footer>
	
	<?php
		if(isset($_POST['submit'])){	
		echo "<table border=1 width=100%>";	
		echo '<tr align="center">';	
		echo "<th>Nama</th>";
		echo "</tr>";
		echo '<tr align="center">';	
		echo "<td>".$_POST['nama']."</td>";
		echo "</tr>";
		}
	?>
</body>
</html>