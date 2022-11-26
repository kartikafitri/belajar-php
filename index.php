<?php
// 1. Buat koneksi dg MySQL
$con = mysqli_connect("localhost","root","","fakultas");

    echo "Hello Wordl! <br>";
//2. Cek koneksi dg MySQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal ". mysqli_connect_error();
} else{
    echo "Koneksi berhasil";
}

    $nama = "Kartika";
    $umur = 21;
//3. membaca data dari table mysql.
$query = "SELECT * FROM mahasiswa";

    echo "Nama saya <strong>$nama,</strong> umur saya $umur tahun <br>";
// 4. Tampilkan data, dg menjalankan sql query
$result = mysqli_query($con, $query);
$mahasiswa = [];
if ($result){
    //tampilkan data satu pper satu

    $namaAdik = "Diaz";
    $umurAdik = 18;
    while($row = mysqli_fetch_assoc($result)){

        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
}

    echo "Nama adik saya <strong>$namaAdik,</strong> dia berusia $umurAdik tahun <br>";
    
    $selisihumur = $umur - $umurAdik;
    $jumlahumur = $umur + $umurAdik;
//5. tutup koneksi mysql
mysqli_close($con);
//var_dump($mahasiswa);
?>

    echo "<strong>Selisih</strong> umur saya dan umur adik saya adalah $selisihumur tahun <br>";
    echo "<strong>Jumlah</strong> umur saya dan umur adik saya adalah $jumlahumur tahun <br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
        <tr>
            <th>Id Jurusan</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value["id_jurusan"]; ?></td>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
            <td><?php echo $value["jenis_kelamin"]; ?></td>
            <td><?php echo $value["tempat_lahir"]; ?></td>
            <td><?php echo $value["tanggal_lahir"]; ?></td>
            <td><?php echo $value["alamat"]; ?></td>

        </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>  