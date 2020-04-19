# in_array
``` in_array(search, array, type)```

>Search : merupakan sebuah keyword atau kata kunci yang akan kita cari dan nilai tersebut bernilai wajib
>Array : merupakan nilai yang akan kita bandingkan dengan nilai yang kita cari, yaitu nilai search. dan nilai tersebut bernilai wajib
>Type : merupakan fungsi pencarian untuk string yang di cari dan jenis tertentu dalam array dan nilai tersebut bernilai pilihan, boleh kita gunakan ataupun tidak.

```php
	$dumet = array("Depok", "Grogol", "Tebet");
	if(in_array("Depok", $dumet)){
		echo "Lokasi ditemukan"; // keluar
	} else {
		echo "Lokasi tidak di temukan";
	}
```

```php
$nama = array("Irwan", "Andi", "Bani", "Rizal", 50);
if (in_array("50", $nama, TRUE)){
    echo "Data ditemukan<br>";
} else{
    echo "Data tidak di temukan<br>"; // keluar
}

$nama2 = array("Irwan", "Andi", "Bani", "Rizal", 50);
if (in_array("50", $nama2)){
    echo "Data ditemukan<br>";//  keluar
} else{
    echo "Data tidak di temukan<br>"; 
}
```