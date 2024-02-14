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
    
    public function getinfo() {
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
