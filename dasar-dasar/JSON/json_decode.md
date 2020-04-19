# JSON decode
merubah json menjadi array


## 1

#### coba2.json
```json
[
    {
        "nama" : "marrochi",
        "umur" : 22,
        "lulus" : true,
        "hoby"  : ["gamers","bultang"],
        "pembimbing" : {
            "pembmbing1" : "eko mulyono",
            "pembimbing2" : "vairus sal sabila"
        }
    },
    {
        "nama" : "malia",
        "umur" : 20,
        "lulus" : false,
        "hoby"  : ["berenang"],
        "pembimbing" : {
            "pembmbing1" : "ajis bambang",
            "pembimbing2" : "sania"
        }
    }
]
```

####  php
```php
$data = file_get_contents('coba2.json');
$mahasiswa = json_decode($data, true);

// echo var_dump($mahasiswa);
echo $mahasiswa[0]['pembimbing']['pembmbing1']; // eko mulyono
```


