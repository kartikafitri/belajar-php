<?php

if (isset($_GET['id'])){
    //ambil id dari url/method get
    $id = $_GET['id'];

    // 1. Buat koneksi dg MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    //2. Cek koneksi dg MySQL
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    }else{
        echo "Koneksi berhasil ";
    }

    //3. membaca data dari table mysql.
    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    // 4. Tampilkan data, dg menjalankan sql query
    $result = mysqli_query($con, $query);
    $mahasiswa = [];
    if ($result){
        //tampilkan data satu pper satu
        while($row = mysqli_fetch_assoc($result)){
            $mahasiswa = $row;
        }
        mysqli_free_result($result);
    }

    //5. tutup koneksi mysql
    mysqli_close($con);
}

//tangkap data dari form submit
if (isset($_POST['submit'])){
    $id_jurusan = $_POST['id_jurusan'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    //Buat koneksi dg MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    //Cek koneksi dg MySQL
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    } else{
        echo "Koneksi berhasil ";
    }

    //buat sql query untuk insert ke databases
    //buat query insert dan jelaskan
    $sql = "UPDATE mahasiswa SET id_jurusan='$id_jurusan',nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',
    tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id=$id ";

    //jalankan query
    if (mysqli_query($con,$sql)){
        echo "Data berhasil diubah";
    }else{
        echo "Ada error ". mysqli_error($con);
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
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <?php //var_dump ($mahasiswa); ?>
    <form action="update.php" method="post">
        Id Jurusan: <input type="number" name="id_jurusan" value="<?php echo $mahasiswa['id_jurusan']; ?>"><br>
        <br>NIM: <input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>"><br>
        <br>Nama: <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>"><br>
        <br>Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $mahasiswa['jenis_kelamin']; ?>"><br>
        <br>Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $mahasiswa['tempat_lahir']; ?>"><br>
        <br>Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tanggal_lahir" value="<?php echo $mahasiswa['tanggal_lahir']; ?>"><br>
        <br>Alamat: <input type="text" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>"><br>
        <input type="number" name="id" value="<?php echo $mahasiswa['id'] ?>" hidden>
        <br><button type="submit" name="submit">Ubah Data</button>
        <a href="<?php  echo "index.php"; ?>">Lihat Data Mahasiswa</a>
    </form>
</body>
</html> 