<?php
//include auth.php file on all secure pages
  include('auth.php');
  include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

ul{
    float:left;
}

.menu{
  overflow: hidden;
  width: 10%;
  float: left;
  height: 200px;
  top: -8px;
  transition: .5s;
  display: flex;
  justify-content: left;
}

.sidenav {
    height:25%;
    width: 100%;
    position: absolute;
    z-index: 1;
    top: 10px;
    background-color: transparent;
    display: flex;
    overflow: hidden;
    text-align:center;
}

.sidenav a {
    padding: 5px 50px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: inline-flex;

}

.dropdown {
  float: left;
  overflow: hidden;
}

.sidenav a:hover{
    color: #cc0000;
}

.sidenav .closebtn {
    position:absolute;
    top: 10px;
    right: 200px;
    font-size: 36px;
    margin-left: 50px;

}

ul a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}

ul.dropdown {
    display: inline-block;
}


.dropdown-content {
    display: none;
    position: relative;
    background-color: #f9f9f9;
    min-width: 50px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: lef
}

.dropup {
  float: left;
}

.dropup-content {
    display: none;
    position: relative;
    background-color: #f9f9f9;
    min-width: 200px;
    bottom:10px;
    top:637px;
    left:1400px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropup-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropup-content a:hover {background-color: #f9f9f9}

.dropup:hover .dropup-content {
     display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.controller_img {
  background:url(source/icon2.png);
  background-size: 200px 200px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right: 40px;
  width: 256px;
  height: 256px;
}

.coin_img {
  background:url(source/coins.png);
  background-size: 200px 90px;
  background-repeat:no-repeat;
  position: absolute;
  top: 5px;
  right:50px;
  width: 200px;
  height: 100px;
}

.ball_img {
  background-size: 400px 400px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right:1550px;
  width: 256px;
  height: 256px;
}

.bowl_img {
  background-repeat:no-repeat;
  position: absolute;
  top: 750px;
  right:1150px;
  width: 300px;
  height: 256px;
}
.happiness{
  display: inline-block;
  width: 240px;
  font-size: 20px;
  color: #FFFFFF;
  text-align: right;
}
.hunger{
  display: inline-block;
  width: 240px;
  font-size: 20px;
  color: #FFFFFF;
  text-align: right;
    }
.varDisplay {
  position: absolute;
  top: 400px;
  right:900px;
  font-size: 30px;
} 

<?php
              if($_SESSION['userID'] != NULL)
              $userID = $_SESSION['userID'];
              // SQL
              $sql = "SELECT pet FROM users u 
                WHERE u.userID LIKE $userID ";
              $result = $con->query($sql);

              if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $pet = $row['pet'];
              }

?>
.pet {
  background:url("petSprites/<?php echo $pet?>.png");
  background-size: 500px 281px;
  background-repeat:no-repeat;
  position: absolute;
  top: 650px;
  right:600px;
  width: 500px;
  height: 281px;
}
.profile-image:hover .overlay {
  position:absolute;
  width: 123px;
  height: 125px;
  z-index: 100;
  background: url(source/hoverBtn.png);
  cursor: pointer;
}

.score{
  display: inline-block;
  width: 240px;
  font-size: 20px;
  color: #FFFFFF;
  text-align: right;
    }
.score_value{
   font-size: inherit;
    }
#pop{
 height:380px;
 width:470px;
 position:fixed;
 bottom:20%;
 right:40%;
 border:2px solid;
 padding:10px;
 background:#fff;
 border-radius:9px;
 display:none;
}
#close{
 right:5px;
 top:5;
 float:right;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body background="source/LivingRoomBG.png">

<div id="mymenu" class="menu">
  <div class = "profile-image" style="float:left;">
    <span class = "overlay"style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="source/HOUSElogo.png" style="position:absolute,width:123px;height:125px;"></span>
  </div>
<div id="mySidenav" class="sidenav">
<ul>
  <ul class = "dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile </a>
      <div class="dropdown-content">
        <a href="#">View Profile</a>
        <a href="#">Edit Profile</a>
      </div> </ul>
  <ul class = "dropdown">
    <a href="javascript:void(0)" class="dropbtn">Pets </a>
      <div class="dropdown-content">
        <a href="#">Pet 1</a>
        <a href="#">Pet 2</a>
      </div> </ul>
  <ul class = "dropdown">
    <a onclick="document.getElementById('pop').style.display='block'">Inventory</a>
      <div class="dropdown-content">
        <a href="#">View Toys</a>
        <a href="#">View Food</a>
      </div> </ul>
  <ul class = "dropdown">
     <a href="javascript:void(0)" class="dropbtn">Shop </a>
      <div class="dropdown-content">
        <a href="#">Buy Toys</a>
        <a href="#">Buy Food</a>
      </div> </ul>
  <ul><a href="#">Settings</a> </ul>
  <ul><a href="#">About</a> </ul> </ul>
  <ul><a href ="logout.php">Logout</a> </ul> </ul>
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>

<div class="varDisplay">
<p> Happiness: <a id = "happiness">0</a> </p>
<p> Hunger: <a id = "hunger">0</a> </p>
</div>

<div id = "pop">
    <button id="close" onclick="document.getElementById('pop').style.display = 'none'">X</button>
      <h2> Food </h2> 
      <button id="iFood"onclick="feedFromInventory(2)" >Apple</button>
      <button id="iFood"onclick="feedFromInventory(3)">Ice Cream</button>
      <h2> Toys </h2>
      <button id="Bone"onclick="playFromInventory(2)">Bone</button>
      <button id="Stick"onclick="playFromInventory(3)">Stick</button>
      </ul>
</div>

<div class = "dropup">
<div id="controller_img" class="controller_img" ></div>
<div class = "dropup-content">
  <a href="#">Mini Game 1</a>
  <a href="#">Mini Game 2</a>
</div> </div> 

<input type="image" src = "source/Ball.png" id ="ball_img" class="ball_img" onclick="toyFunction()">


<input type="image" src = "source/Bowl.png" id ="bowl_img" class="bowl_img" onclick="feedFunction()">

<a href="#">
  <div id ="pet" class="pet"></div>
</a>

<a href="#">
  <div id ="coin_img" class="coin_img"></div>
</a>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
var food;
var foodType;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

var pet,food,toy;
var happiness = 0,
    hunger = 0;

function feedFromInventory(add) {
    hunger = hunger + add;
    document.getElementById("hunger").innerHTML = hunger;
}

function playFromInventory(add) {
  happiness = happiness + add;
  document.getElementById("happiness").innerHTML = happiness;
}

function feedFunction() {
  hunger++;
  document.getElementById("hunger").innerHTML = hunger;
}

function toyFunction() {
  happiness++;
  document.getElementById("happiness").innerHTML = happiness;
}


</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>
     
</body>
</html> 
