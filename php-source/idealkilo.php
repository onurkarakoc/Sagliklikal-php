<?php
@session_start();

if (isset($_GET['logout'])) {
  	@session_destroy();
  	unset($_SESSION['username']);
  	header("location: anasayfa.php");
  }
?>
<?php include('idealkg.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Hesaplamalar</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<link rel="stylesheet" href="../style/navbar.css">
  <link rel="stylesheet" href="../style/hesaplamalar.css">
  <link rel="stylesheet" href="../style/anasayfa.css">
	<link rel="stylesheet" href="../style/besin.css">
        <link rel="stylesheet" href="../style/profil.css">
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
						<a href="../html-source/elma.php" class="nav-link text-uppercase">
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
              								<a href="anasayfa.php?logout=1">Çıkış Yap &nbsp&nbsp&nbsp<i class="fas fa-sign-out-alt"></i></a>
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

	<section id="computation">
    <div class="container">
      <h2 style="color:white" class="text-uppercase">
        İdeal Kilo
      </h2>
      <hr class="star-light">
			<div class="compute-container">
				<div class="compute-box">
					<ul>
						<li class="compute-col">
							<p>İdeal kilo sağlıklı bir yaşam sürdürebilmeniz için boyunuz ile orantılı olan kilo değeridir. Yapılan bilimsel çalışmalar da sadece 1 kg kilo kaybının bile, insan ömrünü 3 ya da 4 ay kadar uzattığını göstermiştir. Aşağıda görülen Vücut Kitle İndeksi (VKİ) tablosunda kilogram cinsinden kilonuz ve metre cinsinden boyunuzun kesiştiği noktanın içinde bulunduğu alan kilonuzun ideal olup olmadını öğrenebilirsiniz. Eğer mevcut kilonuz ideal kilonuzun altında ya da üstünde ise bu kiloya ulaşabilmek için izlenecek yol, kısa sürede fazla miktarda kilo kaybetmek ya da almak değil, sağlıklı kilo kaybını/kazancını sağlamak ve bu kiloyu uzun dönemde korumaktır.
							</p>
						</li>

						<li class="compute-col">
							<?php include('errors.php'); ?>
							<form action="idealkilo.php" method="GET">
								<label>Cinsiyet</label><br>
								<input type="radio" name="gender" value="female"> Kadın<br>
  								<input type="radio" name="gender" value="male"> Erkek<br>
  								<label>Boy (cm)</label><br>
  								<input type="text" name="height" value="<?php echo $height; ?>"><br>
  								<button type="submit" name="calculate">HESAPLA</button>
							</form>
						</li>
						<br><br>
						<li>
							<label>İdeal Kilonuz:</label>
							<label><?php echo $ideal_kilo; ?></label>
						</li>

				</div>

			</div>

	</div>


  </section>

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
