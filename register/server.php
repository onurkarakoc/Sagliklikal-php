<?php
@session_start();

// initializing variables
$username = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('fdb26.awardspace.net', '2939314_registration', 'a123_321a', '2939314_registration');

  if(isset($_POST['register'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $age = $_POST['age'];
 
  if (empty($username)) { array_push($errors, "Kullanıcı adı boş geçilemez."); }
  if (empty($email)) { array_push($errors, "Email boş geçilemez."); }
  if (empty($password_1)) { array_push($errors, "Şifre boş geçilemez."); }
  if ($password_1 != $password_2) { array_push($errors, "Şifreler eşleşmiyor"); }
  if (empty($height)) { array_push($errors, "Boy boş geçilemez."); }
  if (empty($weight)) { array_push($errors, "Kilo boş geçilemez."); }
  if (empty($age)) { array_push($errors, "Yaş boş geçilemez."); }

  $default_profile_photo = "../images/profile.png";

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Kullanıcı adı sistemimizde mevcut. Lütfen başka bir kullanıcı adı seçiniz.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Emailiniz ile ilgili hesap sistemimizde mevcut.");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password, height, weight,profilephoto,age) 
  			  VALUES('$username', '$email', '$password', '$height', '$weight', '$default_profile_photo','$age')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: ../html-source/anasayfa.php');
  }
}

  if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
    array_push($errors, "Lütfen kullanıcı adınızı giriniz.");
  }
  if (empty($password)) {
    array_push($errors, "Lütfen şifrenizi giriniz.");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: ../html-source/anasayfa.php');
    }else {
      array_push($errors, "Kullanıcı adı veya şifreniz yanlış.");
    }
  }
}

?>
