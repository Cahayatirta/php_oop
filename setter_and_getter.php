<?php
class Produk {
    private $judul,
           $penulis,
           $harga,
           $penerbit;
    protected $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
    
    public function setdiskon($diskon){
        $this->diskon = $diskon;
    }
    
    public function setharga($harga){
        $this->harga = $harga;
    }
    public function getharga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getjudul(){
        return $this->judul;
    }
    public function setjudul($judul){
        $this->judul = $judul;
    }

    public function getpenulis(){
        return $this->penulis;
    }
    public function setpenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getpenerbit(){
        return $this->penerbit;
    }
    public function setpenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
}
class Komik extends Produk{
    // public $jmlhalaman;
    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $jmlhalaman = "0"){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }
    public function getinfoproduk()
    {
        $str = "Komik : ". parent::getinfoproduk() ."- {$this->jmlhalaman} Halaman";
        return $str;
    }

    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}
class Game extends Produk{

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $waktumain = "0"){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain = $waktumain;
    }
    public function getinfoproduk()
    {
        $str = "Game : ". parent::getinfoproduk() ."- {$this->waktumain} Jam";
        return $str;
    }
    
    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
$p1 = new Komik("Naruto", " gak tau", " Shounen Jump", "5000", "100");    
$p2 = new Game("Uncharted" ," gak tau juga"," Gak tau", "5500", "50"); 

var_dump($p1->getinfoproduk());
echo "<br>";
echo $p2->getinfoproduk();
echo "<hr>";

$p2->setdiskon(50);
echo $p2->getharga();
echo "<hr>";

$p3 = new Produk("test");

$p3->setjudul("annjayyyyy");
echo $p3->getjudul();













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