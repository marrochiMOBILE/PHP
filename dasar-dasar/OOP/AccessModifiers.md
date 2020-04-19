# Access Modifiers
Properti dan metode dapat memiliki pengubah akses yang mengontrol di mana mereka dapat diakses.

Ada tiga pengubah akses:

1. `public` - properti atau metode dapat diakses dari mana saja. Ini standar
1. `protected` - properti atau metode dapat diakses di dalam kelas dan oleh kelas yang berasal dari kelas itu
1. `private` - properti atau metode HANYA dapat diakses di dalam kelas

Dalam contoh berikut ini kami telah menambahkan tiga pengubah akses yang berbeda ke tiga properti. Di sini, jika Anda mencoba untuk mengatur properti nama itu akan berfungsi dengan baik (karena properti nama adalah publik). Namun, jika Anda mencoba mengatur properti warna atau berat, itu akan menghasilkan kesalahan fatal (karena properti warna dan berat dilindungi dan pribadi):

```php
<?php 
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango';   // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300';   // ERROR
?>
```

output :
```
Fatal error: Uncaught Error: Cannot access protected property Fruit::$color in C:\xampp\htdocs\phpDasarOchi\PHP7.3\tes.php:10 Stack trace: #0 {main} thrown in C:\xampp\htdocs\phpDasarOchi\PHP7.3\tes.php on line 10
```

Dalam contoh berikut ini kami telah menambahkan pengubah akses ke dua metode. Di sini, jika Anda mencoba memanggil fungsi `set_color ()` atau `set_weight ()` itu akan menghasilkan kesalahan fatal (karena kedua fungsi tersebut dianggap dilindungi dan pribadi), bahkan jika semua properti bersifat publik:

```php
<?php 
class Fruit {
  public $name;
  public $color;
  public $weight;
  public $number;

  public function set_number($n) { 
    $this->number = $n;
  }

  function set_name($n) { // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_number(3); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
```


output :
```php
Fatal error: Uncaught Error: Call to protected method Fruit::set_color() from context '' in C:\xampp\htdocs\phpDasarOchi\PHP7.3\tes.php:26 Stack trace: #0 {main} thrown in C:\xampp\htdocs\phpDasarOchi\PHP7.3\tes.php on line 26
```

