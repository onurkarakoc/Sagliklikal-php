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
          <img src="muz.jpg" alt="muz" width="200px" height="200px">
          </div>
          <div class="col" id="col-2">
            <p class="center" id="font-type-col2">Muz </p>
            <p class="left"> Birim: 1 Adet(orta) 170 gr </p>
            <br/>
            <p class="left"> Kalori Miktarı: 131 kcal </p>
            <br/>
            <div id="bar"><div id="progress" style="width:16.375%"></div></div>
            </div>
            </div>
            <div class="middle-box" id="description">
              <p class="left" style="font-size:20px">Muz, temiz karbonhidrat yani enerji kaynaklarından biridir. Ölçülü şekilde muz yemek, diyette tatlı isteğini kesmeye ve kilo vermeye yardımcı olur.</p>
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
							<a href="#" class="footer-link text-uppercase">
								<i class="fas fa-phone"></i> Bize Ulasin
							</a>
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

</body>
</html>
