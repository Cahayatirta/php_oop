<?php

require_once 'app/init.php';

$p1 = new Komik("Naruto", " gak tau", " Shounen Jump", "5000", "100");    
$p2 = new Game("Uncharted" ," gak tau juga"," Gak tau", "5500", "50"); 

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($p1);
$cetakproduk->tambahproduk($p2);
echo $cetakproduk->cetak();
echo "<br>";

use App\Service\User as ServiceUser;
new ServiceUser();
echo "<br>";
use App\Produk\User as ProdukUser;
new ProdukUser();
