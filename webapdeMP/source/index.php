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
    height: 100%;
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
    right: 500px;
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
  background:url(icon2.png);
  background-size: 200px 200px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right: 40px;
  width: 256px;
  height: 256px;
}

.coin_img {
  background:url(C:/Users/James/Documents/GitHub/WEBAPDE_MP/webapdeMP/sourcecoins.png);
  background-size: 80px 80px;
  background-repeat:no-repeat;
  position: absolute;
  top: 10px;
  right:90px;
  width: 80px;
  height: 80px;
}

.ball_img {
  background:url(C:/Users/James/Documents/GitHub/WEBAPDE_MP/webapdeMP/Ball.png);
  background-size: 200px 200px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right:1600px;
  width: 256px;
  height: 256px;
}

.bowl_img {
  background:url(C:/Users/James/Documents/GitHub/WEBAPDE_MP/webapdeMP/Bowl.png);
  background-size: 306px 178px;
  background-repeat:no-repeat;
  position: absolute;
  top: 750px;
  right:1000px;
  width: 612px;
  height: 356px;
}

.dog_gif {
  background:url(Pug.gif);
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
  background: url(hoverBtn.png);
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body background="LivingRoomBG.png">

<div id="mymenu" class="menu">
  <div class = "profile-image" style="float:left;">
    <span class = "overlay"style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="C:/Users/James/Documents/GitHub/WEBAPDE_MP/webapdeMP/HOUSElogo.png" style="position:absolute,width:123px;height:125px;"></span>
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
    <a href="javascript:void(0)" class="dropbtn">Inventory </a>
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
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>

<div class = "dropup">
<div id="controller_img" class="controller_img" ></div>
<div class = "dropup-content">
  <a href="#">Mini Game 1</a>
  <a href="#">Mini Game 2</a>
</div> </div> 

<a href="#">
  <div id ="ball_img" class="ball_img"></div>
</a>

<a href="#">
  <div id ="bowl_img" class="bowl_img"></div>
</a>

<a href="#">
  <div id ="dog_gif" class="dog_gif"></div>
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
