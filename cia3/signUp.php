<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'database.php';   
    
    $username = $_POST["username"];
    $email = $_POST["email"];  
    $password = $_POST["password"];
    $cpassword = $_POST["password2"]; 
    $phone = $_POST["phone"];

            
    
    $sql = "Select * from postUp where name='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
           /* $hash = password_hash($password, 
                                PASSWORD_DEFAULT);*/
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO postUp(name, email, password,phone) VALUES ('$username','$email','$password','$phone')";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Invalid entry"; 
   } 
    
}//end if   
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    <?php include "style/style.css"?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="signUp_body">
<?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <span aria-hidden="true"><a href="index.php" class = "slog_btn"> log in</a></span> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       
            <span aria-hidden="true"><a href="signUp.php" class = "log_btn">X</a></span> 
       
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
            <span aria-hidden="true"><a href="signUp.php" class = "log_btn">X</a></span> 
       </div> '; 
     }
   
?>
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: beige;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h1 class="main_head"> Post Up</h1>
            </div>
        </div>
    </nav>
    <!--sign up Form-->
    <form class="logInForm" id="form" method="post" name="myform" onsubmit="return validateform()"
        action="">
        <!--Full name-->
        <div class="mb">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="username" id="name" aria-describedby="emailHelp">
        </div>
        <!--mail-->
        <div class="mb">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!--password-->
        <div class="mb">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="Password1">
        </div>
        <!--confirm password-->
        <div class="mb">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password2" id="Password2">
        </div>
        <!--Phone Number-->
        <div class="mb">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="ph_number" aria-describedby="emailHelp">
        </div>
        <div id="emailHelp" class="form-text">already registered?<a href="index.php"> log in</a></div>
        <!--Submit-->
        <button type="submit" class="btnn" name="signUp">Submit</button>
        <button type="reset" class="btnn">Reset</button>
    </form>
</body>
<!-- JavaScript Bundle with Popper -->
<script>
< ? php include " script/script.js " ? >
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>