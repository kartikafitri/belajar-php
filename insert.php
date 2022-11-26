<?php

//tangkap data dari form submit
if (isset($_POST["submit"])){
    $id_jurusan = $_POST['id_jurusan'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    //Buat koneksi dg MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    //Cek koneksi dg MySQL
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    } else{
        echo "Koneksi berhasil";
    }

    //buat sql query untuk insert ke databases
    //buat query insert dan jelaskan
    $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
            values ($id_jurusan,'$nim', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat')";

    //jalankan query
    if (mysqli_query($con,$sql)){
        echo "Data berhasil ditambahkan";
    }else{
        echo "Ada error ". mysqli_error();
    }

    mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambahkan Data</h1>
    <form action="insert.php" method="post">
        Id Jurusan: <input type="number" name="id_jurusan"><br>
        <br>NIM: <input type="text" name="nim"><br>
        <br>Nama: <input type="text" name="nama"><br>
        <br>Jenis Kelamin: <input type="text" name="jenis_kelamin"><br>
        <br>Tempat Lahir: <input type="text" name="tempat_lahir"><br>
        <br>Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tanggal_lahir"><br>
        <br>Alamat: <input type="text" name="alamat"><br>
        <br><button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html> 