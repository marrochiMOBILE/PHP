# session_start
Kegunaan dari fungsi session_start(); adalah untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser. Dengan intruksi ini menunjukkan pada saat session di mulai, semua session akan diaftarkan selanjutnya akan disimpan. Penyimpanan ini terjadi sampai jangka waktu tertentu. Dan untuk membaut session berdasarkan waktu bisa Anda setting sendiri. Mudah-mudahan nanti saya buat tutorialnya dengan batas waktu session. Selain dengan batas waktu, session bisa hilang jika cookies browser Anda hilangkan. Dengan dihilangkan, maka secara otomatis session juga hilang dari browser Anda.

```php
Session_start();
```