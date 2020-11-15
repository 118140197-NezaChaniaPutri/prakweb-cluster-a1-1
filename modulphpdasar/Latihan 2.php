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

    .center{
        margin-left:auto;
        margin-right:auto;
        background-color:grey;
    }
    
</style>
<body>
	<fieldset>
        <h2 style="font-size:30pt;">WORD SORTING</h2>
        <form action="" method="POST" enctype="multipart/form-data">
		
        <p>
            <label>Kata 1:</label><br>
            <input type="text" id="textbox" name="word1" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 2:</label><br>
            <input type="text" id="textbox" name="word2" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 3:</label><br>
            <input type="text" id="textbox" name="word3" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 4:</label><br>
            <input type="text" id="textbox" name="word4" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 5:</label><br>
            <input type="text" id="textbox" name="word5" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 6:</label><br>
            <input type="text" id="textbox" name="word6" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 7:</label><br>
            <input type="text" id="textbox" name="word7" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 8:</label><br>
            <input type="text" id="textbox" name="word8" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 9:</label><br>
            <input type="text" id="textbox" name="word9" style="font-size:12pt; height:30px; width:800px;"/>
        </p>
        <p>
            <label>Kata 10:</label><br>
            <input type="text" id="textbox" name="word10" style="font-size:12pt; height:30px; width:800px;"/>
        </p>

        <p>
            <input type="submit" name="submit" style="background-color:#2a77e8; color:white; height:40px; width:100px;" value="Submit" />
        </p>
		
	</form>
    </fieldset>
	
	<?php
		if(isset($_POST['submit'])){
        $array=array($_POST['word1'],$_POST['word2'],$_POST['word3'],$_POST['word4'],$_POST['word5'],$_POST['word6'],$_POST['word7'],$_POST['word8'],$_POST['word9'],$_POST['word10']);
        sort($array,SORT_STRING);   
		print_r($array);
		}
	?>
</body>
</html>