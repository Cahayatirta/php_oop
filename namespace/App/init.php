<?php
// require_once 'produk/InfoProduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/CetakInfoProduk.php';
// require_once 'produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function($class){
    // app\produk\User
    $class = explode("\\", $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode("\\", $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});