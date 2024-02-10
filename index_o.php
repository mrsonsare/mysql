<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is MY First PHP WEBSIT
 
<?php 
        define('pi',3.14);

        $vari = 5 ;
        $vari2 = 64;
        echo "<br>";
        echo "The value of addition is : ";
        echo $vari + $vari2 ;
        echo "<br>";
        ECHO $vari - $vari2;
        echo "<br>";
        echo $vari * $vari2;
        echo "<br>";
        echo "<h1>Hiii</h1>";

        echo $vari++;
        echo "<br>";
        echo $vari--;
        echo "<br>";
        echo ++$vari;
        echo "<br>";
        echo --$vari;

       echo "<br>";
        echo var_dump($vari);
        echo "<br>";
        echo pi;
        ?>
    </div>
</body>
</html>