# list

Fungsi list() digunakan untuk mengambil komponen-komponen array sebagai
variabel-variabel yang terpisah. Sintaksnya adalah sebagai berikut:
List($item1, $item2, ... , $itemn) = array
Jumlah variabel $item harus sama dengan atau kurang dari jumlah komponen
yang dimiliki array. 

```php
$program = array('Bobo','Doraemon','Spiderman');
list($Majalah, $Komik, $Film) = $program;
echo "Jenis Buku & Hiburan :";
echo "<br />"; 
echo "Cerpen : $Majalah";
echo "<br />";
echo "Cerita Bergambar : $Komik";
echo "<br />";
echo "Bioskop : $Film";
```