<?php

//Array adalah tipe data yang berisi beberapa tipe data (string maupun integer) 
//Keynya diawali dengan angkya 0 dst

//Array asosiatif
//keynya berubah menjadi tipe data string

$siswa = [
    1 => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi',
];

//echo "siapa yang paling ganteng? {$siswa['1]}";

// Array Multimension
// ada array di dalem array

$togel = [
    [1, 2, 3, 4, 5],//0 
    [6, 7, 8, 9, 22],//1
    [12, 15, 13, 14, 51],//2
    [19, 21, 31, 47, 35]//3
];

//cara memanggil array
//echo $togel [2][4];

//Array Push
//Array Push berguna untuk menerima 2 parameter, parameter pertama : untuk terget, parameter kedua untuk nilai yang akan dimasukan

$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

///cara pertama untuk menambahkan item
array_push($buah, 'timun');

//cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];
?>