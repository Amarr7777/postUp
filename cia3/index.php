<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include "style/style.css" ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="signUp_body">
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: beige;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h1 class="main_head"> Post Up</h1>
            </div>
        </div>
    </nav>
    <!--log in form-->
    <form class="signUpForm" action="validate.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Email address</label>
            <input type="email" class="form-control" id="logInMailId" aria-describedby="emailHelp" name="email" required
                autofocus>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="logInPassword" name="password" required>
        </div>
        <div id="emailHelp" class="form-text">Haven't registered?<a href="signUp.php"> register</a></div>
        <button type="submit" class="btnn" name="login">login</button>
    </form>
</body>
<!-- JavaScript Bundle with Popper -->
<script><?php include " script / script.js " ?></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>