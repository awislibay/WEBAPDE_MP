<html>
<head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="css/register.css" />
    </head>
<style>

.catBird{
  position: absolute;
  top: 170px;
  right:1300px;
  width: 550px;
  height: 512px;
}

.karl{
  position: absolute;
  top: 200px;
  right:720px;
  width: 512px;
  height: 512px;
}

.kiwi{
	position: absolute;
  top: 250px;
  right:100px;0
  width: 412px;
  height: 412px;
}

.choose {
  position: absolute;
  right:780px;
  top:-50px;
  font-size: 100px;
}

.adopt {
	position: absolute;
	bottom: 100px;
	left:400px;
	background-color: #990000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.image-hover-highlight {
    -webkit-transition: all 0.50s;
    transition: all 0.50s;
    &:hover {
        border: 1px solid gray;
        filter: brightness(130%);
        -webkit-filter: brightness(130%);
        -moz-filter: brightness(130%);
        -o-filter: brightness(130%);
        -ms-filter: brightness(130%);
        -webkit-transition: all 0.50s;
        transition: all 0.50s;
    }
}

</style>

<body background = "source/bg.jpg">

<?php
            include ('auth.php');
            include ('db.php');

            $error = "An Error occurred. Plese try again later.";
            
            // Connect to DB
            if(isset($_POST['karl'])) {

                // Get values
                $petName = $_POST['karl'];
                
                 if($_SESSION['userID'] != NULL)
                    $userID = $_SESSION['userID'];


                 $sql = "SELECT * FROM users";
                 $result = $con->query($sql);

                
                  if($result->num_rows > 0){
                     $row = $result->fetch_assoc();
                    // SQL
                    $sql = "UPDATE users SET pet = '$petName' WHERE userID = '$userID'";
                    $result = $con->query($sql);
                    
                    // Check SQL
                    if ($result === TRUE) {
                        echo "Congratulations! You now have a pet.<br>";
                        // Go to another page
                        header("Location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    } 
                  }
                       
            }
            if(isset($_POST['catBird'])) {

                // Get values
                $petName = $_POST['catBird'];
                
                 if($_SESSION['userID'] != NULL)
                    $userID = $_SESSION['userID'];


                 $sql = "SELECT * FROM users";
                 $result = $con->query($sql);

                
                  if($result->num_rows > 0){
                     $row = $result->fetch_assoc();
                    // SQL
                    $sql = "UPDATE users SET pet = '$petName' WHERE userID = '$userID'";
                    $result = $con->query($sql);
                    
                    // Check SQL
                    if ($result === TRUE) {
                        echo "Congratulations! You now have a pet.<br>";
                        // Go to another page
                        header("Location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    } 
                  }
                       
            }
            if(isset($_POST['kiwi'])) {

                // Get values
                $petName = $_POST['kiwi'];
                
                 if($_SESSION['userID'] != NULL)
                    $userID = $_SESSION['userID'];


                 $sql = "SELECT * FROM users";
                 $result = $con->query($sql);

                
                  if($result->num_rows > 0){
                     $row = $result->fetch_assoc();
                    // SQL
                    $sql = "UPDATE users SET pet = '$petName' WHERE userID = '$userID'";
                    $result = $con->query($sql);
                    
                    // Check SQL
                    if ($result === TRUE) {
                        echo "Congratulations! You now have a pet.<br>";
                        // Go to another page
                        header("Location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    } 
                  }
                       
            }
// Notice: Undefined variable: _SESSION in C:\xampp\htdocs\htdocs_webMP\petSelector.php on line 111

// Notice: Undefined index: karl in C:\xampp\htdocs\htdocs_webMP\petSelector.php on line 119

// Notice: Undefined variable: userID in C:\xampp\htdocs\htdocs_webMP\petSelector.php on line 121
// Error: UPDATE users SET pet = '' WHERE userID = ''
       
             
  ?>

	<div class = "choose">
		  <p style="color:#990000"> CHOOSE! </p>
	</div>
  <form action="" method="post">
	   <div class = "image-hover-highlight">
	     <input type="image" src = "petSprites/catbird.png" id ="catBird" name="catBird" class="catBird" value="catBird" onclick="catbird()">
	     <input type="image" src = "petSprites/Karl.png" id ="karl" name="karl"  class="karl" value="karl" onclick="Karl()">
	     <input type="image" src = "petSprites/Kiwi.png" id ="kiwi" name="kiwi" class="kiwi" value="kiwi" onclick= "Kiwi()">
     </div>
    <input type="submit" name="submit" class="adopt" value="Adopt!" />
  </form>

  <script>
    function catbird(){
      var chosen = "catbird";
    }
    function Karl(){
      var chosen = "Karl";
    }
    function Kiwi(){
      var chosen = "Kiwi";
    }
  </script>


</body>
</html>