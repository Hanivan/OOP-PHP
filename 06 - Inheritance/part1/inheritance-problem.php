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
		   $waktuMain,
		   $tipe;

	// method khusus yang dijalankan secara otomatis
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) { // ini nilai default
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe}: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Gta San Andreas", "Dan Houser, James Worrall, DJ Pooh", "Rockstar Games", 20000, 0, 20, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// echo "Komik: " . $produk1->getLabel();
// echo "<br>";
// echo "Game: " . $produk2->getLabel();
// echo "<br>";
// $InfoProduk1 = new CetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);

// Komik: Naruto | Mashashi Kishimoto; Shonen Jump (Rp. 30000) - 100 Halaman.
// Game: Gta San Andreas | Dan Houser, James Worrall, DJ Pooh; Rockstar Games (Rp. 20000) ~ 20 Jam.

?>