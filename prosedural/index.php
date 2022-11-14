<?php

// Prosedural adalah pemograman yang tidak perlu adanya instansi, cukup menggunakan fungsi

//  Contoh dari prosedural
echo date('d-m-y');//fungsi tanpa ada objek

//contoh dari pendekatan objek
$date = new DateTime();//objek
echo $date->format('d-m-y')



?>