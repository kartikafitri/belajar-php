<?php

$nama = "Kartika"; 

// PENGULANGAN YANG MENGHABISKAN MEMORI --------------------
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

// PENGULANGAN 1 --------------------
/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

// PENGULANGAN 2 --------------------
/* 
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

// PENGULANGAN 3 --------------------
/* 
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

// PENGULANGAN 4 --------------------
// $data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

// untuk menampilkan data spesifik 
// echo $data[5];

/* 
foreach($data as $value) {
    echo $value."<br>";
}
*/ 

// PENGULANGAN 5 --------------------
/* 
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

for ($i=0; $i<count($data); $i++) {
    echo $data[$i]."<br/>";
}
*/

// PENGULANGAN 6 --------------------
/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

$i = 0;
while ($i < count ($data)) {
    echo $data[$i]."<br/>";
    $i++;
}
*/ 

// PERCABANGAN 1 --------------------
/*
if ($nama == "Kartika") {
    echo $nama." adalah orang Jawa";
} else if ($nama == "Made") {
    echo $nama." berasal dari Pulau Bali";
} else {
    echo $nama." darimana yaa?";
}
*/ 

// PERCABANGAN 2 --------------------
/* 
switch($nama) {
    case "Kartika";
        $pesan = $nama." adalah orang Jawa";
    break;
    case "Made";
        $pesan = $nama." berasal dari Pulau Bali";
    break;
    default;
    $pesan = $nama." darimana yaa?";
}

echo $pesan;
*/

?> 

<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0"> 
    <title>Input Nama</title> 
</head>
<body> 
    <h1>Input Nama Diulang dan Jumlah</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Nama</label>
    <input type="text" name="nama"> 
    <label>Jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="submit">
</form>
<?php 
     if(!empty($_POST['submit'])) {
        switch($_POST['nama']) { 
            case "Kartika";
               $pesan = $_POST['nama']." adalah orang Jawa";
            break;
            case "Made";
               $pesan = $_POST['nama']." berasal dari Pulau bali";
            break;
            default;
               $pesan = $_POST['nama']."darimana yaa?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br/>";
        }
    
    } else { 
        echo "Anda belum input nama dan jumlah";
    }
    ?>

</body>
</html>  





