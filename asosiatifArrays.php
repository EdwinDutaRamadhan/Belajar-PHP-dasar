<?php
    // $mahasiswa = [
    //     ["Edwin", "672020272", "Teknik Informatika", "edwinduta@gmail.com"],
    //     ["Darwin", "672020900", "Teknik Informatika", "darwin@gmail.com"]
    // ];
    $mahasiswa =[
        [
            "Nama" => "Instagram",
            "Jenis" => "Sosial Media App",
            "Platform" => "Mobile, Web, Deskotop",
            "Site" => "www.instagram.com",
            "Gambar" => "Instagram.png"
        ],
        [
            "Nama" => "Whatsapp",
            "Jenis" => "Chat App",
            "Platform" => "Mobile, Desktop, Web",
            "Site" => "www.whatsapp.com",
            "Gambar" => "Whatsapp.png"
        ],
        [
            "Nama" => "Pinterest",
            "Jenis" => "Image App",
            "Platform" => "Mobile, Desktop, Web",
            "Site" => "www.pinterest.com",
            "Gambar" => "Pinterest.png"
        ],
        [
            "Nama" => "Tiktok",
            "Jenis" => "Video App",
            "Platform" => "Mobile",
            "Site" => "www.tiktok.com",
            "Gambar" => "Tiktok.png"
        ],
        [
            "Nama" => "Zoom",
            "Jenis" => "Video Meet App",
            "Platform" => "Deskotop, Mobile",
            "Site" => "www.zoom.com",
            "Gambar" => "Zoom.png"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asosiatif arrays</title>
</head>
<body>
    <h1>Daftar Sosial Media</h1>
    
        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["Gambar"]; ?>" alt="not supported">
                </li>
                <li>Nama    :<?= $mhs["Nama"]; ?></li>
                <li>NIM     :<?= $mhs["Jenis"]; ?></li>
                <li>Progdi     :<?= $mhs["Platform"]; ?></li>
                <li>Email     :<?= $mhs["Site"]; ?></li>
            </ul>
        <?php endforeach; ?>
</body>
</html>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       .kotak{
        width: 50px;
        height: 50px;
        background-color: lightblue;
        text-align : center;
        line-height :50px;
        margin : 3px;
        float : left;
        transition:1.5s;
       }
       .kotak:hover {
        transform:rotate(360deg);
        border-radius: 50%;
       }
       .clear{ clear: both; }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        $numbers =[
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>
    <?php foreach($numbers as $number) : ?>
        <?php foreach($number as $num) :?>
            <div class="kotak"> <?= $num;?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html> -->