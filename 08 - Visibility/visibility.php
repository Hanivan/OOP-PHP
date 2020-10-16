<?php

// Jualan Produk
// Komik
// Game
class Produk {
	public $judul,
		   $penulis,
		   $penerbit;

	protected $diskon = 0;
	// protected $harga;
	private $harga;

	// method khusus yang dijalankan secara otomatis
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) { // ini nilai default
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

		// Untuk visibility private
	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
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

		// Untuk visibility protected
	// public function getHarga() {
	// 	return $this->harga;
	// }

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
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
echo "<hr>";

$produk2->setDiskon(60);
echo $produk2->getHarga();

?>