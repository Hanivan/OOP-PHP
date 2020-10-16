<?php

// Jualan Produk
// Komik
// Game
class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	// method khusus yang dijalankan secara otomatis
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) { // ini nilai default
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
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
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk() {
		$str = "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Gta San Andreas", "Dan Houser, James Worrall, DJ Pooh", "Rockstar Games", 20000, 20);


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