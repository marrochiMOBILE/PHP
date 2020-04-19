# JSON encode
merubah array jadi json

### 1
```php
function json_go($json){
        return json_encode($json);
}
$mahasiswa = [
        "nama" => "marrochi",
        "nim" => 171011400286,
        "aktif" => true
];

$json_encode = json_encode($mahasiswa);
echo $json_encode;
```

output : 
```json
{
nama: "marrochi",
nim: 171011400286,
aktif: true
}
```


### 2
```php
function json_go($json){
        return json_encode($json);
}
$mahasiswa = [
        [
                "nama" => "marrochi",
                "nim" => 171011400286,
                "aktif" => true
        ],
        [
                "nama" => "ayu",
                "nim" => 171011400682,
                "aktif" => true
        ],
];

$json_encode = json_encode($mahasiswa);
echo $json_encode;
```

output :
```json
[
{
nama: "marrochi",
nim: 171011400286,
aktif: true
},
{
nama: "ayu",
nim: 171011400682,
aktif: true
}
]
```

### 3
```php
function json_go($json){
        return json_encode($json);
}

$dbh = new PDO('mysql:host=localhost;dbname=db_json','root','');
$db = $dbh->prepare("select * from mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

echo json_go($mahasiswa);
// $arrayJson = json_go($mahasiswa);
```

output:
```json
[
{
mahasiswa_id: "1",
mahasiswa_name: "marrochi",
mahasiswa_nim: "111212",
mahasiswa_lulus: "1"
},
{
mahasiswa_id: "2",
mahasiswa_name: "malia",
mahasiswa_nim: "111211",
mahasiswa_lulus: "0"
},
{
mahasiswa_id: "3",
mahasiswa_name: "kamila",
mahasiswa_nim: "111812",
mahasiswa_lulus: "1"
},
{
mahasiswa_id: "4",
mahasiswa_name: "badriah",
mahasiswa_nim: "119211",
mahasiswa_lulus: "0"
}
]
```