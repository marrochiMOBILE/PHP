# Classes & Objects in PHP

Pemrograman Berorientasi Objek (OOP) adalah gaya pemrograman yang dimaksudkan untuk membuat pemikiran tentang pemrograman lebih dekat dengan pemikiran tentang dunia nyata.

Objek dibuat menggunakan kelas, yang merupakan titik fokus OOP.
Kelas menggambarkan objek apa yang akan, tetapi terpisah dari objek itu sendiri. Dengan kata lain, kelas dapat dianggap sebagai cetak biru, deskripsi, atau definisi objek.

> lanjut 
Dalam PHP, sebuah kelas dapat menyertakan variabel anggota yang disebut properti untuk mendefinisikan fitur dari suatu objek, dan fungsi, yang disebut metode, untuk mendefinisikan perilaku objek. Definisi kelas dimulai dengan kelas kata kunci, diikuti oleh nama kelas. Kurung kurawal melampirkan definisi properti dan metode milik kelas.
Sebagai contoh:

```php
class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
}
```

Kode di atas mendefinisikan kelas Person yang menyertakan properti age dan metode speak ().

> Nama kelas yang valid dimulai dengan huruf atau garis bawah, diikuti sejumlah huruf, angka, atau garis bawah.

Perhatikan kata kunci publik di depan metode bicara; itu adalah penentu visibilitas.
Kata kunci publik menentukan bahwa anggota dapat diakses dari mana saja dalam kode.
Ada kata kunci visibilitas lain dan kami akan mempelajarinya dalam pelajaran nanti.

> Lihatlah pelajaran selanjutnya untuk melihat bagaimana membuat instance objek!

### PHP Objects

Proses membuat objek kelas disebut instantiation.
Untuk membuat instance objek kelas, gunakan kata kunci baru, seperti pada contoh di bawah ini:

> $bob = new Person();


Dalam kode di atas, $ bob adalah objek dari kelas Person.

Untuk mengakses properti dan metode suatu objek, gunakan tanda panah (->), seperti pada:

> echo $bob->age;

Pernyataan ini menampilkan nilai properti age untuk $ bob. Jika Anda ingin menetapkan nilai ke properti gunakan operator penugasan = seperti yang Anda lakukan dengan variabel apa pun.

Mari kita mendefinisikan kelas Person, instantiate objek, membuat tugas, dan memanggil metode speak ():

```php
class Person {
  public $age;
  function speak() {
    echo "Hi!";
  }
}
$p1 = new Person(); //instantiate an object
$p1->age = 23; // assignment 
echo $p1->age; // 23
$p1->speak(); // Hi!
```

## this 
$ this adalah pseudo-variable yang merupakan referensi ke objek pemanggil. Saat bekerja dalam suatu metode, gunakan $ this dengan cara yang sama Anda akan menggunakan nama objek di luar kelas.
Sebagai contoh:

```php
<?php
class Dog {
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display(); // 4

echo '<br />';

$d2 = new Dog();
$d2->legs = 2;
$d2->display(); // 2
?>
```

Kami membuat dua objek dari kelas Dog dan memanggil metode display () mereka. Karena metode tampilan () menggunakan $ this, nilai kaki mengacu pada nilai properti objek panggilan yang sesuai.

> Seperti yang Anda lihat, setiap objek dapat memiliki nilai sendiri untuk properti kelas.