<?php
class CetakInfoProduk{
    public $daftar_produk = [];

    public function tambahproduk(Produk $produk){
        $this->daftar_produk[] = $produk ;
    }


    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftar_produk as $p) {
            $str .= "- {$p->getinfoproduk()} <br>";

        }
        return $str;
    }
}