<?php
session_start();
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
$in="hbeds";
$sql="select * from propage where iname='".$in."'";
$result=$conn->query($sql);
?>
<html>

<head>
  <title>Beds Page</title>
  <link rel="stylesheet" href="font/css/all.min.css">
  <style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
    color: black;
  }

  html {
    font-size: 62.5%;
  }

  main {
    max-width: 1500px;
    width: 95%;
    margin: 30px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: auto;
  }

  main .card {
    max-width: 400px;
    flex: 1 1 210px;
    text-align: center;
    height: 500px;
    border: 1px solid lightgray;
    margin: 20px;
  }

  main .card .image {
    height: 50%;
    margin-bottom: 20px;
  }

  main .card .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  main .card .caption {
    padding-left: 1em;
    text-align: left;
    line-height: 3em;
    height: 25%;
  }

  main .card .caption p {
    font-size: 1.5rem;
  }

  main .card .caption .rate {
    display: flex;
  }

  main .card .caption .rate i {
    color: gold;
    margin-left: 2px;
  }

  main .card a {
    width: 50%;
  }

  main .card button {
    border: 2px solid black;
    padding: 1em;
    width: 50%;
    cursor: pointer;
    margin-top: 0.3em;
    font-weight: bold;
    position: relative;
  }

  main .card button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all 0.5s;
    margin: 0;
  }

  main .card button::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all 0.5s;
    margin: 0;
  }

  main .card button:hover::before {
    width: 30%;
  }

  main .card button:hover::after {
    width: 30%;
  }

  .buy {
    background-color: aqua;
  }

  header {
    background-color: lawngreen;
    color: white;
    text-align: center;
    font-size: 5em;
  }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>Beds</header>
  <main>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="card" data-value="<?php echo $row['name'];?>" method="post" action="">
      <div class="image">
        <img src="<?php echo $row['imgn'];?>" alt="Not Available">
      </div>
      <div class="caption">
        <p class="rate">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </p>
        <p class="product_name"><?php echo $row['name'];?></p>
        <p class="price"><b>Rs.<?php echo $row['cost'];?></b></p>
        <p class="discount"><?php echo $row['namd'];?></p>
      </div>
      <button name="cartc" class="add" value="<?php echo $row['name'];?>">Wishlist</button>
      <button name="buyc" class="buy" value="<?php echo $row['name'];?>">Buy Now</button>
    </form>
    <?php
    }
    ?>
  </main>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  if (isset($_POST['cartc'])){
    $inn=$_POST['cartc'];
    $sqlinn="select * from propage where name='".$inn."'";
    $resultt=$conn->query($sqlinn);
    while ($roww=mysqli_fetch_assoc($resultt)){
      $nam=$roww['name'];
      $cos=$roww['cost'];
      $un=$_SESSION['ID'];
      $sqlin="insert into cart(name,cost,usernameper) values ('$nam','$cos','$un')";
      $resultin=$conn->query($sqlin);
      if ($resultin){
        echo "<script>alert('Item Added To Cart.');</script>";
      }
    }
  }
  if (isset($_POST['buyc'])){
    $myfile = fopen("buy.txt", "w+") or die("Unable to open file!");
    $txt = $_POST['buyc'];
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "<script>window.location='address.php';</script>";
  }
}
?>