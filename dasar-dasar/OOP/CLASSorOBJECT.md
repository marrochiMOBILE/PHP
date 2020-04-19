# class / object
1. Kelas didefinisikan dengan menggunakan kata kunci kelas, diikuti dengan nama kelas dan sepasang kurung kurawal ({}). Semua properti dan metodenya masuk ke dalam kawat gigi
1. Kelas bukan apa-apa tanpa benda! Kami dapat membuat beberapa objek dari kelas. Setiap objek memiliki semua properti dan metode yang didefinisikan dalam kelas, tetapi mereka akan memiliki nilai properti yang berbeda.Objek kelas dibuat menggunakan kata kunci baru.
Dalam contoh di bawah ini, $ apel dan $ pisang adalah contoh dari kelas Buah:

### 1
```php
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name(); // apple
echo "<br>";
echo $banana->get_name(); // banana
?>
```

### 2
```php
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name(); // apple
echo "<br>";
echo "Color: " . $apple->get_color(); // red
?>
```

### 3
```php
<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
// inside
$apple->set_name("Apple");
echo $apple->name;

echo '<br>';

// outside
$apple->name = "fruit zakar";
echo $apple->name;
?>
```

Anda dapat menggunakan instanceof kata kunci untuk memeriksa apakah suatu objek termasuk kelas tertentu:

```php
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
var_dump($apple instanceof Fruit); // true
var_dump($apple instanceof Fsruits); // false
?>
```