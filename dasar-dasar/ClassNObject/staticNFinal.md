# static dan final


Kata kunci statis PHP mendefinisikan properti statis dan metode statis.
Properti statis / metode kelas dapat diakses tanpa membuat objek kelas itu.

Properti atau metode statis diakses dengan menggunakan operator resolusi lingkup :: antara nama kelas dan nama properti / metode.

Sebagai contoh:

```php
<?php
class myClass {
   static $myStaticProperty = 42;
}

echo myClass::$myStaticProperty;
?>
```


Kata kunci mandiri diperlukan untuk mengakses properti statis dari metode statis dalam definisi kelas.

```php
<?php
class myClass {
  static $myProperty = 42;
  static function myMethod() {
    echo self::$myProperty;
  }
}

myClass::myMethod(); // 42
echo myClass::$myProperty; // 42
?>
```

> Objek kelas tidak dapat mengakses properti statis di kelas tetapi mereka dapat mengakses metode statis.

## The final Keyword

Kata kunci akhir PHP mendefinisikan metode yang tidak dapat ditimpa dalam kelas anak. Kelas yang ditentukan final tidak dapat diwarisi.

Contoh ini menunjukkan bahwa metode terakhir tidak dapat ditimpa dalam kelas anak:

```php
<?php
class myClass {
    final function myFunction() {
        echo "Parent";
    }
}
// ERROR because a final method cannot be overridden in child classes.
class myClass2 extends myClass {
    function myFunction() {
        echo "Child";
    }
}
?>
```

Kode berikut menunjukkan bahwa kelas akhir tidak dapat diwarisi:

```php
<?php
final class myFinalClass {
}

// ERROR because a final class cannot be inherited.
class myClass extends myFinalClass {
}
?>
```

