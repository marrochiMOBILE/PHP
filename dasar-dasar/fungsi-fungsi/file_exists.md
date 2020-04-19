# file_exists

Fungsi file_exists () memeriksa apakah ada file atau direktori.

Catatan: Hasil dari fungsi ini di-cache. Gunakan clearstatcache () untuk menghapus cache.

```php
<?php
    echo file_exists('fungsi-fungsi/tes.php'); // jika true satu => 1
    echo file_exists('fungsi-fungsi/tess.php'); // jika false  tidak ada atau n0
?>
```