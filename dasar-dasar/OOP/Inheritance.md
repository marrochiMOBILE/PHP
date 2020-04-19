#  Inheritance

Warisan dalam OOP = Ketika suatu kelas berasal dari kelas lain.

Kelas anak akan mewarisi semua properti dan metode publik dan yang dilindungi dari kelas induk. Selain itu, ia dapat memiliki properti dan metode sendiri.

Kelas yang diwarisi ditentukan dengan menggunakan kata kunci extends.

Mari kita lihat sebuah contoh:

```php
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is ".$this->name." and the color is {$this->color}."; 
  }
}

// Stroberi diwarisi dari Buah
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
```
output:
```
Am I a fruit or a berry? The fruit is Strawberry and the color is red.
```

Contoh Dijelaskan


Kelas Strawberry diwarisi dari kelas Buah.

Ini berarti bahwa kelas Strawberry dapat menggunakan properti $ name publik dan $ color serta metode __construct () dan intro () publik dari kelas Fruit karena pewarisan.

Kelas Strawberry juga memiliki metode sendiri: message ().

## Inheritance and the Protected Access Modifier

Dalam bab sebelumnya kita belajar bahwa properti atau metode yang dilindungi dapat diakses di dalam kelas dan oleh kelas yang berasal dari kelas itu. Apa artinya?

```php

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected
?>
```

output :
```
Am I a fruit or a berry? Fatal error: Uncaught Error: Call to protected method Fruit::intro() from context '' in /wwwQYK1O8:27 Stack trace: #0 {main} thrown in /wwwQYK1O8 on line 27
```

Pada contoh di atas kita melihat bahwa jika kita mencoba memanggil metode yang dilindungi (intro ()) dari luar kelas, kita akan menerima kesalahan. metode publik akan berfungsi dengan baik!

```php

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // BAIK. message () bersifat publik dan ia memanggil intro () (yang dilindungi) dari dalam kelas turunan
?>
```

output :
```
Am I a fruit or a berry? The fruit is Strawberry and the color is red.
```


Dalam contoh di atas kita melihat bahwa semua berfungsi dengan baik! Itu karena kita memanggil metode yang dilindungi (intro ()) dari dalam kelas turunan.

## Overriding Inherited Methods


Metode yang diwariskan dapat diganti dengan mendefinisikan ulang metode (menggunakan nama yang sama) di kelas anak.

Lihatlah contoh di bawah ini. Metode __construct () dan intro () di kelas anak (Strawberry) akan menggantikan metode __construct () dan intro () di kelas induk (Buah):

```php
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight; 
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
```

output:
```
The fruit is Strawberry, the color is red, and the weight is 50 gram.
```

## The final Keyword

Kata kunci terakhir dapat digunakan untuk mencegah pewarisan kelas atau untuk mencegah metode penimpaan.

Contoh berikut menunjukkan bagaimana mencegah pewarisan kelas:
```php
<?php
final class Fruit {
  // some code
}

// will result in error
class Strawberry extends Fruit {
  // some code
}
?>
```

output:
```
Fatal error: Class Strawberry may not inherit from final class (Fruit) in /wwwlLXkaG on line 10
```


Contoh berikut menunjukkan cara mencegah penimpaan metode:

```php
class Fruit {
  final public function intro() {
    // some code
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    // some code
  }
}
?>
```

output:
```
Fatal error: Cannot override final method Fruit::intro() in /wwwccxncB on line 15
```

