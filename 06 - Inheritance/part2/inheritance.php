<?php

// Jualan Produk
// Komik
// Game
class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	// method khusus yang dijalankan secara otomatis
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) { // ini nilai default
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Gta San Andreas", "Dan Houser, James Worrall, DJ Pooh", "Rockstar Games", 20000, 0, 20);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// echo "Komik: " . $produk1->getLabel();
// echo "<br>";
// echo "Game: " . $produk2->getLabel();
// echo "<br>";
// $InfoProduk1 = new CetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);

// Komik: Naruto | Mashashi Kishimoto; Shonen Jump (Rp. 30000) - 100 Halaman.
// Game: Gta San Andreas | Dan Houser, James Worrall, DJ Pooh; Rockstar Games (Rp. 20000) ~ 20 Jam.

?>