Definisi Interface:
 - Kelas Abstrak yang sama sekali tidak memiliki implementasi
 - Murni merupakan template untuk kelas turunannya
 - Tidak Boleh memiliki property, hanya deklarasi method saja
 - Semua method harus dideklarasikan dengan visibility public
 - Boleh mendeklarasikan __construct(), untuk me-wajibkan Child Class-nya mempunyai method __construct() juga
 - Satu kelas(Child Class) boleh mengimplementasikan banyak interface

Definisi Kedua:
 - Dengan menggunakan type-hinting dapat menggunakan 'Dependency Injection'
 - Pada akhirnya akan mencapai Polymorphism