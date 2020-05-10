  <?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
	  exit;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body style= "background-color: darkgrey;">
  <!-- yukariki kısım -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="ozgecmis.php" style="font-family: fantasy;">Özgeçmiş</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sehrim.php" style="font-family: fantasy;">Şehrim</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="hakkimda.php" style="font-family: fantasy;">Hakkımda <span class="sr-only">(current)</span></a>
      </li>
      
	  
      <li class="nav-item dropdown"></li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: fantasy;">
          Mirasımız
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="futbol.php" style="font-family: fantasy;" >Futbol</a>
          <a class="dropdown-item" href="basketbol.php" style="font-family: fantasy;" >Basketbol</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="anit.php" style="font-family: fantasy;" >Anıtlarımız</a>
		  <a class="dropdown-item" href="eser.php" style="font-family: fantasy;" >Eserlerimiz</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iletisim.php"  style="font-family: fantasy;" >İletişim</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	  <p class="text-light">Hoşgeldin : <?php
	  $productName = $_SESSION['Username'];
	  $arr = explode('@',$productName);
      echo $arr[0];
	  ?>&nbsp;</p>
      <p><a class="btn btn-lg btn-success" style= "background-color: darkcyan;" href="logout.php" role="button">Log out</a></p>
    </form>
  </div>
</nav>


	  <br>
	  <!-- hakkında kısmı-->
      <div class="container marketing">

        <div class="row" >
          <div class="w3-card-4" >
            <img class="w3-border w3-padding" src="img/profil.jpg" alt="Generic placeholder image" width="140" height="140" >
            <h2>Nelerle İlgileniyorum?</h2>
            <p >Bilgisayar mühendisliği öğrencisiyim. Bişeyleri incelemekten keyif alıyorum genel olarak.</p>
          </div>
         
          
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>