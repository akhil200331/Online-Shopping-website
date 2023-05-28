<!--Only Header-->

<html>

<head>
  <link rel="icon" type="image/x-ixon" href="icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;800&family=Rubik:wght@300;400;500;600&display=swap");

  .header-bar {
    margin: 0;
    padding: 20px 0 0 5px;
    width: 100%;
    height: 120px;
    background-color: #fff;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 5%);
  }

  .header-bar div {
    text-align: center;
    display: inline-block;
    padding-top: 20px;
    width: max-content;
  }

  div a {

    padding: 38px 0 5px 0;
    margin-left: 0.7em;
  }

  .Men,
  .Women,
  .Home,
  .EA {
    justify-content: center;
    text-decoration: none;
    color: #000;
    font-family: sans-serif;
    font-weight: bolder;
    font-size: 1.5em;
  }

  .Men:hover {
    border-bottom: 4px solid blue;
  }

  .Women:hover {
    border-bottom: 4px solid rgb(239, 32, 146);
  }

  .Home:hover {
    border-bottom: 4px solid rgb(223, 98, 3);
  }

  .EA:hover {
    border-bottom: 4px solid green;
  }

  #searchi {
    background-color: rgba(128, 126, 126, 0.547);
    height: 40px;
    width: 500px;
    border-radius: 3px;
    padding-left: 5em;
    margin-left: 5em;
  }

  #sear {
    color: whitesmoke;
    padding-top: 3em;
    padding-left: 3em;
    position: absolute;
  }

  #searchi::placeholder {
    font-size: 18px;
    padding-top: 18px;
  }

  #usericon {
    position: absolute;
    color: green;
    padding-left: 3.9em;
    padding-top: -6em;
    margin-top: 1.8em;
  }

  .Profile {
    justify-content: center;
    text-decoration: none;
    color: #000;
    font-family: sans-serif;
    font-weight: bolder;
    font-size: 1.1em;
    padding-left: 1.4em;
  }

  #wishlisticon {
    position: absolute;
    color: green;
    padding-left: 5em;
    padding-bottom: 45em;
    color: red;
    border: none;
    margin-top: 1.8em;
  }

  .Wishlist {
    justify-content: center;
    text-decoration: none;
    color: #000;
    font-family: sans-serif;
    font-weight: bolder;
    font-size: 1.1em;
    padding-top: 0.8em;
    padding-left: 2em;
  }

  /*Cart Block Design*/
  #carticon {
    position: absolute;
    color: green;
    padding-left: 4em;
    padding-bottom: 50em;
    color: black;
    border: none;
    margin-top: 1.8em;
  }

  .Cart {
    justify-content: center;
    text-decoration: none;
    color: #000;
    font-family: sans-serif;
    font-weight: bolder;
    font-size: 1.1em;
    padding-top: 0.8em;
    padding-left: 2em;
  }

  .Profile:hover {
    border-bottom: 4px solid yellow;
  }

  .Wishlist:hover {
    border-bottom: 4px solid orange;
  }

  .Cart:hover {
    border-bottom: 4px solid paleturquoise;
  }

  #men_items {
    background-color: whitesmoke;
    width: 200px;
    height: 300px;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 20%);
    margin-left: 4em;
    margin-top: -2em;
    visibility: hidden;
    z-index: 1;
    position: relative;
  }

  #men_items a {
    color: purple;
    text-decoration: none;
    line-height: 3em;
    padding-left: 2.5em;
    font-size: 15px;
  }

  #men_items h4 {
    text-align: center;
    color: blue;
  }

  #men_items a:hover {
    font-weight: bold;
  }

  /*Womens items*/
  #women_items {
    background-color: whitesmoke;
    width: 200px;
    height: 300px;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 20%);
    margin-left: 11em;
    margin-top: -20em;
    visibility: hidden;
    z-index: 1;
    position: fixed;
  }

  #women_items a {
    color: purple;
    text-decoration: none;
    line-height: 3em;
    padding-left: 2.5em;
    font-size: 15px;
  }

  #women_items h4 {
    text-align: center;
    font-weight: bold;
    color: palevioletred;
  }

  #women_items a:hover {
    font-weight: bold;
  }

  /*Home items*/
  #home_items {
    background-color: whitesmoke;
    width: 200px;
    height: 300px;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 20%);
    margin-left: 18em;
    margin-top: -20em;
    visibility: hidden;
    z-index: 1;
    position: fixed;
  }

  #home_items a {
    color: purple;
    text-decoration: none;
    line-height: 3em;
    padding-left: 2.5em;
    font-size: 15px;
  }

  #home_items h4 {
    text-align: center;
    color: orangered;
  }

  #home_items a:hover {
    font-weight: bold;
  }

  /*Elecronics items*/
  #EA_items {
    background-color: whitesmoke;
    width: 200px;
    height: 300px;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 20%);
    margin-left: 22em;
    margin-top: -20em;
    visibility: hidden;
    z-index: 1;
    position: fixed;
  }

  #EA_items a {
    color: purple;
    text-decoration: none;
    line-height: 3em;
    padding-left: 2.5em;
    font-size: 15px;
  }

  #EA_items h4 {
    text-align: center;
    color: green;
  }

  #EA_items a:hover {
    font-weight: bold;
  }

  /*Profile items*/
  #pROFILE_items {
    background-color: whitesmoke;
    width: 200px;
    box-shadow: 0 4px 12px 0 rgb(0 0 0 / 20%);
    margin-left: 75em;
    visibility: hidden;
    margin-top: -20em;
    z-index: 1;
    position: fixed;
  }

  #pROFILE_items a {
    color: purple;
    text-decoration: none;
    line-height: 3em;
    padding-left: 2.5em;
    font-size: 15px;
  }

  #pROFILE_items h4 {
    text-align: center;
    color: green;
  }

  #pROFILE_items a:hover {
    font-weight: bold;
  }



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
</head>

<body>
  <!--Header Elements I.E., Horizontal drawerr-->
  <header class="header-bar">

    <div class="block-elements">
      <img class="image" src="icon.png" width="60px" />
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