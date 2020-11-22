<!DOCTYPE html>
    <body>
    <fieldset>
        <h2 style="font-size:30pt;">Mencari Bilangan Faktorial</h2>
        <form action="" method="POST" enctype="multipart/form-data">
		<p>
            		<label>Masukkan Bilangan :</label><br>
            		<input type="text" id="textbox" name="num" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            		<input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Submit" />
        </p>
		
	</form>
    </fieldset>
        <?php
            function faktorial($a){
                for($i=$a-1;$i>=1;$i--){
                    $a=$a*$i;
                }
                echo "Hasil Faktorial : ".$a;
            }
            if(isset($_POST['submit'])){
                $bil=$_POST['num'];
                faktorial($bil);
            }
          
        ?>
    </body>
</html>