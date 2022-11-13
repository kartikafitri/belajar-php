<?php
if (issert($_GET['p'])) {
    // STANDAR
    if ($_GET['p'] == 'tampil') {

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    // ADA PESANNYA
    } else if ($_GET['p'] == "pesan"){
        echo "Halo apa kabar ".$_POST['nama'];
        echo "<br/>";
        echo "password anda adalah ".$_POST['password'];
    
    // TAMBAHAN ERROR
    } else if ($_GET['p'] == "aman"){
        
        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "nama belum dimasukkan";
        }

        echo "<br/">;

        if (!empty( $_POST['password'])){
            echo $_POST['password'];
        } else {
            echo "password masih kosong";
        }
    
        // TAMPIL GAMBAR
    } else if ($_GET['p'] == "gambar"){ // tampil gambar
        $size = getimagesize($_FILE['berkas']['tmp_name']); // mengambil size
        $image = "data:".$size['mime'].";baseg4,".
                 base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); // menampilkan gambar
        
        echo "<image src='".$image."' width='720'>";
    }

} else {
    echo "Anda tidak boleh mengakses halaman ini";
} 