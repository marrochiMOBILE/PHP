# Static Methods

Metode statis dapat dipanggil langsung - tanpa membuat turunan kelas.

Metode statis dideklarasikan dengan kata kunci statis:

```php
<?php
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
?>
```


Untuk mengakses metode statis, gunakan nama kelas, usus besar ganda (: :), dan nama metode:
> ClassName::staticMethod();

Mari kita lihat sebuah contoh:

```php
<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>
```

output:
```
Hello World!
```


Contoh Dijelaskan
Di sini, kami mendeklarasikan metode statis: welcome (). Kemudian, kita memanggil metode statis dengan menggunakan nama kelas, usus besar ganda (: :), dan nama metode (tanpa membuat kelas terlebih dahulu).

## More on Static Methods

Kelas dapat memiliki metode statis dan non-statis. Metode statis dapat diakses dari metode di kelas yang sama menggunakan kata kunci mandiri dan titik dua (: :):

```php
<?php
class greeting {
	public static function welcome() {
		echo "Hello World!";
	}
	public function __construct() {
		self::welcome();
	}
}

new greeting();
?>
```

output:
```
Hello World!
```

Metode statis juga dapat dipanggil dari metode di kelas lain. Untuk melakukan ini, metode statis harus publik:
```php

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

$ochi = new SomeOtherClass();
$ochi->message();  // Hello World!
?>
```


Untuk memanggil metode statis dari kelas anak, gunakan kata kunci induk di dalam kelas anak. Di sini, metode statis dapat bersifat publik atau dilindungi.

```php
<?php
class domain {
	protected static function getWebsiteName() {
		return "ochi.com";
	}
}

class domainW3 extends domain {
	public $websiteName;
	public function __construct() {
		$this -> websiteName = parent::getWebsiteName();
	}	
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName; // ochi.com
?>
```





