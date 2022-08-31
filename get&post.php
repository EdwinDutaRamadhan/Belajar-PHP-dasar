<?php
    //SUPERGLOBAL
    //var_dump($_SERVER);
    $socialmedia =[
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
    <ul>
        <?php foreach ($socialmedia as $sosmed) : ?>
                <li>
                    <a href="
                    userpost.php?Nama=<?=$sosmed["Nama"];?>
                    &Jenis=<?=$sosmed["Jenis"];?>
                    &Platform=<?=$sosmed["Platform"];?>
                    &Site=<?=$sosmed["Site"];?>
                    &Gambar=<?=$sosmed["Gambar"];?>"
                    >Nama    :<?= $sosmed["Nama"]; ?></a>
                </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>


