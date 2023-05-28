<?php
session_start();
if (empty($_SESSION['ID'])){
  echo "<script>alert('You have not signed in Please Sign in.');</script>";
  echo "<script>window.location='signin.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="style.css" />
  <style>
  #pROFILE_items {
    height: 340px;
  }

  #searchbutton {
    border-radius: 70px;
  }

  #sear {
    padding-left: 7em;
  }

  option {
    background-color: wheat;
    color: black;
  }
  </style>
  <link rel="icon" type="image/x-ixon" href="icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>E-Shopping</title>
</head>

<body>
  <!--Header Elements I.E., Horizontal drawerr-->
  <header class="header-bar">
    <img class="image" src="icon.png" width="60px" />
    <div class="block-elements">
      <a id="menblock" class="Men">Men</a>
      <a id="womenblock" class="Women">Women</a>
      <a id="homeblock" class="Home">Home</a>
      <a id="electronicblock" class="EA">Electronics</a>
      <i id="sear" class="fa fa-search"></i>
      <input id="searchi" list="posts" placeholder="Search for products,brands and more" />
      <datalist id="posts">
        <option value="Men Jeans"></option>
        <option value="Men Hoodies"></option>
        <option value="Men Wallets"></option>
        <option value="Men Watches"></option>
        <option value="Men Shoes"></option>
        <!--Women-->
        <option value="Women Sarees"></option>
        <option value="Women Chudidars"></option>
        <option value="Women Wallets"></option>
        <option value="Women Watches"></option>
        <option value="Women ModernWear"></option>
        <!--Home-->
        <option value="Beds"></option>
        <option value="Sofas"></option>
        <option value="Utensils"></option>
        <option value="Cooking Items"></option>
        <option value="Gardening Items"></option>
        <!--Electronics-->
        <option value="Mobiles"></option>
        <option value="Laptops"></option>
        <option value="AC"></option>
        <option value="TV"></option>
        <option value="Refrigirators"></option>
      </datalist>
      <button id="searchbutton" onclick="search()">Search</button>
      <i class="fa fa-user" id="usericon"></i>
      <a id="profileblock" class="Profile">Profile</a>
      <i class="fa fa-heart" id="wishlisticon"> </i>
      <a href="wishlist.php" class="Wishlist">Wishlist</a>

      <i class="fa fa-history" id="carticon"></i>
      <a href="history.php" class="Cart">History</a>
    </div>
  </header>
  <!--For all div block items we have to set only one -->
  <!--For Men's Collections-->
  <div id="men_items">
    <h4>Men's Wear</h4>
    <a href="mjeans.php" onclick="mjeans()">Jeans</a>
    <br />
    <a href="mhoodies.php" onclick="mhoodies()">Hoodies</a>
    <br />
    <a href="mshoes.php" onclick="mshoes()">Shoes</a>
    <br />
    <a href="mwallets.php" onclick="mwallets()">Wallets</a>
    <br />
    <a href="mwatches.php" onclick="mwatches()">Watches</a>
    <br />
  </div>
  <!--For Womens collections-->
  <div id="women_items">
    <h4>Women's Wear</h4>
    <a href="wsarees.php" onclick="wsarees()">Sarees</a>
    <br />
    <a href="wchudidars.php" onclick="wchudidarss()">Chudidars</a>
    <br />
    <a href="wmodernwear.php" onclick="wmodernwear()">Modern Wear</a>
    <br />
    <a href="wwallets.php" onclick="wwallets()">Wallets</a>
    <br />
    <a href="wwatches.php" onclick="wwatches()">Watches</a>
    <br />
  </div>
  <!--Home items-->
  <div id="home_items">
    <h4>Living Essentials</h4>
    <a href="hbeds.php" onclick="hbeds()">Beds</a>
    <br />
    <a href="hutensils.php" onclick="hutensils()">Utensils</a>
    <br />
    <a href="hsofa.php" onclick="hsofa()">Sofa</a>
    <br />
    <a href="hgardeningitems.php" onclick="hgardeningitems()">Gardening items</a>
    <br />
    <a href="hcookingitems.php" onclick="hcookingitems()">Cooking items</a>
    <br />
  </div>
  <!--Electronics items-->
  <div id="EA_items">
    <h4>Electronics</h4>
    <a href="etv.php" onclick="etv()">TV</a>
    <br />
    <a href="elaptops.php" onclick="elaptops()">Laptops</a>
    <br />
    <a href="emobiles.php" onclick="emobiles()">Mobiles</a>
    <br />
    <a href="eac.php" onclick="eacs()">AC's</a>
    <br />
    <a href="erefrigirator.php" onclick="erefrigirators()">Refrigirators</a>
    <br />
  </div>
  <!--PROFILE-->
  <div id="pROFILE_items">
    <h4>Profile</h4>
    <a onclick="hideallifclick()">Home</a>
    <br />
    <a href="wishlist.php" onclick="hideallifclick()">Wishlist</a>
    <br />
    <a href="profile.php" onclick="hideallifclick()">Profile</a>
    <br />
    <a href="signout.php" onclick="hideallifclick()">Logout</a>
    <br />
    <a href="#footer" onclick="hideallifclick()">Contact</a>
    <br />
    <a href="signin.php">Sign in</a>
  </div>
  <!--For carousel images-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item">
        <img src="https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140603__340.jpg" alt="Los Angeles"
          style="width: 100%" />
      </div>

      <div class="item active">
        <img
          src="https://img.freepik.com/premium-photo/product-package-boxes-shopping-bag-cart-with-laptop-online-shopping-delivery-concept_38716-138.jpg"
          alt="Chicago" style="width: 100%" />
      </div>

      <div class="item">
        <img src="https://cdn.pixabay.com/photo/2015/12/08/10/39/online-shopping-1082728__340.jpg" alt="New york"
          style="width: 100%" />
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <h1><u>**Top Collections**</u></h1>
  <!--MAIN DIVISION FOR ORDERING LIKE THAT-->
  <main>
    <div id="Maindivision">
      <!--First Row-->
      <!--Men jeans-->
      <a class="alldivblock" href="mjeans.php">
        <div id="menjeandiv">
          <img
            src="https://www.warehouseone.com/on/demandware.static/-/Sites-master-catalog/default/dwcbc14123/who/1110107141~090~1.jpg"
            width="100%" height="85%"></img>

          <h4><b>Men's Jeans</b></h4>
        </div>
      </a>
      <!--Men shirts-->
      <a class="alldivblock" href="mhoodies.php">
        <div id="menshirtdiv">
          <img
            src="https://www.nielsenanimal.com/wp-content/uploads/2018/09/mens-nike-athletic-dry-t-shirt-blue-t-shirts_1.jpg"
            width="100%" height="85%"></img>

          <h4><b>Men's Hoodies</b></h4>
        </div>
      </a>
      <!--Shoes-->
      <a class="alldivblock" href="mshoes.php">
        <div id="menshoesdiv">
          <img src="shoe.jpg" width="100%" height="85%"></img>
          <h4><b>Shoes</b></h4>
        </div>
      </a>
      <!--Watches-->
      <a class="alldivblock" href="mwatches.php">
        <div id="menswatchesdiv">
          <img src="watches.jpg" width="100%" height="85%"></img>
          <h4><b>Watches</b></h4>
        </div>
      </a>
      <!--Second row-->
      <!--Sarees-->
      <a class="alldivblock" href="wsarees.php">
        <div id="sareesdiv">
          <img src="sarees.jpg" width="100%" height="85%"></img>
          <h4><b>Sareess</b></h4>
        </div>
      </a>
      <!--Chudidars-->
      <a class="alldivblock" href="wchudidars.php">
        <div id="chudidarsdiv">
          <img src="chudidars.jpg" width="100%" height="85%"></img>
          <h4><b>Chudidars</b></h4>
        </div>
      </a>
      <!--Sofas-->
      <a class="alldivblock" href="hsofa.php">
        <div id="sofasdiv">
          <img src="sofas.jpg" width="100%" height="85%"></img>
          <h4><b>Sofas</b></h4>
        </div>
      </a>
      <!--Beds-->
      <a class="alldivblock" href="hbeds.php">
        <div id="bedsdiv">
          <img src="beds.jpg" width="100%" height="85%"></img>
          <h4><b>Beds</b></h4>
        </div>
      </a>
      <!--3rd row-->
      <!--Utensils-->
      <a class="alldivblock" href="hutensils.php">
        <div id="utensilsdiv">
          <img src="utensils.jpg" width="100%" height="85%"></img>
          <h4><b>Utensils</b></h4>
        </div>
      </a>
      <!--Laptops-->
      <a class="alldivblock" href="elaptops.php">
        <div id="laptopsdiv">
          <img src="laptops.jpg" width="100%" height="85%"></img>
          <h4><b>Laptops</b></h4>
        </div>
      </a>
      <!--Mobiless-->
      <a class="alldivblock" href="emobiles.php">
        <div id="mobilesdiv">
          <img src="mobiles.jpg" width="100%" height="85%"></img>
          <h4><b>Mobiles</b></h4>
        </div>
      </a>
      <!--Ac's-->
      <a class="alldivblock" href="eac.php">
        <div id="acsdiv">
          <img src="acs.jpg" width="100%" height="85%"></img>
          <h4><b>Ac's</b></h4>
        </div>
      </a>
    </div>
  </main>
  <hr />
  <footer id="footer">
    <h2><b>Contact details:</b></h4>
      <p><b>Phone:</b> 08942-222-393</p>
      <p><b>Mobile:</b> +91 9340589765</p>
      <p><b>Email: </b>eshopping@gmail.com</p>
      <p><b>Website: </b>https://www.eshopping.com</p>
      <h2><b>Connect Us:</b></h2>
      <a href="https://www.facebook.com/groups/180686883974630/"><i class="fa fa-facebook size"></i></a>
      <a href="https://www.facebook.com/groups/180686883974630/"><i class="fa fa-instagram size"></i></a>
      <h4 class="copy">&copy <b>E-shop</b></h4>
  </footer>
</body>
<script src="main.js">
</script>
<script>
function search() {
  var search = document.getElementById("searchi").value;
  var lowersearch = search.toLowerCase();
  switch (lowersearch) {
    case "men jeans":
      window.location = "mjeans.php";
      break;
    case "men shoess":
      window.location = "mshoes.php";
      break;
    case "men wallets":
      window.location = "mwallets.php";
      break;
    case "men watches":
      window.location = "mwatches.php";
      break;
    case "men hoodies":
      window.location = "mhoodies.php";
      break;
      //women
    case "women sarees":
      window.location = "wsarees.php";
      break;
    case "women wallets":
      window.location = "wwallets.php";
      break;
    case "women chudidars":
      window.location = "wchudidars.php";
      break;
    case "women watches":
      window.location = "wwatches.php";
      break;
    case "women modernwear":
      window.location = "wmodernwear.php";
      break;
      //Home 
    case "beds":
      window.location = "hbeds.php";
      break;
    case "cooking items":
      window.location = "hcookingitems.php";
      break;
    case "gardening items":
      window.location = "hgardeningitems.php";
      break;
    case "utensils":
      window.location = "hutensils.php";
      break;
    case "Sofas":
      window.location = "hsofa.php";
      break;
      //electronics
    case "ac":
      window.location = "eac.php";
      break;
    case "laptops":
      window.location = "elaptops.php";
      break;
    case "tv":
      window.location = "etv.php";
      break;
    case "mobiles":
      window.location = "emobiles.php";
      break;
    case "refrigirators":
      window.location = "erefrigirator.php";
      break;
    default:
      window.location = "ONLINESHOPPING.php";
  }
}
</script>

</html>