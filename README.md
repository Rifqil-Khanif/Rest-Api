# Rest-Api
masih tahap penyempurnaan
##
> **Note**:  [Silahkan cek hasilnya disini]([https://api.zeeoneofc.my.id/users/login](https://datatest.up.railway.app/)) 

## Edit Config Untuk Menyambungkan Server Database

<details>
    <summary> <b>Edit koneksi.php</b></summary><br/>

```ts
<?php
$host = "containers-us-west-56.railway.app";
$user = "root";
$password = "e1nj5D50lj6wpRDRpNwF";
$database = "railway";
$port = "7020";

$db = mysqli_connect($host, $user, $password, $database, $port);
?>
```



