# session_id

Session ID nomor unik yang diberikan server situs Web untuk pengguna tertentu selama durasi kunjungan (session). ID sesi dapat disimpan sebagai cookie, form field, atau URL (Uniform Resource Locator).

Beberapa server Web menghasilkan ID sesi dengan hanya menambah angka statis. Namun, sebagian besar server menggunakan algoritme yang melibatkan metode yang lebih kompleks, seperti memfaktorkan dalam tanggal dan waktu kunjungan bersama dengan  variables yang ditentukan oleh administrator server.

Setiap kali pengguna Internet mengunjungi situs Web, session ID baru ditetapkan. Menutup browser dan kemudian membuka kembali dan mengunjungi situs itu lagi menghasilkan ID sesi baru. Namun, ID sesi yang sama terkadang dipertahankan selama web browser terbuka, meskipun pengguna meninggalkan situs dan kembali lagi. Dalam beberapa kasus, server Web mengakhiri sesi dan menetapkan ID sesi baru setelah beberapa menit tidak aktif.

Session IDs, dalam bentuk konvensionalnya, tidak menawarkan penjelajahan Web yang aman. Black-hat hacker yang bertalenta dapat memperoleh session ID (sebuah proses yang dinamakan session prediction), kemudian menyamar sebagai pengguna yang sah, bentuk serangan ini dikenal sebagai session hijacking.

```php
<?php
 
 session_start();    
 echo session_id();
?>
```