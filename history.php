<?php
session_start();
$conn=new mysqli("localhost:3307","root","Asdfg#143","dbn");
if($conn->connect_error){
  die("Failed to connect ".$conn->connect_error);
}
$sqltogethist="select * from history where usernameper='".$_SESSION['ID']."' and Orderitem='Confirmed'";
$resulttohist=$conn->query($sqltogethist);
?>
<html>

<head>
  <title>History Page</title>
  <link rel="stylesheet" href="font/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  header {
    display: flex;
    justify-content: center;
    align-content: center;
    height: 50px;
    background-color: aqua;
    font-size: 34px;
  }

  i {
    padding-left: 1em;
    color: black;
    size: 20px;
    padding-top: 0.2em;
  }

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
    max-width: 300px;
    flex: 1 1 210px;
    text-align: center;
    height: 400px;
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
    margin-top: 2em;
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
  </style>
</head>

<body>
  <header>History <i class="fa fa-history"></i></header>
  <main>
    <?php
    while($rowtowish=mysqli_fetch_assoc($resulttohist)){
    ?>
    <form class="card" method="post" action="">
      <div class="image">
        <img src="<?php echo $rowtowish['img'];?>" alt="Not Available">
      </div>
      <div class="caption">
        <p class="rate">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </p>
        <p class="product_name"><?php echo $rowtowish['namee'];?></p>
        <p class="price"><b>Rs.<?php echo $rowtowish['costt'];?></b></p>
        <p class="address"><?php echo $rowtowish['city'];?>,<?php echo $rowtowish['statee'];?></p>
        <p><b>Confirmed date:</b> <?php echo $rowtowish['datebooked'];?></p>
        <p></p>
      </div>
    </form>
    <?php
    }
    ?>
  </main>
</body>

</html>