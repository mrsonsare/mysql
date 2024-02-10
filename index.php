<?php
if(isset($_POST['submit'])){

$server = "localhost"; // Corrected typo
$username = "root";
$password = "";
$database_name = "darkknight"; // Corrected variable name

$conn = mysqli_connect($server, $username, $password, $database_name); // Corrected variable name

if (!$conn) {
    die("Connection FAILED due to " . mysqli_connect_error()); // Corrected function name
} else {
    echo "SUCCESS connecting to MYSQL";
}

$name =$_POST['name'];
$gender =$_POST['gender'];
$age =$_POST['age'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];


$sql = "INSERT INTO `dark`.`dark` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

mysqli_query($conn,$sql);

echo $sql;

if($conn->query($sql) == true){
    echo "<br> SUCCESS";

}
else{
    echo "failed $sql <br> $conn->error";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="style.css">
</head>
<body>
   
    <img class="pce" src="bag1.jpg" alt="PCE NAGPUR" srcset="">
    <div class="container">
       <center> <h1>Welcome to Priydarshini Collage Of Engineering</h1>
        <p><h3><br>Enter the Details For Participation</h3></p>
        
        <br><p class="submitmsg"><h3>Thanks For Submitting the Form </h3> </p>
        
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your Name ">

        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="phone" name="phone" id="phone" placeholder="Enter the phone Number ">
    <center>  <textarea  name="desc" id="desc" cols="30" rows="10" placeholder="Enter the Other Imformation Here ">
    </textarea>    </center>
    
    <button type="button" name="submit" value="send data">Submit</button>
    
     </form>   
    </center>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `dark` (`sr.no`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1', 'harshal', '18', 'male', 'harshalsonsare18@gmail.com', '8329132249', 'hello my friend', current_timestamp()); -->
</body>
</html>

