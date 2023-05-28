<?php
$firstname="";
$lastname="";
$phone="";
$username="";
$dob="";
$gender="";
$password="";
$confirmpassword="";
$code="";
$firstnameerr=$lastnameerr=$gendererr=$phoneerr=$usernameerr=$passworderr=$confirmpassworderr="";
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
//firstname checking
if ($_SERVER["REQUEST_METHOD"]=="POST"){
if ($_POST['FirstName']==" " || $_POST['FirstName']==NULL) {
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
if ($_POST['LastName']==" " || $_POST['LastName']==NULL) {
  $lastnameerr="**LastName is Required Field please fill it.";
}
else {
  $lastname=testinput($_POST['LastName']);
  $regname="/^[a-zA-Z-' ]*$/";
  if (!preg_match($regname,$lastname)) {
    $lastnameerr = "**Only letters and white space allowed";
  }
}
//username checking
if ($_POST['UserName']==" " || $_POST['UserName']==NULL) {
  $usernameerr="**LastName is Required Field please fill it.";
}
else {
  $username=testinput($_POST['UserName']);
  $regname="/^[a-zA-Z0-9-' ]*$/";
  if (!preg_match($regname,$username) || strlen($username)>8) {
    $usernameerr = "**Only letters and numbers are allowed and length<8";
  }
}
//phone number checking
if ($_POST['phonen']==" " || $_POST['phonen']==NULL){
  $phoneerr="**Only digits allowed";
}
else{
  if ($_POST['code']!=NULL){
    $phone=testinput($_POST['phonen']);
    $code=testinput($_POST['code']);
    $regph="/^[0-9]/";
    if (!preg_match($regph,$phone) || strlen($phone)>10 || strlen($phone)<10) {
      $phoneeerr = "**It is digit and 10 digits";
    }
  }
}
//Date of birth and gender
if (!isset($_POST['gender'])){
  $gendererr="**Please select gender";
}
else{
  $gender=testinput($_POST['gender']);
  $dob=date('d-m-Y',strtotime($_POST['dob']));
}
//password
if ($_POST['Pass']==NULL ){
  $passworderr="**Password is Required Field please fill it.";
}
else{
  $password=testinput($_POST['Pass']);
  $confirmpassword=testinput($_POST['Confirm']);
  if (strlen($password)<=8){
    $passworderr="**Password Contains atleast 8 characters";
  }
  elseif (!preg_match("/[0-9]/",$password)){
    $passworderr="**Password must contain one digit";
  }
  elseif (!preg_match("/[A-Z]/",$password)){
    $passworderr="**Password must contain one Capital Letter";
  }
  elseif (!preg_match("/[a-z]/",$password)){
    $passworderr="**Password must contain one small letter";
  }
  elseif (!preg_match("/[@#$%^&]/",$password)){
    $passworderr="**Password must contain one special character";
  }
}
//confirm password
if ($confirmpassword!=$password){
  $confirmpassworderr="**Please check Password to be Confirmed";
}
//adding it to database
if ($firstnameerr=="" && $lastnameerr=="" && $gendererr=="" && $phoneerr=="" && $usernameerr=="" && $passworderr==""){
  if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
$sql="insert into login (username,passwordg,firstname,lastname,countrycode,phone,gender) values ('$username','$password','$firstname','$lastname','$code',$phone,'$gender')";
$result=$conn->query($sql);
if ($result){
  $firstname="";
$lastname="";
$phone="";
$username="";
$dob="";
$gender="";
$password="";
$confirmpassword="";
$code="";
  echo "<script>alert('Registered Successfully');</script>";

}
else {
  echo "<script>alert('User already Registered');</script>";
}
  $conn->close();
}
}
function testinput($word){
  $word = trim($word);
  $word = stripslashes($word);
  $word = htmlspecialchars($word);
  return $word;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="stylesignup.css" />
  <title>Sign Up Form</title>
  <style>
  span {
    color: rgb(255, 0, 0);
    font-weight: bolder;
    font-size: large;
  }
  </style>
</head>

<body>
  <div id="signup_body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2>Register Form</h2>
      <input type="text" placeholder="FirstName" name="FirstName" required
        value="<?php echo $firstname;?>" /><span><?php echo $firstnameerr;?></span>
      <br />
      <input type="text" placeholder="LastName" name="LastName" required
        value="<?php echo $lastname;?>" /><span><?php echo $lastnameerr;?></span>
      <br />
      <input type="text" placeholder="Username" name="UserName" required
        value="<?php echo $username;?>" /><span><?php echo $usernameerr;?></span>
      <br />
      <select name="code" required>
        <option value="">-Select-</option>
        <option value="+91">+91</option>
        <option value="+92">+92</option>
        <option value="+99">+99</option>
        <option value="+121">+121</option>
        <option value="+11">+11</option>
      </select>
      <input type="text" placeholder="Phone" name="phonen" required value="<?php echo $phone;?>" />
      <span><?php echo $phoneerr;?></span>
      <br />
      <label>Date of Birth:</label>
      <input id="dob" placeholder="DOB" type="date" required min="1995-01-01" max="2040-12-31" name="dob" value="value="
        <?php echo date('m-d-Y',strtotime($dob));?>"" />
      <br />
      <label class="gende">Gender:</label>
      <br />
      <input class="g" type="radio" name="gender" placeholder="Male" value="Male" />
      <label class="genderlabel">Male</label>
      <br />
      <input class="g" type="radio" name="gender" value="Female" />
      <label class="genderlabel">Female</label>
      <br />
      <input class="g" type="radio" name="gender" value="Others" />
      <label class="genderlabel">Others</label><span><?php echo $gendererr;?></span>
      <br />
      <input placeholder="Password" type="password" name="Pass" required
        value="<?php echo $password;?>" /><span><?php echo $passworderr;?></span>
      <br />
      <input placeholder="Confirm Password" name="Confirm" type="password"
        required /><span><?php echo $confirmpassworderr;?></span>
      <br />
      <button id="submitsu" onclick="signupcheck()">Submit</button>
    </form>
  </div>
</body>
<script>
function signupcheck() {}
</script>

</html>