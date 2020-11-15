<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 3 118140101</title>
</head>
<body>
    <?php
        echo 'Bilangan Prima 1-50';
        echo '<br>';
        for($i=1;$i<=50;$i++){
            $sumbagi=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $sumbagi++;
                }
            }
            if($sumbagi<=2){
                echo $i.' ';
            }
        }
	?>
</body>
</html>