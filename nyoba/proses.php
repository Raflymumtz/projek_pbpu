<?php
    //membuat koneksi
    $con = mysqli_connect("localhost", "root", "", "latihan");

    
    //memasukkan data ke array
        $nama       = $_POST['nama'];
        $jk         = $_POST['jk'];
        $alamat     = $_POST['alamat'];
        $jurusan    = $_POST['jurusan'];

        $total = count($nama);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into mahasiswa set
            nama    = '$nama[$i]',
            jk      = '$jk[$i]',
            alamat  = '$alamat[$i]',
            jurusan = '$jurusan[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: index.php");