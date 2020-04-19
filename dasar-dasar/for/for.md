# for

Loop for digunakan ketika Anda tahu sebelumnya berapa kali skrip harus dijalankan.

```php
for (init; test; increment) {
   code to be executed;
}
```
#### Parameter:
1. init: Inisialisasi nilai penghitung loop
1. tes: Mengevaluasi setiap kali loop iterasi, melanjutkan jika 1. 1. 1. mengevaluasi ke true, dan berakhir jika itu mengevaluasi ke false
1. increment: Meningkatkan nilai loop counter

```
Setiap ekspresi parameter dapat kosong atau berisi banyak ekspresi yang dipisahkan dengan koma.
Dalam pernyataan for, parameter dipisahkan dengan titik koma.
```

```php
<?php
for ($a = 0; $a < 6; $a++) {
    echo "Value of a : ". $a . "<br />";
 }
 /*
Value of a : 0
Value of a : 1
Value of a : 2
Value of a : 3
Value of a : 4
Value of a : 5
 */
?>
```


Untuk loop pada contoh di atas pertama-tama menetapkan variabel $ a ke 0, kemudian memeriksa kondisinya ($ a <6). Jika kondisinya benar, ia menjalankan kodenya. Setelah itu, ia menambah $ a ($ a ++)



