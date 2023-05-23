<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO siswa (nis, nama, jk, kelas)
           VALUES  ('$nis', '$nama', '$jk', '$kelas')";
    require_once('koneksi.php');
    if (mysqli_query($con, $sql)) {
        echo 'Berhasil Menambahkan Siswa';
    } else {
        echo 'Gagal Menambahkan Siswa';
    }
    mysqli_close($con);
}
?>
