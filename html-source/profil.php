<?php 
  ob_start();
  @session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../register/login.php');
  }
  $db = mysqli_connect('fdb26.awardspace.net', '2939314_registration', 'a123_321a', '2939314_registration');
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $sql);
  $user = mysqli_fetch_assoc($result);
  $age = $user['age'];
  $userphoto = $user['profilephoto'];
  $height = $user['height'];
  $weight = $user['weight'];
  $age = $user['age'];

?>

<?php include('../register/upload.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Profil</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<link rel="stylesheet" href="../style/navbar.css">
  <link rel="stylesheet" href="../style/profil.css">
  <link rel="stylesheet" href="../style/anasayfa.css">
</head>

<body>

	<nav>
		<div class="container clearfix">
			<div id="logo-box">
				<a href="/" class="logo text-uppercase">
					Sağlıklı Kal
				</a>
			</div>
			<div id="nav-links">
				<ul>
					<li class="nav-item">
						<a href="../foods/elma.php" class="nav-link text-uppercase">
							<i class="fas fa-question"></i> Kaç Kalori
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-uppercase">
							<i class="far fa-calendar-check"></i> Kalori Takip
						</a>
					</li>
					<li class="nav-item">
						<a href="hesaplamalar.php" class="nav-link text-uppercase">
							<i class="fas fa-calculator"></i>  Hesaplamalar
						</a>
					</li>
          <li class="nav-item">
          <div class="dropdown">
            <a href="profil.php" class="dropbtn nav-link text-uppercase">Profil <i class="fa fa-caret-down"></i></a>


            <div class="dropdown-content">
              <a href="../html-source/anasayfa.php?logout=1">Çıkış Yap &nbsp&nbsp&nbsp<i class="fas fa-sign-out-alt"></i></a>

            </div>
          </div>
          </li>

				</ul>
			</div>
		</div>
	</nav>
  <section id="profile">
    <div class="container">
      <h2 style="color:white" class="text-uppercase">
        Hesabım
      </h2>
      <hr class="star-light">

      <?php echo "<img src=".$userphoto." id='profile-image' class='img-fluid' width='20%'>"; ?>
      <div id="update-box">
      <form method="POST" enctype="multipart/form-data">
      	<input id="browse" type="file" name="image">
      	<input id="submit" type="submit" value="Fotoğrafı Güncelle">
        </form>
        </div>
      <div id="profile-first">
      <div id="profile-col-1" class="profile-col">
        <div class="text-box">
          <div class="line-box">Kullanıcı Adı:&nbsp&nbsp&nbsp&nbsp<?php echo $username;?></div><br>
          <div class="line-box">Yaşınız:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $age;?></div><br>
          <div class="line-box">Boyunuz: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $height;?></div><br>
          <div class="line-box">Kilonuz: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $weight;?></div><br><br><br>
          

        </div>
      </div>

      <div class="profile-col">
          <div id="text-box-2">
            <div class="line-box">Bugün Alınan Toplam Kalori:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1200kcal</div><br><br><br>
            <div class="line-box">Günlük İçilmesi Gereken Su miktarı:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2 L</div>

          </div>
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
