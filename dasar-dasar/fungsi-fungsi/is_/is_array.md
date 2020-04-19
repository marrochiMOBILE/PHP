# is_array
Fungsi is_array() digunakan untuk memeriksa apakah sebuah variabel merupakan
array atau buka n. Jika sebuah variabel merupakan array, fungsi ini a kan
menghasilkan nilai true dan jika buka n array akan menghasilkan nilai false.
Sintaksnya adalah sebagai berikut:
***Is_array(variabel)***

```php
$var = array(1,2,3,4,5,6,7);
$scan = is_array($var);
if ($scan == false) {
 $status = "bukan";
} else {
 $status = "";
}
echo "\$var = array(1,2,3,4,5,6,7)";
echo "<br>";
echo "Variabel \$var $status merupakan array";
```