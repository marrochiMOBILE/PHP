# function

Fungsi adalah blok pernyataan yang dapat digunakan berulang kali dalam suatu program.
Suatu fungsi tidak akan langsung dieksekusi ketika halaman memuat. Ini akan dieksekusi oleh panggilan ke fungsi.
Deklarasi fungsi yang ditentukan pengguna dimulai dengan fungsi kata:

```php
function functionName() {    
   //code to be executed
}
```
> Nama fungsi dapat dimulai dengan huruf atau garis bawah, tetapi tidak dengan angka atau simbol khusus.

> Nama fungsi TIDAK peka huruf besar kecil.


Pada contoh di bawah ini, kita membuat fungsi sayHello (). Kurung kurawal buka ({) menunjukkan bahwa ini adalah awal dari kode fungsi, sedangkan kurung kurawal penutupan (}) menunjukkan bahwa ini adalah akhirnya.
Untuk memanggil fungsi, cukup tulis namanya:

```php
<?php
function sayHello() {
  echo "Hello!";
}

sayHello(); //call the function

//Outputs "Hello!"
?>
```

## Function Parameters

Informasi dapat diteruskan ke fungsi melalui argumen, yang seperti variabel.
Argumen ditentukan setelah nama fungsi, dan di dalam tanda kurung.
Di sini, fungsi kami mengambil angka, mengalikannya dengan dua, dan mencetak hasilnya:

```php
<?php
function multiplyByTwo($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3);
//Outputs 6
?>
```

Anda bisa menambahkan argumen sebanyak yang Anda inginkan, asalkan dipisahkan dengan koma.

```php
<?php 
function multiply($num1, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6);
//Outputs 18
?>
```
Ketika Anda mendefinisikan suatu fungsi, variabel yang mewakili nilai-nilai yang akan diteruskan ke sana untuk diproses disebut parameter. Namun, ketika Anda menggunakan suatu fungsi, nilai yang Anda berikan kepadanya disebut argumen.

## Default Arguments
Argumen default dapat didefinisikan untuk argumen fungsi.
Pada contoh di bawah ini, kami memanggil fungsi setCounter (). Tidak ada argumen, sehingga akan mengambil nilai default yang telah ditentukan.

```php
function setCounter($num=10) {
   echo "Counter is ".$num;
}
setCounter(42);  //Counter is 42
setCounter();  //Counter is 10
```

Saat menggunakan argumen default, default apa pun harus berada di sisi kanan argumen non-default; jika tidak, semuanya tidak akan berfungsi seperti yang diharapkan.

```php
<?php
function setCounter($nama, $num=10) {
    echo "Counter is ".$num;
    echo "\n $nama";
 }
 setCounter("yudi", 32);  //Counter is 42
 setCounter("anggela");  //Counter is 10
 ?>
```

## return
Fungsi dapat mengembalikan nilai menggunakan pernyataan pengembalian.
Kembali menghentikan eksekusi fungsi, dan mengirim nilai kembali ke kode panggilan.
Sebagai contoh:

```php
<?php
function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}

echo mult(8, 3);
// Outputs 24
?>
```

Meninggalkan hasil menghasilkan nilai NULL yang dikembalikan.
Fungsi tidak dapat mengembalikan beberapa nilai, tetapi mengembalikan array akan menghasilkan hasil yang serupa.

```php
<?php
function func($arg)  {
    $result = 0;
    for($i=0; $i<$arg; $i++) {
      $result = $result + $i;
    }
    return $result;
  }
  echo func(5);
  
  /*
  > result = 0 + 0;
           > 0 + 1;
           > 1 + 2;
           > 3 + 3;
           > 6 + 4 = 10
   */
  
 ?>
```

> coba misalkan dibawah ini 
```php
function tesNUll($a = null, $b = null){
    if($a == null || $b == null){
        $hasil = 'nilai berniai null<hr>';
    }else if($a == '' ||$b == ''){
        $hasil ='nilai bernilai kosong';
    }
    else{
        $hasil = $a.'  '.$b;
    }
    return $hasil;
}

echo tesNULL('','');  // nilai berniai null
echo tesNULL('  ','  '); // bernilai space tidak ada output yg keluar
echo tesNULL('marrochi',23); // marrochi 23
```
