<?php 

interface Buah {
	public function makan();
	public function setWarna($warna);
}

interface Benda {
	public function setUkuran($ukuran);
}

class Apel implements Buah, Benda {
	protected $warna;
	protected $ukuran;

	public function makan() {
		// kunyah
		// sampai bagian tengah
	}

	public function setWarna($warna) {
		$this->warna = $warna;
	}

	public function setUkuran($ukuran) {
		$this->ukuran = $ukuran;
	}
}

class Jeruk implements Buah {
	protected $warna;

	public function makan() {
		// kupas
		// kunyah
	}

	public function setWarna($warna) {
		$this->warna = $warna;
	}
}

?>