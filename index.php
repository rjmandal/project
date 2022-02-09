
<?php
$insert= false;
if(isset($_POST['name'])){
$server ="localhost";
$username ="root";
$password ="";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("error" . mysqli_connect_error());
}
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
   $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());" ;

if($con->query($sql) == true){
       $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>
<!-- *****************************************html*********************************************************** -->
<!-- ******************************************************************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>welcome to IIT travel form</h1>
        <P>enter your information and submit your to conform your participation in the trip</P>
        <?php
        if($insert==true){
        echo "
        <p class='submitMsg'>thanks for submitting
        </p>";
        }
        ?>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="text" name="age" id="age" placeholder="enter your age">
        <input type="text" name="gender" id="gender" placeholder="enter your sex">
        <input type="email" name="email" id="email" placeholder="enter your email">
        <input type="phone" name="phone" id="phone" placeholder="enter your phone no">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
    <button class="btn">submit</button>
    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>