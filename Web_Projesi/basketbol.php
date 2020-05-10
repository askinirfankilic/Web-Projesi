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
      <li class="nav-item">
        <a class="nav-link" href="hakkimda.php" style="font-family: fantasy;">Hakkımda </a>
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
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
		  <h1>Pınar Karşıyaka</h1>
            <p class="lead">Pınar Karşıyaka, Karşıyaka Spor Kulübü'nün basketbol takımıdır. Yaşar Holding'e bağlı gıda şirketi olan Pınar, Karşıyaka basketbol şubesinin sponsorudur. Tenis, yelken, yüzme gibi amatör branşların ardından ilgi çekmeye başlayan basketbol şubesi 1950'lerden itibaren faaliyetlerine başlamıştır.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/karsiyaka.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

       
        <hr class="featurette-divider">

      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>