<?php
class percobaan {
    public $nama = "Cahaya", $tanggal_lahir = "080605", $gender = "laki-laki";
    public function test($a,$b,$c){

        echo $this->nama , $this->tanggal_lahir , $this->gender;
    }
}
$p1 = new percobaan;
$p1->test("Cahaya", " Tirta", " Dharma");
// $percobaan1 = new percobaan;
// var_dump($percobaan1->nama = "cahaya");
// $percobaan2 = new percobaan;
// $percobaan2->nama = "tirta";
// var_dump($percobaan2);