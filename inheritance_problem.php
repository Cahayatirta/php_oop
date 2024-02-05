<?php
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain,
           $tipe;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $jmlhalaman = "0", $waktumain = "0", $tipe = "Tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfolengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} ({$this->harga}) ";
        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlhalaman} Halaman";
        }elseif ($this->tipe == "Game"){
            $str .= " - {$this->waktumain} Jam";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
$p1 = new Produk("naruto", " gak tau", " Shounen Jump", " 5000", "100", null, "Komik");    
$p2 = new Produk("Uncharted" ," gak tau juga"," Gak tau", " 5500", null, "50", "Game");  
echo $p1->getinfolengkap();
echo "<br>";
echo $p2->getinfolengkap();














// echo $p1->test();
// echo "<br>";
// echo $p2->test();
// echo "<br>";

// $infop1 = new CetakInfo();
// echo $infop1->cetak($p1);
// echo "<br>";
// echo $infop1->cetak($p2);

// $percobaan1 = new percobaan;
// var_dump($percobaan1->judul = "cahaya");
// $percobaan2 = new percobaan;
// $percobaan2->judul = "tirta";
// var_dump($percobaan2);