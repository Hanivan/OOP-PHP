<?php

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