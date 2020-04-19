# Abstract Classes

Kelas dan metode abstrak adalah ketika kelas induk memiliki metode bernama, tetapi membutuhkan kelas anaknya untuk mengisi tugas.

Kelas abstrak adalah kelas yang berisi setidaknya satu metode abstrak. Metode abstrak adalah metode yang dideklarasikan, tetapi tidak diimplementasikan dalam kode.

Kelas atau metode abstrak didefinisikan dengan kata kunci abstrak:

```php
<?php
abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}
?>
```

Ketika mewarisi dari kelas abstrak, metode kelas anak harus didefinisikan dengan nama yang sama, dan pengubah akses yang sama atau kurang dibatasi. Jadi, jika metode abstrak didefinisikan sebagai terproteksi, metode kelas anak harus didefinisikan sebagai terproteksi atau publik, tetapi tidak pribadi. Juga, jenis dan jumlah argumen yang diperlukan harus sama. Namun, kelas anak mungkin memiliki argumen opsional sebagai tambahan.

Jadi, ketika kelas anak diwarisi dari kelas abstrak, kami memiliki aturan berikut:


1. Metode kelas anak harus didefinisikan dengan nama yang sama dan itu me-redecode metode abstrak induknya
1. Metode kelas anak harus didefinisikan dengan pengubah akses yang sama atau kurang dibatasi
1. Jumlah argumen yang diperlukan harus sama. Namun, kelas anak mungkin memiliki argumen opsional sebagai tambahan

```java
<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!"; 
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!"; 
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!"; 
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>
 
```

output:
```
Choose German quality! I'm an Audi!
Proud to be Swedish! I'm a Volvo!
French extravagance! I'm a Citroen!
```

Contoh Dijelaskan

Kelas Audi, Volvo, dan Citroen diwarisi dari kelas Mobil. Ini berarti bahwa kelas Audi, Volvo, dan Citroen dapat menggunakan properti public $ name serta metode public __construct () dari kelas Car karena pewarisan.

Tetapi, intro () adalah metode abstrak yang harus didefinisikan di semua kelas anak dan mereka harus mengembalikan string.

## More Abstract Class Examples

Mari kita lihat contoh lain di mana metode abstrak memiliki argumen
```php
<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>

```

output:
```
Mr. John Doe
Mrs. Jane Doe
```


Mari kita lihat contoh lain di mana metode abstrak memiliki argumen, dan kelas anak memiliki dua argumen opsional yang tidak didefinisikan dalam metode abstrak induk:
```php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // Kelas anak dapat mendefinisikan argumen opsional yang tidak ada dalam metode abstrak induknya
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";  
echo $class->prefixName("Jane Doe");
```
output:
```
Dear Mr. John Doe
Dear Mrs. Jane Doe
```
