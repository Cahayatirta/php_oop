<?php
class percobaan {
    public $nama,
           $penerbit,
           $harga;

    public function __construct($nama = "jajan", $penerbit = "Penerbit", $harga = "0") {
        $this->nama = $nama;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function test(){
        return "$this->nama, $this->penerbit";
    }
}

class CetakInfo{
    public function cetak( percobaan $info){
        $str = "{$info->test()} {$info->harga}";
        return $str;
    }
}
$p1 = new percobaan("Nabati", " Richeese", " 5000");    
$p2 = new percobaan("Wafello" ," Roma", " 5500");    
// echo $p1->test();
// echo "<br>";
// echo $p2->test();
// echo "<br>";
$infop1 = new CetakInfo();
echo $infop1->cetak($p1);
echo "<br>";
echo $infop1->cetak($p2);












// $percobaan1 = new percobaan;
// var_dump($percobaan1->nama = "cahaya");
// $percobaan2 = new percobaan;
// $percobaan2->nama = "tirta";
// var_dump($percobaan2);