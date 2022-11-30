<?php
// 1. Buat koneksi dg MySQL
$con = mysqli_connect("localhost","root","","fakultas");

//2. Cek koneksi dg MySQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal ". mysqli_connect_error();
} else{
    echo "Koneksi berhasil";
}

//3. membaca data dari table mysql.
$query = "SELECT * FROM mahasiswa";

// 4. Tampilkan data, dg menjalankan sql query
$result = mysqli_query($con, $query);
$mahasiswa = [];
if ($result){
    //tampilkan data satu pper satu

    while($row = mysqli_fetch_assoc($result)){
      
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
}

//5. tutup koneksi mysql
mysqli_close($con);
//var_dump($mahasiswa);
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
    <a href="insert.php">Tambah Data</a><br>
    <br><table border="1" style="width:100%;">
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
            <td>
                <a href="<?php echo "update.php?id=".$value["id"]; ?>">Edit</a>
                 | 
                <a href="<?php echo "delete.php?id=".$value["id"]; ?>">Delete</a>
                
            </td>
            
        </tr>
        
        <?php endforeach; ?>
    </table>

</body>
</html> 