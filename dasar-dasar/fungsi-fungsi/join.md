# join
Fungsi ini pada prinsipnya adalah kebalikan fungsi split(), yaitu digunakan untuk
mengumpulkan kom ponen-komponen a rray m enjadi s uatu s tring. S intaksnya
adalah sebagai berikut:
join(karakter, array)
Karakter adalah karakter yang digunakan untuk “merekatkan” komponenkomponen array. 
```php
$var = array('18', '11', '2010'); 

$tanggal = join("/", $var);
echo "$tanggal"; // 18/11/2010
```