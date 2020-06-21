<?php
   @session_start();
   $username = $_SESSION['username'];

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         array_push($errors, "Lütfen fotoğraf seçin.");
      }
      
      if($file_size > 2097152) {
         array_push($errors, "Fotoğrafın büyüklüğü 2MB dan fazla olamaz.");
      }

      $dir = "../profilephotos/".$file_name;
      
      chmod($file_tmp, 777);
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,$dir);
      }else{
         print_r($errors);
      }

      $db = mysqli_connect('fdb26.awardspace.net', '2939314_registration', 'a123_321a', '2939314_registration');
      $sql = "UPDATE users SET profilephoto='$dir' WHERE username='$username'";
      $result = mysqli_query($db, $sql);
      header('location: ../html-source/profil.php');
   }
?>
