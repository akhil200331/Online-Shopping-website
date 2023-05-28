<?php
$error="";
$user=$pas="";
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  //username
  if ($_POST['username']==" " || $_POST['username']==NULL){
    $error="**username can't be empty";
  }
  else {
    $user=testinput($_POST['username']);
  }
  //password
  if ($_POST['passwordh']==" " || $_POST['passwordh']==NULL){
    $error="**password can't be empty";
  }
  else {
    $pas=testinput($_POST['passwordh']);
  }
  //check with database
  if ($_POST['username']!=NULL && $_POST['passwordh']!=NULL){
    if($conn->connect_error){
      die("Failed to connect ".$conn->connect_error);
    }
    $sql="select * from login where username='".$user."'";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
      while ($row=$result->fetch_assoc()){
        if ($row['passwordg']==$pas){
          //signin
          session_start();
          $_SESSION['ID']=$row['username'];
          echo "<script>window.location='ONLINESHOPPING.php';</script>";
        }
        else{
          $error="**Password doesn't match";
        }
      }
    }
    else{
      $error="**User doesn't Exist Please register.";
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
<html>

<head>
  <title>Sign In</title>
  <style>
  span {
    color: rgb(255, 0, 0);
    font-weight: bolder;
    font-size: larger;
    padding-left: 10em;
  }
  </style>
  <link rel="stylesheet" href="signin.css" />
</head>

<body>
  <div id="signin_body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2>Sign In</h2>
      <input type="text" placeholder="Username" id="unsignin" required name="username" value="<?php echo $user;?>" />
      <br />
      <input type="password" placeholder="Password" id="passwordsignin" required name="passwordh"
        value="<?php echo $pas;?>" />
      <br />
      <input type="submit" value="Sign In" id="signbutton" />
    </form>
    <a class="new" href="signuppagemain.php">New user Register Here</a>
    <br />
    <a class="fp" href="forgotpassword.php">Forgot Password</a>
    <br>
    <span><?php echo $error;?></span>
  </div>
</body>

</html>