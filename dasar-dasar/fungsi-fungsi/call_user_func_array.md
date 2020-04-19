# call_user_func_array
call_user_func_array adalah salah satu function bawaan php yang berfungsi untuk membuat satuan array menjadi paramater/argumen dari sebuah function.
```php
<?php
function data_siswa($nama,$alamat){
    echo "nama siswa adalah $nama dan alamatnya adalah $alamat";
}
$siswa = ['Tegar Santosa', 'Jalan Pala No. 5']; //Array
call_user_func_array("data_siswa", $siswa) // nama siswa adalah Tegar Santosa dan alamatnya adalah Jalan Pala No. 5
?>
```