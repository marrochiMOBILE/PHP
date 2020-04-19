# Constants

Konstanta tidak dapat diubah setelah dideklarasikan.

Konstanta kelas dapat berguna jika Anda perlu mendefinisikan beberapa data konstan dalam suatu kelas.

Konstanta kelas dideklarasikan di dalam kelas dengan kata kunci const.

Konstanta kelas peka terhadap huruf besar-kecil. Namun, disarankan untuk memberi nama konstanta dalam semua huruf besar.

Kita dapat mengakses konstanta dari luar kelas dengan menggunakan nama kelas diikuti oleh operator resolusi lingkup (: :) diikuti oleh nama konstan, seperti di sini:

```php

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting ochi";
}

echo Goodbye::LEAVING_MESSAGE;
?>

```
output:
```
Thank you for visiting ochi
```

Atau, kita dapat mengakses konstanta dari dalam kelas dengan menggunakan kata kunci mandiri diikuti oleh operator resolusi ruang lingkup (: :) diikuti oleh nama konstan, seperti di sini:

```php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting ochi!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

```

output:
```
Thank you for visiting ochi!
```
