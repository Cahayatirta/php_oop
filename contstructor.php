<?php
class percobaan {
    public $nama,
           $tanggal_lahir,
           $gender;

    public function __construct($nama = "cahaya", $tanggal_lahir = "08062005", $gender = "Laki-Laki") {
        $this->nama = $nama;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->gender = $gender;
    }
    public function test(){
        echo $this->nama , $this->tanggal_lahir , $this->gender;
    }
}
$p1 = new percobaan("cahaya", " 08 juni 2005", " Pria");    
$p2 = new percobaan( " 08 juni 2005", " Pria");    
$p1->test();
echo "<br>";
$p2->test();













// $percobaan1 = new percobaan;
// var_dump($percobaan1->nama = "cahaya");
// $percobaan2 = new percobaan;
// $percobaan2->nama = "tirta";
// var_dump($percobaan2);