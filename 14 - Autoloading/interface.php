<?php

// Jualan Produk
// Komik
// Game

interface InfoProduk {
	public function getInfoProduk();
}

abstract class Produk {
	protected $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	// method khusus yang dijalankan secara otomatis
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) { // ini nilai default
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

		// Set&Get Judul
	public function setJudul($judul) {
		if(!is_string($judul)) {
			throw new Exception("Judul Harus String");
		}
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

		// Set&Get Penulis
	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

		// Set&Get Penerbit
	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

		// Set&Get Diskon
	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

		// Set&Get Harga
		// Untuk visibility private
	public function setHarga($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();

}

class Komik extends Produk implements InfoProduk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk() {
		$str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk implements InfoProduk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

		// Untuk visibility protected
	// public function getHarga() {
	// 	return $this->harga;
	// }

	public function getInfoProduk() {
		$str = "Game: " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = [];

	public function tambahProduk(Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "Daftar Produk: <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Gta San Andreas", "Dan Houser, James Worrall, DJ Pooh", "Rockstar Games", 20000, 20);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

?>