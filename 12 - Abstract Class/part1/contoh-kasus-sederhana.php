<?php 
	// Ini hanya contoh kasus
class Buah {
	private $warna;

	public function makan() {
		// kunyah
		// nyam..nyam..nyam
	}

	public function setWarna($warna) {
		$this->warna = $warna;
	}
}

class Apel extends Buah {
	public function makan() {
		// kunyah
		// sampai bagian tengah
	}
}

class Jeruk extends Buah {
	public function makan() {
		// kupas
		// kunyah
	}
}

	// pemahaman logika: Jika dikasih apel, dan saya tanya. "Apel rasanya apa?"
$apel = new Apel();
$apel->makan();
 // output: Rasa Apel

	// pemahaman logika: Jika dikasih buah, dan saya tanya. "Buah rasanya apa?"
$buah = new Buah();
$buah->makan();
 // output: pertanyaannya ambigu, apakah apel atau jeruk


// Cara membuat class abstrak
abstract class Buah { // ini kelas abstract
	private $warna;

	abstract public function makan(); // ini method abtract
									  // hanya interface-nya saja
									  // implementasinya, ada di kelas turunannya

	public function setWarna($warna) {
		$this->warna = $warna;
	}	
}

?>