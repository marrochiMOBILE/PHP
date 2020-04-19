# Static Properties

Properti statis dapat dipanggil langsung - tanpa membuat turunan kelas.

Properti statis dinyatakan dengan kata kunci statis:

<?php
class ClassName {
  public static $staticProp = "ochi ganteng";
}
?>


Untuk mengakses properti statis, gunakan nama kelas, tanda titik dua (: :), dan nama properti:

```php
ClassName::staticProp;
```

mari coba liat contoh
```php
<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>
```

Contoh Dijelaskan

Di sini, kami mendeklarasikan properti statis: $ value. Kemudian, kami mengulangi nilai properti statis dengan menggunakan nama kelas, titik dua ((:)), dan nama properti (tanpa membuat kelas terlebih dahulu).

## More on Static Properties


Kelas dapat memiliki properti statis dan non-statis. Properti statis dapat diakses dari metode di kelas yang sama menggunakan kata kunci mandiri dan titik dua (: :):

```php
<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

// Get static property
$pi = new pi();
echo $pi->staticValue(); // 3.14159
?>
 
```


Untuk memanggil properti statis dari kelas anak, gunakan kata kunci induk di dalam kelas anak:

```php

<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  } 
}

// Dapatkan nilai properti statistik langsung melalui kelas anak
echo x::$value;


// Dapatkan nilai properti statis melalui metode xStatic ()
$x = new x();
echo $x->xStatic(); // 3.141593.14159
?>
```
