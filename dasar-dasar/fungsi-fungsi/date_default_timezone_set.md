# date_default_timezone_set

Ketika membuat aplikasi menggunakan PHP, kita pasti akan mengalami perbedaan waktu antara komputer server dengan waktu yang digenerate oleh php, terutama ketika menjalankan fungsi terkait waktu seperti date(). Hal ini dikarenakan perbedaan penggunaan timezone (zona waktu)

> untuk waktu indonesia
```php
date_default_timezone_set("Asia/Bangkok");
```