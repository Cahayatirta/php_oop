<?php
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $waktumain;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $jmlhalaman = "0", $waktumain = "0") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
    }
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoproduk(){
        $str = "{$this->judul} | {$this->getlabel()} ({$this->harga}) ";
        // if ($this->tipe == "Komik"){
        //     $str .= " - {$this->jmlhalaman} Halaman";
        // }elseif ($this->tipe == "Game"){
        //     $str .= " - {$this->waktumain} Jam";
        // }
        return $str;
    }
}
class Komik extends Produk{
    public function getinfoproduk()
    {
        $str = "Komik : {$this->judul} | {$this->getlabel()} ({$this->harga}) - {$this->jmlhalaman} Halaman";
        return $str;
    }
}
class Game extends Produk{
    public function getinfoproduk()
    {
        $str = "Game : {$this->judul} | {$this->getlabel()} ({$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
$p1 = new Komik("Naruto", " gak tau", " Shounen Jump", "5000", "100", null);    
$p2 = new Game("Uncharted" ," gak tau juga"," Gak tau", "5500", null, "50");  
echo $p1->getinfoproduk();
echo "<br>";
echo $p2->getinfoproduk();














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