<?php

    //koneksi ke database
    $conn = mysqli_connect("localhost","root","","socialmedia_db");
    if(!$conn){
        echo mysqli_error($conn);
    }
    function query($querys){
        global $conn;
        $result = mysqli_query($conn, $querys);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;
        $Nama = htmlspecialchars($data["Nama"]);
        $Jenis = htmlspecialchars($data["Jenis"]);
        $Platform = htmlspecialchars($data["Platform"]);
        $Site = htmlspecialchars($data["Site"]);
        $Gambar = upload();
        if( !$Gambar ) {
            return false;
        }
        $query = "INSERT INTO sosmed_tbl VALUES(null,'$Nama','$Jenis','$Platform','$Site','$Gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function upload(){
        $namaFile = $_FILES['Gambar']['name'];
        $ukuranFile = $_FILES['Gambar']['size'];
        $error = $_FILES['Gambar']['error'];
        $tmpName = $_FILES['Gambar']['tmp_name'];
         if ($error == 4){
            echo"
                <script>
                    alert('Pilih gambar terlebih dahulu');
                </script>
            ";
            return false;
        } 
        $ekstensiGambarValid =['jpg','jpeg','png'];
        $ekstensiGambar = explode(".", $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
            echo"
                <script>
                    alert('Yang anda upload bukan gambar');
                </script>
            ";
            return false;
        }
        if( $ukuranFile > 2048000 ){
            echo"
                <script>
                    alert('ukuran file terlalu besar');
                </script>
            ";
            return false;
        }
        //generate nama baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM sosmed_tbl WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    function ubah($data){
        global $conn;
        $id = $data['id']; 
        $Nama = htmlspecialchars($data["Nama"]);
        $Jenis = htmlspecialchars($data["Jenis"]);
        $Platform = htmlspecialchars($data["Platform"]);
        $Site = htmlspecialchars($data["Site"]);
        $GambarLama = htmlspecialchars($data["GambarLama"]);
        //cek apakah user pilih gambar baru atau tidak
        if( $_FILES['Gambar']['error'] == 4){
            $Gambar = $GambarLama;
        }else{
            $Gambar = upload();
        }

        $query = "UPDATE sosmed_tbl SET 
                Nama = '$Nama',
                Jenis = '$Jenis',
                Platform = '$Platform',
                Site = '$Site',
                Gambar = '$Gambar'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function cari($keyword){
        $query = "SELECT * FROM sosmed_tbl
                WHERE
                Nama LIKE '%$keyword%' OR
                Jenis LIKE '%$keyword%' OR
                Platform LIKE '%$keyword%'OR
                Site LIKE '%$keyword%'
                ";
        return query($query);
    }
?>