<!DOCTYPE html>
    
    <p>Menghitung Bet Berdasarkan Warna</p><br>

    <?php
        function bet($name, $color="red"){
            $countword = strlen($name);
            if($countword > 20 ){
                $harga = 700;
            }
            else if($countword >= 11){
                $harga = 500;
            }
            else if($countword >= 1){
                $harga = 300;
            }
            else{
                $harga = 0;
            }
            $jumlah = $countword * $harga;
            echo '<font color="' .$color .'">nama   : ' .$name.'</font><br>';
            echo '<font color="' .$color .'">total  : ' .$jumlah.'</font><br>';
        }
    ?>
    <form method="post">
        <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><input type="color" name="warna" value="#ff0000"></td>
        </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form><br>
    <?php
        if(isset($_POST['submit'])){
            bet($_POST['nama'], $_POST['warna']);
        }
    ?>
</html>