<?php
session_start();
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
?>
<html>

<head>
  <title>Address Page</title>
  <style>
  h4 {
    background-color: blueviolet;
    height: 25px;
    width: 600px;
    margin-left: 28em;
    color: white;
    padding-left: 3em;
    border-radius: 8px;
    text-align: center;
  }

  form {
    margin-left: 25em;
    border: 2px solid black;
    width: 600px;
    padding: 2em 0em 2em 9em;
    border-radius: 8px;
  }

  input,
  select {
    width: 400px;
    height: 45px;
    border: 2px solid black;
    margin-bottom: 3em;
    border-radius: 4px;
  }

  option {
    font-size: 15px;
  }

  #all {
    font-size: 18px;
    font-weight: bold;
  }

  #submitt,
  #cancel {
    width: 200px;
    background-color: greenyellow;
    border-radius: 8px;
    border: none;
  }
  </style>
</head>

<body>
  <h4 id="h4">Fill Address page to proceed forward to buy.</h4>
  <form method="post" action="">
    <input id="name" type="text" placeholder="Name" name="Name" required />
    <br />
    <input id="Address" type="text" placeholder="Address" name="Address" required />
    <br />
    <input id="phn" type="text" placeholder="Phone Number" name="Numberph" required />
    <br />
    <input type="text" value="India" />
    <br />
    <select required id="state" name="state">
      <option value="">Select State</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Telangana">Telangana</option>
      <option value="Maharastra">Maharastra</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Delhi">Delhi</option>
    </select>
    <br />
    <input type="text" id="city" placeholder="City" name="city" required />
    <br />
    <input type="submit" id="submitt" value="Continue" name="submitt" />
    <input type="submit" value="Cancel" id="cancel" />
  </form>
</body>
<script>
var con = document.getElementById("submitt");
var can = document.getElementById("cancel");
can.addEventListener("click", cant);

function cant() {
  window.location = "onlineshopping.php";
}
</script>

</html>
<?php
$name=$city=$ph=$state="";
if (isset($_POST['submitt'])){
  if (!empty($_POST['Name'])){
    $name=testinput($_POST['Name']);
  }
  if (!empty($_POST['city'])){
    $city=testinput($_POST['city']);
  }
  if (!empty($_POST['Numberph'])){
    $ph=testinput($_POST['Numberph']);
  }
  if (!empty($_POST['state'])){
    $state=testinput($_POST['state']);
  }
  if (!empty($_POST['Name']) && !empty($_POST['city']) && !empty($_POST['Numberph']) && !empty($_POST['state'])){
    echo "<script>console.log('Not empty');</script>";
    $fileitem=fopen("buy.txt","r") or die ("Unable to open");
    $item=fread($fileitem,filesize("buy.txt"));
    $sqlstoget="select * from propage where name='".$item."'";
    $resulttoget=$conn->query($sqlstoget);
    $rowtoget=mysqli_fetch_assoc($resulttoget);
    $productname=$rowtoget['name'];
    $productcost=$rowtoget['cost'];
    $productimg=$rowtoget['imgn'];
    $productuser=$_SESSION['ID'];
    
    //insert into history
    $sql="insert into history(pname,city,statee,phonenum,namee,costt,img,usernameper) values ('$name','$city','$state','$ph','$productname','$productcost','$productimg','$productuser')";
    $result=$conn->query($sql);
    $sqltwo="select * FROM history WHERE datebooked= (select MAX(datebooked) FROM history);";
    $resultt=$conn->query($sqltwo);
    $row=mysqli_fetch_assoc($resultt);
    $myfile = fopen("orderstatus.txt", "w+") or die("Unable to open file!");
    $txt = $row['SNO'];
    echo $txt;
    fwrite($myfile, $txt);
    fclose($fileitem);
    fclose($myfile);
    echo "<script>window.location='paymentpage.php';</script>";
  }
}
function testinput($word){
  $word = trim($word);
  $word = stripslashes($word);
  $word = htmlspecialchars($word);
  return $word;
}
?>