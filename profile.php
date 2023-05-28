<?php
session_start();
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
$sql="select * from login where username='".$_SESSION['ID']."'";
$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);
?>
<html>

<head>
  <title>Profile</title>
  <style>
  header {
    color: black;
    font-size: larger;
    font-weight: bolder;
    font-family: sans-serif;
    padding-left: 35em;
    background-color: azure;
    height: fit-content;
  }

  p {
    font-family: sans-serif;
    font-size: medium;
    color: black;
  }

  div {
    background-color: azure;
    border: 4px solid black;
    height: 300px;
    width: fit-content;
    margin-left: 33em;
    margin-top: 2em;
    padding-left: 6em;
    padding-right: 6em;
  }

  img {
    border-radius: 15px;
    padding-top: 1em;
  }
  </style>
</head>

<body>
  <header>PROFILE</header>
  <div>
    <p><b>FirstName:</b><?php echo $row['firstname'];?></p>
    <br>
    <p><b>LastName:</b><?php echo $row['lastname'];?></p>
    <br>
    <p><b>Gender:</b><?php echo $row['gender'];?></p>
    <br>
    <p><b>Phone:</b><?php echo $row['phone'];?></p>
    <br>
  </div>
</body>

</html>