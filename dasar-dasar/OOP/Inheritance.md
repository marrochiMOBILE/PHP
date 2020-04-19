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

// Strawberry is inherited from Fruit
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