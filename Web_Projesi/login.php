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
    <title>Giriş Ekranı</title>
</head>
<body style="background-color: rgb(220, 223, 168);">
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Giriş Ekranı</h2>
        <label for="inputUsername" class="sr-only">Mail</label>
        <input name="Username" type="email" id="inputUsername" class="form-control" placeholder="Mail" required autofocus>
        <label for="inputPassword" class="sr-only">Şifre </label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="şifre" required>
        
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit" style="color: rgb(19, 34, 34); background-color: azure;">Giriş</button>

        <?php

        /* Check if login form has been submitted */
        if(isset($_POST['Submit'])){

            /* Check if form's username and password matches */
            if( ($_POST['Username'] == "g181210376@ogr.sakarya.edu.tr") && ($_POST['Password'] == "irfanAskinKilic") ) {

                /* Success: Set session variables and redirect to protected page */
                $_SESSION['Username'] = $_POST['Username'];

                $_SESSION['Active'] = true;
                header("Location: hakkimda.php");
                exit;
                
                

            } else {
                ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Uyarı!</strong> Yanlış kullanıcı adı veya şifre
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
