# Constructor
Konstruktor memungkinkan Anda untuk menginisialisasi properti objek saat membuat objek.

Jika Anda membuat fungsi __construct (), PHP akan secara otomatis memanggil fungsi ini ketika Anda membuat objek dari kelas.

Perhatikan bahwa fungsi konstruksi dimulai dengan dua garis bawah (__)!
### 1
```php
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>
```
### 2
```php
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name(); // apple
echo "<br>";
echo $apple->get_color(); // red
?>
```