<?php
    //array
    // $day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    // // var_dump($day);
    // // echo "<br>";
    // // print_r($day);
    // echo $day[6];
    // $day[0] = "Senin";
    // echo $day[0];

    $numbers =[1,5,7,2,3,8,10,19,22];


?>
<!DOCTYPE html>
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

       }
       .clear{ clear: both; }
    </style>
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($numbers); $i++) : ?>
    <div class="kotak"><?php  echo $numbers[$i]; ?></div>
    <?php endfor;?>

    <div class="clear"></div>
    <?php foreach ($numbers as $number) : ?>
        <div class="kotak"><?= $number; ?></div>
    <?php endforeach; ?>
</body>
</html>