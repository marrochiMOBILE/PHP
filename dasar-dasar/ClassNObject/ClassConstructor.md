# Class Constructor
PHP menyediakan metode sihir konstruktor __construct (), yang dipanggil secara otomatis setiap kali objek baru dipakai.
Sebagai contoh:

```php
<?php
class Person {
    public function __construct() {
        echo "Object created";
    }
}
$p = new Person();
?>
```

Metode __construct () sering digunakan untuk inisialisasi apa pun yang mungkin diperlukan objek sebelum digunakan. Parameter dapat dimasukkan dalam __construct () untuk menerima nilai saat objek dibuat.
Sebagai contoh:

```php
class Person {
  public $name;
  public $age;
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}
$p = new Person("David", 42);
```
Dalam kode di atas, konstruktor menggunakan argumen dalam pernyataan baru untuk menginisialisasi properti kelas yang sesuai.
```
Anda tidak dapat menulis beberapa metode __construct () dengan jumlah parameter yang berbeda. Perilaku konstruktor yang berbeda harus ditangani dengan logika dalam metode __construct () tunggal.
```

Mirip dengan konstruktor kelas, ada metode sihir destruktor __destruct (), yang secara otomatis dipanggil ketika objek dihancurkan.
Sebagai contoh:

```php
<?php
class Person {
    public function __destruct() {
        echo "Object destroyed";
    }
}
$p = new Person();
?>
```

Script ini membuat objek Person baru. Ketika skrip berakhir, objek secara otomatis dihancurkan, yang memanggil destruktor dan menampilkan pesan "Objek dihancurkan".
Untuk secara eksplisit memicu destructor, Anda dapat menghancurkan objek menggunakan fungsi unset () dalam pernyataan yang mirip dengan: unset ($ p);

```
Destructors berguna untuk melakukan tugas-tugas tertentu ketika objek menyelesaikan siklus hidupnya. Misalnya, lepaskan sumber daya, tulis file log, tutup koneksi database, dan sebagainya.
PHP melepaskan semua sumber daya ketika skrip menyelesaikan eksekusi.
```
```php
class TestMe {
  public function __construct() { echo "2"; }
  public function __destruct() { echo "1"; }
}
$test = new TestMe();
unset($test); //21
```


Kelas dapat mewarisi metode dan properti kelas lain. Kelas yang mewarisi metode dan properti disebut subclass. Kelas yang diwarisi dari subclass disebut kelas induk.

Warisan dicapai dengan menggunakan kata kunci extends.
Sebagai contoh:

```php
<?php
class Animal {
    public $name;
    public function hi() {
        echo "Hi from Animal";
    }
}
class Dog extends Animal {
}

$d = new Dog();
$d->hi();

?>
```
Di sini kelas Anjing mewarisi dari kelas Hewan. Seperti yang Anda lihat, semua properti dan metode Hewan dapat diakses oleh objek Anjing.

Konstruktor induk tidak disebut secara implisit jika subkelas mendefinisikan konstruktor. Namun, jika anak tidak mendefinisikan konstruktor maka itu akan diwarisi dari kelas induk jika tidak dinyatakan pribadi

```
Perhatikan bahwa semua properti dan metode kami memiliki visibilitas publik.
Untuk menambahkan kontrol atas objek, deklarasikan metode dan properti menggunakan kata kunci visibilitas. Ini mengontrol bagaimana dan dari mana properti dan metode dapat diakses.
Lihatlah pelajaran selanjutnya untuk informasi lebih lanjut tentang visibilitas.
```

### PHP Visibility

Visibilitas mengontrol bagaimana dan dari mana properti dan metode dapat diakses.
Sejauh ini, kami telah menggunakan kata kunci publik untuk menentukan bahwa properti / metode dapat diakses dari mana saja.
Ada dua kata kunci lagi untuk menyatakan visibilitas:
protected: Membuat anggota hanya dapat diakses di dalam kelas itu sendiri, dengan mewarisi, dan oleh kelas induk.
pribadi: Membuat anggota hanya dapat diakses oleh kelas yang mendefinisikan mereka.

Properti kelas harus selalu memiliki tipe visibilitas. Metode yang dinyatakan tanpa kata kunci visibilitas eksplisit didefinisikan sebagai publik.

```
Protected members are used with inheritance.
Private members are used only internally in a class.
```

### PHP Interfaces

Antarmuka menentukan daftar metode yang harus diterapkan oleh suatu kelas. Namun, antarmuka itu sendiri tidak mengandung implementasi metode apa pun. Ini adalah aspek penting dari antarmuka karena memungkinkan metode ditangani secara berbeda di setiap kelas yang menggunakan antarmuka.

Kata kunci antarmuka mendefinisikan antarmuka.
Kata kunci implement digunakan dalam kelas untuk mengimplementasikan antarmuka.

Misalnya, AnimalInterface didefinisikan dengan deklarasi untuk fungsi makeSound (), tetapi tidak diimplementasikan sampai digunakan di kelas:

```php
<?php
interface AnimalInterface {
    public function makeSound();
}

class Dog implements AnimalInterface {
    public function makeSound() {
        echo "Woof! <br />";
    }
}
class Cat implements AnimalInterface {
    public function makeSound() {
        echo "Meow! <br />";
    }
}

$myObj1 = new Dog();
$myObj1->makeSound();

$myObj2 = new Cat();
$myObj2->makeSound();
?>
```

Sebuah kelas dapat mengimplementasikan banyak antarmuka. Lebih dari satu antarmuka dapat ditentukan dengan memisahkannya dengan koma. Sebagai contoh:

class Demo implements AInterface, BInterface, CInterface {
  // Functions declared in interfaces must be defined here
}

Antarmuka dapat mewarisi antarmuka lain dengan menggunakan kata kunci extends
> Semua metode yang ditentukan dalam antarmuka memerlukan visibilitas publik.

### PHP Abstract Classes

Kelas abstrak dapat diwarisi tetapi mereka tidak dapat dipakai.
Mereka menawarkan keuntungan karena dapat mengandung kedua metode dengan definisi dan metode abstrak yang tidak didefinisikan sampai mereka diwarisi.

```php
<?php
abstract class Fruit { 
  private $color; 
    
  abstract public function eat(); 
    
  public function setColor($c) { 
    $this->color = $c; 
  } 
} 

class Apple extends Fruit {
  public function eat() {
    echo "Omnomnom";
  }
}

$obj = new Apple();
$obj->eat();
?>
```

```php
abstract class Calc { 
  abstract public function calculate($param); 
  protected function getConst() { return 4; }
} 
class FixedCalc extends Calc {
  public function calculate($param) {
    return $this->getConst() + $param;
  }
}
$obj = new FixedCalc();
echo $obj->calculate(38); // 42
```