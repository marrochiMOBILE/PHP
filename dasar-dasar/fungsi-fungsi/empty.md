# empty
Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data. Tentu sebagai sang developer akan memikirkan tingkah laku kliennya. Seperti misalnya lupa mengisikan data atau ada yang terlewatkan. Dengan perintah empty ini, akan dicek apakah datanya sudah terisi atau malah kosong. Dengan kondisi seperti itu, kita bisa meminimalisir kesalahan klien. Sehingga apabila memang datanya kosong, maka akan dimunculkan peringatan atau sebagainya.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
 
 <input type="text" name="nama" placeholder=" isi nama anda disini "> <br>

 <input type="submit" name="kirim" value=" periksa ">

</form>
</body>
</html>

<?php
 
                if (isset($_POST['kirim'])) {
 
                                if (empty($_POST['nama'])) {
 
                                                echo "Data kosong !. Harap mengulangi pengisian data.";
 
                                }
 
                                else{
 
                                                echo "Nama anda adalah : ".$_POST['nama'];
 
                                }
 
                }
 
 
 
?>
```