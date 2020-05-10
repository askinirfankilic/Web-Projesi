  <?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
	  exit;
  }
?>
<html>
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
      <li class="nav-item ">
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
      <li class="nav-item active">
        <a class="nav-link" href="iletisim.php"  style="font-family: fantasy;" >İletişim </a>
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

<br><br><br>
  <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="colums">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">İletişim</h1>
              </div>
          </div>
          <div class="column">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                
               
                
                <div class="find-widget">
                 Address: <a href="#">Kemalpaşa Esentepe Kampüsü, Üniversite Cd., 54050 Serdivan/Sakarya</a>
                </div>
                
                
                
                <div class="find-widget">
                  Website:  <a href="https://www.sakarya.edu.tr/">www.sakarya.edu.tr</a>
                </div>
                
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">İsim</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Konu</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Mesaj</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
					  <!-- Yaş -->
					  
                      <!-- cinsiyet -->
					  <div class="form-check">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						<label class="form-check-label" for="exampleRadios1">
						Erkek
						</label>
						</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
						Kadın
						</label>
						</div>
					  <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Gönder</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</html>