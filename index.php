<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <?php


    $i;
    for ($i = 0; $i < 50; $i++) 
    {
        $j = $i * 5;
        echo "<div class='square' style='background-color: rgb(${j}, ${j}, ${j})'></div>";
    }
    ?>
</body>
</html>