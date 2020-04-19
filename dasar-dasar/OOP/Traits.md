# Traits

PHP hanya mendukung pewarisan tunggal: kelas anak hanya dapat mewarisi dari satu orangtua tunggal.

Jadi, bagaimana jika sebuah kelas perlu mewarisi beberapa perilaku? Ciri-ciri OOP mengatasi masalah ini.

Ciri digunakan untuk mendeklarasikan metode yang dapat digunakan dalam beberapa kelas. Ciri dapat memiliki metode dan metode abstrak yang dapat digunakan dalam beberapa kelas, dan metode tersebut dapat memiliki pengubah akses apa pun (publik, pribadi, atau dilindungi).

Sifat dideklarasikan dengan kata kunci sifat:

```php
<?php
trait TraitName {
  // some code...
}
?>
```

Untuk menggunakan sifat dalam kelas, gunakan kata kunci penggunaan/ `use`:
```php
<?php
class MyClass {
  use TraitName;
}
?>
```

Mari kita lihat sebuah contoh:

```php
<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
```

output:
```
OOP is fun!
```


Contoh Dijelaskan
Di sini, kami menyatakan satu ciri: message1. Kemudian, kami membuat kelas: Selamat datang. Kelas menggunakan sifat tersebut, dan semua metode dalam sifat tersebut akan tersedia di kelas.

Jika kelas lain perlu menggunakan fungsi msg1 (), cukup gunakan sifat message1 di kelas tersebut. Ini mengurangi duplikasi kode, karena tidak perlu mengulangi metode yang sama berulang kali

## Using Multiple Traits

```php
<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!"; 
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>
```

Contoh Dijelaskan
Di sini, kami mendeklarasikan dua ciri: message1 dan message2. Kemudian, kami membuat dua kelas: Selamat Datang dan Selamat Datang2. Kelas pertama (Selamat Datang) menggunakan sifat message1, dan kelas kedua (Welcome2) menggunakan sifat message1 dan message2 (beberapa sifat dipisahkan dengan koma)



