<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="">
    <div> NIM :
        <input type="text" name="NIM" placeholder="Masukan NIM">
    </div>
    <div> Nama :
        <input type="text" name="Nama" placeholder="Masukan Nama">
    </div>
    <div> Alamat :
        <input type="text" name="Alamat" placeholder="Masukan Alamat">
    </div>
    <div>
        <input type="button" value="simpan">
    </div>
    </form>
    </fieldset>
</body>
</html>

<?php

    //array inedx
    $mhs= array();

    $mhs[0] = [123, 124, 125];
    $mhs[1] = ['Udin', 'Joko', 'Tatang'];
    $mhs[2] = ['Lohbener', 'Indramayu', 'Jatibarang'];

    for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
            echo $mhs[$j][$i].' ';
        }
        echo "<br>";
    }

    //array assosiative

    $mhsx=array();
    $mhsx['nim']=[123, 124, 125];
    $mhsx['nama']=['Udin', 'Joko', 'Tatang'];
    $mhsx['alamat']=['lohbener', 'Indramayu', 'Jatibarang'];

    echo '<p> Panjang arraynya adalah' .$j=sizeof($mhsx).'</p>';

    for ($i=0; $i<sizeof($mhsx); $i++){
        echo $mhsx['nim'][$i].' ';
        echo $mhsx['nama'][$i].' ';
        echo $mhsx['alamat'][$i].'<br>';
    }

    /*foreach($mhsx as $x){
        foreach ($x as $y){
            echo $y.'<br>';    
        }
        echo "<br>";
    }*/
?>
