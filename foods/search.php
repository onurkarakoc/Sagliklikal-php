<?php 
if(isset($_GET['ara'])){

  $foodname = trim($_GET['food']);
  $lcl = url_make($foodname);

  $db = mysqli_connect('fdb26.awardspace.net', '2939314_registration', 'a123_321a', '2939314_registration');

  $sql = "SELECT * FROM food WHERE foodname='$lcl'";
  $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) { 
      header("location: $lcl");
      
    }

}
function url_make($str){
    $before = array('ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ö', 'Ç'); 
    $after   = array('i', 'g', 'u', 's', 'o', 'c', 'i', 'g', 'u', 'o', 'c');
    $clean = str_replace($before, $after, $str);
    $stripped = trim(str_replace(' ', '' , $clean));
    $lcl = $stripped.".php";

return $lcl;
}

?>
