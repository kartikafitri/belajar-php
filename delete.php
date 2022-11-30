<?php

//tangkap data dari form submit
if (isset($_GET['id'])){
    $id = $_GET['id'];

    //Buat koneksi dg MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    //Cek koneksi dg MySQL
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    } else{
        echo "Koneksi berhasil ";
    }

    //buat sql query untuk insert ke databases
    //buat query delete
    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    //jalankan query
    if (mysqli_query($con,$sql)){
        echo "Data berhasil dihapus";
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
    <title>Hapus Data</title>
</head>
<body>
    <br><a href="<?php  echo "index.php"; ?>">Lihat Data Mahasiswa</a>
</body>
</html> 