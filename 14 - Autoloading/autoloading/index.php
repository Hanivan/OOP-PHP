<?php 

require 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Gta San Andreas", "Dan Houser, James Worrall, DJ Pooh", "Rockstar Games", 20000, 20);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<hr>";
new Coba();

?>