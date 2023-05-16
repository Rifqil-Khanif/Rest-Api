<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <center>
        <h1>TAMPIL DATA</h1>
        <a href="index.php"><button>KEMBALI</button></a>
    </center>
 
    <h2>TABEL KOMENTAR</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Id Post</th>
            <th>Komentar</th>
            <th>Opsi</th>
        </tr>
        <?php
        include('koneksi.php');
        $sql = "SELECT * FROM komentar";
        $query = mysqli_query($db, $sql);

        while($view = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$view['id']."</td>";
            echo "<td>".$view['id_post']."</td>";
            echo "<td>".$view['komentar']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$view['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$view['id']."'>Hapus</a>";
            echo "</td>";
            
            echo "</tr>";
        }
        ?>
    </table>

    <h2>TABEL POST</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Id Kategori</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Opsi</th>
        </tr>
        <?php
        include('koneksi.php');
        $sql = "SELECT * FROM post";
        $query = mysqli_query($db, $sql);

        while($view = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$view['id']."</td>";
            echo "<td>".$view['id_kategori']."</td>";
            echo "<td>".$view['judul']."</td>";
            echo "<td>".$view['isi']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$view['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$view['id']."'>Hapus</a>";
            echo "</td>";
            
            echo "</tr>";
        }
        ?>
    </table>
 
    <h2>TABEL KATEGORI</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Kategori</th>
            <th>Opsi</th>
        </tr>
        <?php
        include('koneksi.php');
        $sql = "SELECT * FROM kategori";
        $query = mysqli_query($db, $sql);

        while($view = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$view['id']."</td>";
            echo "<td>".$view['kategori']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$view['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$view['id']."'>Hapus</a>";
            echo "</td>";
            
            echo "</tr>";
        }
        ?>
    </table>
   
</body>
</html>