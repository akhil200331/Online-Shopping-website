<?php
$error="";
$user=$pas=$cpas="";
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  //username
  if ($_POST['username']==" " || $_POST['username']==NULL){
    $error="username can't be empty";
  }
  else {
    $user=testinput($_POST['username']);
  }
  //password and confirm password
  if ($_POST['passwordf']==" " || $_POST['passwordf']==NULL){
    $error="password can't be empty";
  }
  else {
    $pas=testinput($_POST['passwordf']);
    $cpas=testinput($_POST['passwordfc']);
    $confirmpassword=testinput($_POST['Confirm']);
  if (strlen($pas)<=8){
    $error="**Password Contains atleast 8 characters";
  }
  elseif (!preg_match("/[0-9]/",$pas)){
    $error="**Password must contain one digit";
  }
  elseif (!preg_match("/[A-Z]/",$pas)){
    $error="**Password must contain one Capital Letter";
  }
  elseif (!preg_match("/[a-z]/",$pas)){
    $error="**Password must contain one small letter";
  }
  elseif (!preg_match("/[@#$%^&]/",$pas)){
    $error="**Password must contain one special character";
  }
  }
  //check with database
  if ($_POST['username']!=NULL && $_POST['passwordf']!=NULL && $_POST['passwordfc']!=NULL){
    if($conn->connect_error){
      die("Failed to connect ".$conn->connect_error);
    }
    $sql="select * from login where username='".$user."'";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
      // while ($row=$result->fetch_assoc()){
      //   if ($row['passwordg']==$pas){
      //     //signin
      //     echo "<script>alert('succesful login');</script>";
      //   }
      //   else{
      //     $error="Password doesn't match";
      //   }
      // }
      if ($pas!=$cpas){
        $error="**Confirm Password doesn't match.";
      }
      else {
        $sqlu="update login set passwordg = '".$pas."' where username='".$user."'";
        $resultn=$conn->query($sqlu);
        var_dump($resultn);
        if ($resultn){
          //goes to signin page
          echo "<script>alert('Updated Successfully');</script>";
          header("Location: signin.php");
        }
        else{
          $error="**Check enter details once.";
        }
      }

    }
    else{
      $error="Please check the user.";
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
  <title>Forgot Password</title>
  <style>
  #forgot_body {
    margin: 4em 0 0 26em;
    width: 50%;
    height: max-content;
    background-color: lightcyan;
  }

  h2 {
    text-align: center;
    justify-content: center;
    font-size: 30px;
    color: red;
    text-shadow: 2px 4px 4px rgba(46, 91, 173, 0.5);
  }

  #uf {
    border: 4px solid black;
    width: 450px;
    height: 3em;
    margin: 1em 0 0 12em;
    padding-left: 1em;
    padding-top: 0.5em;
    font-family: sans-serif;
    font-style: normal;
    font-size: 15px;
  }

  #pf {
    border: 4px solid black;
    width: 450px;
    height: 3em;
    margin: 1em 0 0 12em;
    padding-left: 1em;
    padding-top: 0.5em;
    font-family: sans-serif;
    font-style: normal;
    font-size: 15px;
  }

  #pfc {
    border: 4px solid black;
    width: 450px;
    height: 3em;
    margin: 1em 0 0 12em;
    padding-left: 1em;
    padding-top: 0.5em;
    font-family: sans-serif;
    font-style: normal;
    font-size: 15px;
  }

  #forgotbutton {
    border: 4px solid red;
    border-radius: 6px;
    width: 100px;
    height: 3em;
    margin: 1em 0 0 21em;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
    font-style: normal;
    font-size: 15px;
    color: aliceblue;
    background-color: red;
  }

  #forgotbutton:hover {
    border: 4px solid green;
    background-color: green;
  }

  span {
    color: red;
    font-weight: bolder;
    font-size: larger;
    padding-left: 12em;
  }
  </style>
</head>

<body>
  <div id="forgot_body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2>Reset Password</h2>
      <input type="text" placeholder="Username" id="uf" required name="username" value="<?php echo $user;?>" />
      <br />
      <input type="password" placeholder="New Password" id="pf" required name="passwordf" value="<?php echo $pas;?>" />
      <br />
      <input type="password" placeholder="Confirm Password" id="pfc" required name="passwordfc"
        value="<?php echo $cpas;?>" />
      <br />
      <input type="submit" value="Reset" id="forgotbutton" />
    </form>
    <span><?php echo $error;?></span>
  </div>
</body>

</html>