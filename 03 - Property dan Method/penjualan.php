<?php

// Jualan Produk
// Komik
// Game
class Produk {
	public $judul = "judul", // ini nilai default
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	// public function sayHello() {
	// 	return "Hello World!!";
	// }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; // ini di timpah
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Boruto";
// $produk2->tambahProperty = "hahaha"; // ini akan otomatis ditambahkan
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Gta San Andreas";
$produk4->penulis = "Dan Houser, James Worrall, DJ Pooh";
$produk4->penerbit = "Rockstar Games";
$produk4->harga = 20000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();

?>