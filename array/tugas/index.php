<?php

//Penggunaan Array menggunakan for
//For perulangan yg akan di ulang sesuai set yg kita atur

//Variabel angka memiliki nilai pertama = 0 dan diakhiri kurang atau sama dengan 10, dihitung increment
// for($angka = 0; $angka+=10; $angka++){
//     echo "angkanya adalah : $angka <br>";
// }

//foreach
//foreach mengulang sesuai nilai yg mau di ambil (key)
$warna = array("merah","hijau","biru","kuning");

// foreach ($warna as $variasi){
//     echo "berwarna : $variasi";
// }


//Tugas  menerapkan for dan foreach menggunakan php
$days = ["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];

?>


<html>
    <head>
        <title>Latihan menggunakan for dan foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($hari = 0; $hari < count($days); $hari++){
            ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <?php foreach($days as $hari_hari) { ?>
            <div class="box2">
                <?php echo $hari_hari;?>
            </div>
        <?php } ?>
    </body>
</html>