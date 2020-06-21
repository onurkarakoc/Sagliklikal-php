<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  $db = mysqli_connect('localhost', 'root', '123456', 'registration');
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $sql);
  $user = mysqli_fetch_assoc($result);

  $userphoto = $user['profilephoto'];
 

?>

<?php include('/phpprojects/upload.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="navbar.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <div id="container">

  <div class="clearfix">

    <div class="box" id="logo">
    <img src="logo.png" alt="logo" width="80%" height="80%">
    </div>

    <div class="box" id="second">
      <div id="menubar">
      <a class="button" id="active" href="#"><i class="fa fa-fw fa-home"></i> Anasayfa</a>
      <a class="button" href="#"><i class="fas fa-utensils"></i> Yemek Tarifleri</a>
      <a class="button" href="#"><i class="fas fa-question"></i> Kaç Kalori</a>
      <a class="button" href="#"><i class="far fa-calendar-check"></i> Kalori Takip</a>
      <a class="button" href="#"><i class="fas fa-calculator"></i>  Hesaplamalar</a>
    </div>
  </div>

    <div class="box" id="third">
      <div id="register">
        <a class="button-1" href="#"><i class="fas fa-user"></i> Profil</a>
        <a class="button-1" href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a>
      </div>
    </div>

  </div>

</div>

  <p><h1>Profil</h1></p>
  <?php echo "<img src=".$userphoto.">"; ?>
  <div class="profile">
      <form method="POST" action="profile.php" enctype="multipart/form-data">
      <input type="file" name="image"  accept="image/*">
      <input type="submit">

      <label>Kullanıcı Adı</label>
      <?php echo $user['username']; ?>
      </form>
    </div>

</body>
</html>
