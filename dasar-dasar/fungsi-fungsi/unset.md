# unset 
Adalah fungsi PHP yang berguna untuk menghapus sebuah variabel.

```php
<?php
$nama='Fahmi Basya Kartapura';

unset($nama);


 
echo $nama; // variabel undifined atau tidak terdeteksi

?>
```
bisa jugha Untuk menghapus data session, Anda bisa menggunakan konstruksi bahasa unset() atau fungsi session_destroy().

> unset($_SESSION['test']);

