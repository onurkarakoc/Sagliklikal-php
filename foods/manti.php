<?php
session_start();
?>


<?php include('search.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Sağlıklı Kal</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="/style/besin.css">
	<link rel="stylesheet" href="/style/navbar.css">
	<link rel="stylesheet" href="/style/profil.css">
</head>

<body>

	<nav>
		<div class="container clearfix">
			<div id="logo-box">
				<a href="../html-source/anasayfa.php" class="logo text-uppercase">
					Sağlıklı Kal
				</a>
			</div>
			<div id="nav-links">
				<ul>
					<li class="nav-item">
						<a href="elma.php" class="nav-link text-uppercase">
							<i class="fas fa-question"></i> Kaç Kalori
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-uppercase">
							<i class="far fa-calendar-check"></i> Kalori Takip
						</a>
					</li>
					<li class="nav-item">
						<a href="../html-source/hesaplamalar.php" class="nav-link text-uppercase">
							<i class="fas fa-calculator"></i>  Hesaplamalar
						</a>
					</li>
					
						<?php if(isset($_SESSION['username'])):?>
							<li class="nav-item">
          								<div class="dropdown">
            								<a href="../html-source/profil.php" class="dropbtn nav-link text-uppercase">Profil <i class="fa fa-caret-down"></i></a>
            								<div class="dropdown-content">
              								<a href="../html-source/anasayfa.php?logout=1">Çıkış Yap &nbsp&nbsp&nbsp<i class="fas fa-sign-out-alt"></i></a>
            								</div>
          								</div>
          								</li>
						
							<?php else:?>
								<li class="nav-item"><a href="../register/register.php" class="nav-link text-uppercase">
							<i class="fas fa-user-plus"></i>  Üye Ol
							</a>
							</li>
							<li class="nav-item">
							<a href="../register/login.php" class="nav-link text-uppercase">
							<i class="fas fa-sign-in-alt"></i>  GİRİŞ YAP
							</a>
							</li>

							<?php endif; ?>


						
						
				</ul>
			</div>
		</div>
	</nav>

	<header>
		<div class="container">
      <div class="middle-box"id="searchbox">
	<form action='elma.php' method='GET'>
	<input type="text" name="food" value="Kac kalori..." id="search">
	<input type='submit' name="ara" value='Ara' id="submit"></i>	
	</form>
</div>
      <div class="middle-box">
        <div class="col" id="col-1">
          <img src="mantı.jpg" alt="mantı" width="200px" height="200px">
          </div>
          <div class="col" id="col-2">
            <p class="center" id="font-type-col2">Mantı </p>
            <p class="left"> Birim: 1 porsiyon(orta) 190 gr </p>
            <br/>
            <p class="left"> Kalori Miktarı: 322  kcal </p>
            <br/>
            <div id="bar"><div id="progress" style="width:40.25%"></div></div>
            </div>
            </div>
            <div class="middle-box" id="description">
              <p class="left" style="font-size:20px">Mantı; un, yumurta, kıyma, salça, yoğurt, tereyağ kullanılarak yapılır. Tüketileceği zaman porsiyon miktarına dikkat etmek gerekir.</p>
        </div>

		</div>
	</header>

	<footer>
			<div class="container clearfix">

				<div>
					<ul>
						<li class="footer-item">
							<a href="#" class="footer-link text-uppercase">
							<i class="fas fa-question"></i> SSS
							</a>
						</li>
						<li class="footer-item">
							<a href="#" class="footer-link text-uppercase">
								<i class="fas fa-info"></i> Hakkimizda
							</a>
						</li>
						<li class="footer-item">
							<button class="contact-button1 footer-link text-uppercase" onclick="document.getElementById('id01').style.display='block'" style="width:auto">
								<i class="fas fa-phone"></i> Bize Ulasin
							</button>
						</li>
					</ul>
				</div>
				<div class="footer-box">
					<ul>

						<li class="buton">
							<button class="btn btn-outline btn-social">
								<i class="fab fa-facebook-square fa-5x" style="color:#3b5998"></i>
							</button>
						</li>
						<li class="buton">
							<button class="btn btn-outline btn-social">
							  <i class="fab fa-twitter fa-5x" style="color:#00aced"></i>
							</button>
						</li>

						<li class="buton">
							<button class="btn btn-outline btn-social">
								<i class="fab fa-instagram fa-5x" style="color:#cb2974"></i>
							</button>
						</li>



					</ul>
				</div>


			</div>
		</footer>

		<div class="copyright">
		<div class="container">
			<small>
				Copyright © OMO 2019
			</small>
		</div>
	</div>

<div id="id01" class="container container-contact modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

		<div style="text-align:center">
    <h1>BİZE ULAŞIN</h1>
    <p style="font-size:20px">Size bir mesaj kadar yakınız: </p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">İsim</label>
        <input type="text" id="fname" name="firstname" placeholder="İsminiz..">
        <label for="lname">Soyisim</label>
        <input type="text" id="lname" name="lastname" placeholder="Soyisminiz..">
        <label for="city">Şehir</label>
        <select id="city" name="city">
          <option value="australia">Ankara</option>
          <option value="canada">İzmir</option>
          <option value="usa">İstanbul</option>
        </select>
        <label for="subject">Konu</label>
        <textarea id="subject" name="subject" placeholder="Sizi dinliyoruz.." style="height:170px"></textarea>
        <input type="submit" value="Gönder">
      </form>
    </div>
  </div>
	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>

</body>
</html>
