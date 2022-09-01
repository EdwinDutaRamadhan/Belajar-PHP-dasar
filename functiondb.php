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
        $Gambar = htmlspecialchars($data["Gambar"]);

        $query = "INSERT INTO sosmed_tbl VALUES(null,'$Nama','$Jenis','$Platform','$Site','$Gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
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
        $Gambar = htmlspecialchars($data["Gambar"]);

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
?>