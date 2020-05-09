<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/signin.css">
    <title>Giriş Yap</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Lütfen Giriş Yapınız</h2>
        <label for="inputUsername" class="sr-only">Mail</label>
        <input name="Username" type="email" id="inputUsername" class="form-control" placeholder="Mail" required autofocus>
        <label for="inputPassword" class="sr-only">Şifre </label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="şifre" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Beni hatırla
            </label>
        </div>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>

        <?php

        /* Check if login form has been submitted */
        if(isset($_POST['Submit'])){

            /* Check if form's username and password matches */
            if( ($_POST['Username'] == "admin@gmail.com") && ($_POST['Password'] == "123") ) {

                /* Success: Set session variables and redirect to protected page */
                $_SESSION['Username'] = $_POST['Username'];

                $_SESSION['Active'] = true;
                header("location:hakkimda.php");
                exit;

            } else {
                ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Uyarı!</strong> Doğru bilgi giriniz.
                </div>
                <?php
            }
        }
        ?>

    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
