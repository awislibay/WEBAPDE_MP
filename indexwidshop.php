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
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.controller_img {
  background:url(WEBBY/icon2.png);
  background-size: 200px 200px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right: 40px;
  width: 256px;
  height: 256px;
}

.coin_img {
  background:url(WEBBY/coins.png);
  background-size: 80px 80px;
  background-repeat:no-repeat;
  position: absolute;
  top: 10px;
  right:90px;
  width: 80px;
  height: 80px;
}

.ball_img {
  background:url(WEBBY/Ball.png);
  background-size: 200px 200px;
  background-repeat:no-repeat;
  position: absolute;
  top: 720px;
  right:1600px;
  width: 256px;
  height: 256px;
}

.bowl_img {
  background:url(WEBBY/Bowl.png);
  background-size: 306px 178px;
  background-repeat:no-repeat;
  position: absolute;
  top: 750px;
  right:1000px;
  width: 612px;
  height: 356px;
}

.dog_gif {
  background:url(WEBBY/Pug.gif);
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
  background: url(WEBBY/hoverBtn.png);
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

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
    overflow: scroll;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #B13939;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #B13939;
    color: white;
}

</style>
</head>
<body background="WEBBY/LivingRoomBG.png">

<div id="mymenu" class="menu">
  <div class = "profile-image" style="float:left;">
    <span class = "overlay"style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="WEBBY/HOUSElogo.png" style="position:absolute,width:123px;height:125px;"></span>
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
     <a class=button id= "myBtn">Shop </a>
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Shop</h2>
            </div>
            <div class="modal-body">
              

              <?php 
             
              require('connection.php');
              include('shopheader.php');

              $sql = "SELECT * FROM food";
              $res = mysqli_query($connection, $sql);

              $sql_2 = "SELECT * FROM toy";
              $res_2 = mysqli_query($connection, $sql_2);

           
              ?>

              <div class="container">
                <?php while($r = mysqli_fetch_assoc($res)){ ?>
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                <img src="<?php echo $r['image']; ?>" alt="<?php echo $r['name'] ?>">
                <div class="caption">
                  <h3><?php echo $r['name'] ?></h3>
                  <p><?php echo $r['price'] ?></p>
                  <p><a href="addtocart.php?id=<?php echo $r['foodID']; ?>" class="btn btn-primary" role="button">BUY</a></p>
                </div>
                </div>
                </div>
                <?php } ?>

                <?php while($r = mysqli_fetch_assoc($res_2)){ ?>
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                <img src="<?php echo $r['image']; ?>" alt="<?php echo $r['name'] ?>">
                <div class="caption">
                  <h3><?php echo $r['name'] ?></h3>
                  <p><?php echo $r['price'] ?></p>
                  <p><a href="addtocart.php?id=<?php echo $r['toyID']; ?>" class="btn btn-primary" role="button">BUY</a></p>
                </div>
                </div>
                </div>
                <?php } ?>

              </div>

              <?php include('footer.php'); ?>
              </div>
            <div class="modal-footer">
            
          </div>
        </div>
</div>
      </div> </ul>
  <ul><a href="#">Settings</a> </ul>
  <ul><a href="#">About</a> </ul> </ul>
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>


<a href="miniGame.html">
 <ul class = "dropdown">
  <div class="dropdown-content">
        <a href="#">Mini Game 1</a>
        <a href="#">Mini Game 2</a>
<div id="controller_img" class="controller_img" ></div>
</a>

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
  <p class="score">Score: <span id="score_value">0</span></p>
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

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
     
</body>
</html> 
