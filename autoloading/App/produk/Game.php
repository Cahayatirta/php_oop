<?php
class Game extends Produk implements infoproduk{

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = "0", $waktumain = "0"){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain = $waktumain;
    }
    public function getinfoproduk()
    {
        $str = "Game : ". $this->getinfo() ."- {$this->waktumain} Jam";
        return $str;
    }
    
    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}