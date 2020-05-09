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

    <title>Oğuz Kağan Güzel</title>
  </head>
  <body>
  <!-- yukariki kısım -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="hakkimda.php">Hakkımda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="sehrim.php">Şehrim</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mirasımız
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="futbol.php">Futbol</a>
          <a class="dropdown-item" href="basketbol.php">Basketbol</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="anit.php">Anıtlarımız</a>
		  <a class="dropdown-item" href="eser.php">Eserlerimiz</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iletisim.php">İletişim</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	  <p class="text-light">Hoşgeldin : <?php
	  $productName = $_SESSION['Username'];
	  $arr = explode('@',$productName);
      echo $arr[0];
	  ?>&nbsp;</p>
      <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
    </form>
  </div>
</nav>


	  <br>
	  <!-- hakkında kısmı-->
      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Felsefe</h2>
            <p> Antik Yunan Felsefesi en çok vakit ayırdığım alan. Presokratikler ve Plato üzerine okumalar yapıyorum. F.M Conford'un eserlerine başladım şu sıra. Güzel gidiyor. Loeb kütüphanesini sömürmeye çalışıyorum işte.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/2.gif" alt="Generic placeholder image" width="140" height="140">
            <h2>Arkeoloji</h2>
            <p>Klasik dönem arkeolojisiyle baya ilgiliyim, öyle böyle değil. İyonya bölgesini karış karış gezdim. Favorilerim Teos ve Efes.  </p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/3.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Kitap</h2>
            <p>Kitap okumayı severim. Antik dönem klasik metinlerini çalışıyorum. Özellikle şu sıralar Plato okumalarına tekrar başladım.Onun dışında Minos dönemi arkeolojisi üzerine okumalar yapıyorum.Evans'ın dev eseri Palace of Minos. Roman olarak Nikos Kazancakis'in romanlarını okuyorum. Okuma işleri benim için hobi falan değil açıkcası.Yemek yemek gibi bişey oldu o yüzden gereksiz romantizm yapmaya gerek yok.Okuyorum işte bişeyler.</p>
          </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Aşcılık ve Yemek Üzerine <span class="text-muted">Fooooooood!!</span></h2>
            <p class="lead">Ege mutfağını çok severim.Zeytin yağlı yemekleri güzel yaptığımı söylerler.Taze fasulye ve bamyayı iyi yaparım.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/test.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Dünyanın En Güzel Romanı <span class="text-muted">Oku!</span></h2>
            <p class="lead">Gecenin Sonuna Yolculuk! </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/test.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Ödevler Üzerine<span class="text-muted">Tespit!</span></h2>
            <p class="lead"> 21.yy'ın eğitim sisteminde kullanılan genelde fonksiyonel olmayan vakit kaybı işler bütünüdür.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/test.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>