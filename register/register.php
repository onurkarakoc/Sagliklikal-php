<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Üye Ol</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

        
       


  <div class="header">
  	<h2>Üye Ol</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Kullanıcı Adı</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Şifre</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Tekrar Şifre</label>
  	  <input type="password" name="password_2">
  	</div>
        <div class="input-group">
  	  <label>Yaş</label>
  	  <input type="text" name="age">
  	</div>
        <div class="input-group">
      <label>Boy</label>
      <input type="text" name="height">
    </div>
        <div class="input-group">
      <label>Kilo</label>
      <input type="text" name="weight">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Üye Ol</button>
  	</div>
  	<p>
  		Zaten üye misiniz ? <a href="login.php">Giriş Yapın</a>
  	</p>
  </form>
  

</body>
</html>
