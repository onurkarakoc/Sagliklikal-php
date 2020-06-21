<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Giriş Yap</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  </head>
<body>

       
        
        
          <div class="header">
  	<h2>Login</h2>
  </div>
  
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Kullanıcı Adı</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Şifre</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login">Giriş Yap</button>
  	</div>
  	<p>
  		Üye değil misiniz ? <a href="register.php">Üye Ol</a>
  	</p>
     
 
  
  
  
		


  
</body>
</html>
