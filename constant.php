<?php

// define("NAMA", "Cahaya Tirta");
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;

// class Coba{
//     // define("NAMA" , "Cahaya");
//     const NAMA = "Cahaya Tirta";
// }

// echo Coba::NAMA;

echo __LINE__; // menampilkan sedag di baris berapa
echo "<br>";
echo __FILE__; // menampilkan sedang di file apa
echo "<br>";
echo __FILE__; // menampilkan sedang di file apa
echo "<br>";

function functioncoba() {
    return __function__; // menampikan sedang di function apa
}
echo functioncoba();

echo "<br>";

class Test{
    public $test = __CLASS__; // menampilkan sedang berada di class apa
}
$test = new Test;
echo $test->test;
?>