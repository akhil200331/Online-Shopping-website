<?php
session_start();
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
?>
<html>

<head>
  <title>Payment Page</title>
  <style>
  body {
    height: max-content;
    margin-left: 28em;
    width: max-content;
  }

  #upif,
  #cardf {
    border: 2px solid black;
    height: 90px;
    width: 400px;
    margin-top: 2em;
    margin-left: 2em;
    visibility: hidden;
    align-items: center;
    position: absolute;
    padding: 2em 0em 0em 4em;
  }

  #lopp {
    margin: 2em 0em 0em 3em;
  }

  .pb {
    background-color: greenyellow;
    height: 50px;
    width: 80px;
    margin-top: 14em;
    border: none;
    border-radius: 5px;
    margin-left: 6em;
  }

  .cardd {
    width: 300px;
    height: 30px;
  }
  </style>
</head>

<body>
  <h2><u>Select Payment Option To Place Order.</u></h2>
  <form method="post" action="">
    <div id="lopp">
      <input type="radio" name="lop" value="UPI" id="r1" />
      UPI
      <input type="radio" name="lop" value="COD" checked="checked" id="r2" />
      COD <input type="radio" name="lop" value="cards" id="r3" /> Cards
    </div>
    <br />
    <div id="upif">
      <input type="text" name="upiaddress" id="upiadress" placeholder="UPI Address" />
    </div>
    <div id="cardf">
      <input type="text" placeholder="Enter Card Number" class="cardd" />
      <br />
      <input type="number" min="01" max="12" placeholder="MM" />
      <input type="number" min="2023" placeholder="YY" />
      <input type="number" placeholder="CVV" min="100" max="999" />
      <br />
    </div>
    <input type="submit" value="Confirm" class="pb" name="con" />
    <input type="submit" value="Cancel" onclick="cancel()" class="pb" />
  </form>
</body>
<script>
let radioBtns = document.querySelectorAll('input[name="lop"]');
let findSelected = () => {
  let selected = document.querySelector("input[name='lop']:checked").value;
  console.log(selected);
  if (selected == "UPI") {
    document.getElementById("upif").style.visibility = "visible";
    document.getElementById("cardf").style.visibility = "hidden";
  } else if (selected == "cards") {
    document.getElementById("upif").style.visibility = "hidden";
    document.getElementById("cardf").style.visibility = "visible";
  } else {
    document.getElementById("upif").style.visibility = "hidden";
    document.getElementById("cardf").style.visibility = "hidden";
  }
};
radioBtns.forEach((radioBtn) => {
  radioBtn.addEventListener("change", findSelected);
});



function cancel() {
  window.location = "ONLINESHOPPING.php";
}
</script>

</html>
<?php
if (isset($_POST['con'])){
  $myfile = fopen("orderstatus.txt", "r") or die("Unable to open file!");
    $txt=fread($myfile,filesize("orderstatus.txt"));
    $sql="update history set Orderitem='Confirmed' where SNO='".$txt."'";
    $re=$conn->query($sql);
    fclose($myfile);
    
    //second part to add those things to history
    $myfile = fopen("orderstatus.txt", "r") or die("Unable to open file!");
    $txt=fread($myfile,filesize("orderstatus.txt"));
    $sql="update history set Orderitem='Confirmed' where SNO='".$txt."'";
    $re=$conn->query($sql);
    fclose($myfile);
    echo "<script>window.location='ONLINESHOPPING.php';</script>";
}
?>