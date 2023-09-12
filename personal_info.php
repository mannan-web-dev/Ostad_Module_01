<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Info</title>

</head>

<body>
<?php
$name = "MD Abdul Mannan";
$age = 25;
$country = "Bangladeshi";

$inroduction = "Hello , I hope you are well, my name is <strong>$name </strong>.<br> I'm over <b> $age </b> years. <br>  I am  <strong> $country</strong>.and My home district Thakurgaon . I have completed a BSc in Computer Science in China and I did a PHP with Laravel course under BASIS (SEIP) at PONDIT. I am excited to be a part of this Software developemnt and 
   am looking forward to making new friends and learning new things.<br><br> Thank you!";

//    echo $inroduction;
   ?>
<p style="width: 600px; margin-left: 200px;"><?php echo $inroduction ;?></p>
</body>

</html>