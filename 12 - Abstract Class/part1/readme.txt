Definisi Abstract Class:
 - Sebuah kelas yang tidak dapat di-instansiasi
 - Bisa juga disebut 'Kelas abstrak'
 - Mendefinisikan interface untuk kelas lain yang menjadi turunannya(class child)
 - Berperan sebagai 'kerangka dasar' untuk kelas turunannya
 - Minimal harus memiliki 1 method abstrak
 - Digunakan dalam 'pewarisan'/inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya

Abstract Class ini erat hubungannnya dengan Inheritance

Konsep definisi Abtract Class yang lain:
 - Semua turunannya, harus mengimplementasi method abstrak yang ada di kelas abstrak-nya(parent)
 - Kelas abstrak boleh memiliki property / method reguler
 - Kelas abstrak boleh memiliki property / static method

Contoh Implementasi Abtract Class:
 - class Mobil extends Kendaraan
 - class Laptop extends Komputer
 - class Email extends Komunikasi

Alasan Menggunakan Abstract Class:
 - Merepresentasikan ide atau konsep dasar yang akan diimplementasikan ke class child-nya
 - "Composition over Inheritance" => lebih baik melakukan komposisi dibandingkan dengan incherintace begitu saja
 - Salah satu cara menerapkan Polimorphism
 - Sentralisasi Logic
 - Mempermudah pengerjaan tim