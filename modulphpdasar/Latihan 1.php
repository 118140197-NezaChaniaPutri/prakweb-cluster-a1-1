<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 1 118140101</title>
</head>
<style>
	* {
		font-family:'TW Cen MT Condensed';
		font-size:12pt;
    }

    .center{
        margin-left:auto;
        margin-right:auto;
        background-color:grey;
    }
    
</style>
<body>
	<fieldset>
        <h2 style="font-size:30pt;">Kalkulator Sederhana</h2>
        <form action="" method="POST" enctype="multipart/form-data">
		<p>
            <label>Bilangan 1:</label><br>
            <input type="text" id="textbox" name="bil1" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Bilangan 2:</label><br>
            <input type="text" id="textbox" name="bil2" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Submit" />
        </p>
		
	</form>
    </fieldset>
	
	<?php
		if(isset($_POST['submit'])){
        $a=$_POST['bil1']+$_POST['bil2'];
        $b=$_POST['bil1']-$_POST['bil2'];
        $c=$_POST['bil1']*$_POST['bil2'];	
        $d=$_POST['bil1']/$_POST['bil2'];
        $e=$_POST['bil1']%$_POST['bil2'];
		echo "<table class=center border=1 width=50% >";
			
		echo '<tr align="center">';	
		echo "<th>Penjumlahan</th>";
        echo "</tr>";
        
		echo '<tr align="center">';
		echo "<td>".$a."</td>";
		echo "</tr>";
            
        echo '<tr align="center">';	
		echo "<th>Pengurangan</th>";
        echo "</tr>";
        
		echo '<tr align="center">';
		echo "<td>".$b."</td>";
        echo "</tr>";
        
        echo '<tr align="center">';	
		echo "<th>Perkalian</th>";
        echo "</tr>";
        
		echo '<tr align="center">';
		echo "<td>".$c."</td>";
        echo "</tr>";
        
        echo '<tr align="center">';	
		echo "<th>Pembagian</th>";
        echo "</tr>";
        
		echo '<tr align="center">';
		echo "<td>".$d."</td>";
        echo "</tr>";
        
        echo '<tr align="center">';	
		echo "<th>Modulo</th>";
        echo "</tr>";
        
		echo '<tr align="center">';
		echo "<td>".$e."</td>";
        echo "</tr>";
        
		echo "</table>";
	
		}
	
	?>
</body>
</html>