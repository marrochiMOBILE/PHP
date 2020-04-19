# Destructor
Destruktor disebut ketika objek dihancurkan atau skrip dihentikan atau keluar.

Jika Anda membuat fungsi __destruct (), PHP akan secara otomatis memanggil fungsi ini di akhir skrip.

Perhatikan bahwa fungsi penghancuran dimulai dengan dua garis bawah (__)!

### 1
```php
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit("Apple"); // The fruit is Apple.
?>
```

### 2
```php
<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit("Apple", "red"); // The fruit is Apple and the color is red.
?>
```

