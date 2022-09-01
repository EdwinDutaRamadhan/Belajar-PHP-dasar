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
?>