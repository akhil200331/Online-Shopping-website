var wb = document.getElementById("womenblock"); //womens block id
var mb = document.getElementById("menblock"); //mens block id
var hb = document.getElementById("homeblock"); //home block id
var eb = document.getElementById("electronicblock"); //Electronics block id
var pb = document.getElementById("profileblock"); //profileblock
var oh = document.getElementById("home_items");
var ow = document.getElementById("women_items");
var om = document.getElementById("men_items");
var oe = document.getElementById("EA_items");
var op = document.getElementById("pROFILE_items");
var itemclick = "";
// Women Block
function showw() {
  ow.style.visibility = "visible";
  ow.addEventListener("mouseover", showw);
  ow.addEventListener("mouseout", hidew);
}
function hidew() {
  ow.style.visibility = "hidden";
}
wb.addEventListener("mouseover", showw);
//Women Block

// Men Block
function showm() {
  om.style.visibility = "visible";
  om.addEventListener("mouseover", showm);
  om.addEventListener("mouseout", hidem);
}
function hidem() {
  om.style.visibility = "hidden";
}
mb.addEventListener("mouseover", showm);
//Men Block

// Home Block
function showh() {
  oh.style.visibility = "visible";
  oh.addEventListener("mouseover", showh);
  oh.addEventListener("mouseout", hideh);
}
function hideh() {
  oh.style.visibility = "hidden";
}
hb.addEventListener("mouseover", showh);
//Home Block

// Electronics Block
function showe() {
  oe.style.visibility = "visible";
  oe.addEventListener("mouseover", showe);
  oe.addEventListener("mouseout", hidee);
}
function hidee() {
  oe.style.visibility = "hidden";
}
eb.addEventListener("mouseover", showe);
//Electronics Block

// Profile Block
function showp() {
  op.style.visibility = "visible";
  op.addEventListener("mouseover", showp);
  op.addEventListener("mouseout", hidep);
}
function hidep() {
  op.style.visibility = "hidden";
}
pb.addEventListener("mouseover", showp);
//Profile Block

// when we click items in container items then div should get disappear
//Mens visibility
function mjeans() {
  itemclick = "mjeans";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function mhoodies() {
  itemclick = "mhoodies";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function mshoes() {
  itemclick = "mshoes";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function mwallets() {
  itemclick = "mwallets";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function mwatches() {
  itemclick = "mwatches";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
//women visibilty ans setting database to page
function wsarees() {
  itemclick = "wsarees";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function wchudidarss() {
  itemclick = "wchudidars";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function wmodernwear() {
  itemclick = "wmodernwear";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function wwallets() {
  itemclick = "wwallets";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function wwatches() {
  itemclick = "wwatches";
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
//Home appliances visibility
function hbeds() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function hutensils() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function hsofa() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function hgardeningitems() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function hcookingitems() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
//Electronics
function etv() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function elaptops() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function emobiles() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function eacs() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
function erefrigirators() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
//profile home clicking
function hideallifclick() {
  op.style.visibility = "hidden";
  oe.style.visibility = "hidden";
  om.style.visibility = "hidden";
  ow.style.visibility = "hidden";
  oh.style.visibility = "hidden";
}
