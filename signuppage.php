//demo page
<?php
$firstname="";
$lastname="";
$phone="";
$username="";
$dob="";
$gender="";
$password="";
$confirmpassword="";
$firstnameerr=$lastnameerr=$gendererr=$phoneerr=$usernameerr=$passworderr="";
//firstname checking
if ($_SERVER["REQUEST_METHOD"]=="POST"){
if ($_POST['FirstName']=="" || $_POST['FirstName']==NULL) {
  $firstnameerr="**LastName is  Required Field please fill it.";
}
else {
  $firstname=testinput($_POST['FirstName']);
  $regname="/^[a-zA-Z-' ]*$/";
  if (!preg_match($regname,$firstname)) {
    $firstnameerr = "**Only letters and white space allowed";
  }
}
//lastname checking
if ($_POST['LastName']=="" || $_POST['LastName']==NULL) {
  $lastnameerr="**LastName is Required Field please fill it.";
}
else {
  $lastname=testinput($_POST['LastName']);
  $regname="/^[a-zA-Z-' ]*$/";
  if (!preg_match($regname,$lastname)) {
    $lastnameerr = "**Only letters and white space allowed";
  }
}
}
function testinput($word){
  $word = trim($word);
  $word = stripslashes($word);
  $word = htmlspecialchars($word);
  return $word;
}
?>