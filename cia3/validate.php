<?php
include('database.php');
$email = $_POST["email"];
$password = $_POST["password"];

//to prevent from mysqli injection  
$email = stripcslashes($email);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * from postUp where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$exists="Invalid entry";

if ($count == 1) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:home.php");
} else {
    echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> ' . $exists . '
    
       
            <span aria-hidden="true"><a href="index.php" class = "log_btn">X</a></span> 
       
     </div> ';
}
?>