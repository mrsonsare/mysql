<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<style>
    .container{
        max-width :80%;
        background-color: grey;
        margin :auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets Learn PHP</h1>
        This is container
    <?php
    $age =5;
    if($age>18){
     echo "Hello India";
    }
    elseif($age==18){
     echo "You are 18";
    }
    else{
        echo "Last condition...";
    }
 $language =array("java","python","c","c++");
   $a = 0;
   while ($a <= 3){
    echo "<br>";
   echo "The value is :";
   echo $language[$a];
   $a++;
   }

    foreach ($language as $value){
    echo "<br> the value form language array is : ";
    echo $value;
    }

    function prin(){
        echo "<br>";
        echo "Five";
    }
    
    prin();


    function prin_number($number){
    echo "<br> Your Number is ";
    echo $number;        
    }

    prin_number(45);
    ?>

    </div>
</body>
</html>