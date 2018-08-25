<?php
//include auth.php file on all secure pages
  include('auth.php');
  include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">PROFILE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="pokedex.php">Pokedex</a>
          </li>
        </ul>
        <?php
              if($_SESSION['trainerID'] != NULL)
              $trainerID = $_SESSION['trainerID'];
              // SQL
              $sql = "SELECT trainerGender FROM trainer t 
                WHERE t.trainerID LIKE $trainerID ";
              $result = $con->query($sql);

              if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $trainerGender = $row['trainerGender'];
              }

          ?>
          <form class="form-inline mt-2 mt-md-0">
            <a class ="nav-link" href="logout.php" style="color:#fff">Logout</a>
            <img class="" src="sources/users/<?php echo $trainerGender?>.png" alt="" width="65" height="65" href ="#">
          </form>
      </div>
    </nav>

    <main role="main">

      <?php
          if($_SESSION['trainerID'] != NULL)
              $trainerID = $_SESSION['trainerID'];
          else
              header("Location: login.php");

          // SQL
          $sql = "SELECT * FROM trainer t
            WHERE t.trainerID LIKE $trainerID";
          $result = $con->query($sql);

          if($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $trainerUsername = $row['trainerUsername'];
              $highscore = $row['highscore'];
              $lowscore = $row['lowscore'];
              $accumulatedScore = $row['accumulatedScore'];
          }
          else{

          }

      ?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3"><img class="" src="sources/users/<?php echo $trainerGender?>.png" alt="" width="250" height="250" ><?php echo $trainerUsername?></h1>
          <h3>Your Highest Score is : <?php echo $highscore?></h3>

          <h3>Your Lowest Score is : <?php echo $lowscore?></h3>

          <h3>Your Accumulated Score is : <?php echo $accumulatedScore?></h3>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
            <?php
            if($_SESSION['trainerID'] != NULL)
            $trainerID = $_SESSION['trainerID'];
            // SQL
            $sql = "SELECT * FROM trainer t, pokedex p, pokemon poke
              WHERE t.trainerID LIKE $trainerID 
                AND t.trainerID = p.trainerID
                AND p.pokemonID = poke.pokemonID
                ORDER BY p.timesCaught DESC LIMIT 1";
            $result = $con->query($sql);

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $pokemonName = $row['pokemonName'];
            }
            else{
              $pokemonName = "None";
            }

        ?>
          <div class="row">
            <img class="" src="sources/pokemon/<?php echo $pokemonName?>.png" alt="" width="200" height="200" href ="#">
            <div class="col-md-4">
              <p>Your favorite Pokemon is <?php echo $pokemonName; ?> </p>
            </div>
          </div>

          <?php
            if($_SESSION['trainerID'] != NULL)
            $trainerID = $_SESSION['trainerID'];

            $sql = "SELECT * FROM trainer t, pokedex p, pokemon poke
              WHERE t.trainerID LIKE $trainerID 
                AND t.trainerID = p.trainerID
                AND p.pokemonID = poke.pokemonID
                ORDER BY p.timesCaught LIMIT 1";
            $result = $con->query($sql);

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $pokemonNameLeast = $row['pokemonName'];
            }
            else{
              $pokemonNameLeast = "None";
            }

        ?>

          <div class="row">
            <img class="" src="sources/pokemon/<?php echo $pokemonNameLeast?>.png" alt="" width="200" height="200" href ="#">
            <div class="col-md-4">
              <p>Your Least favorite Pokemon is <?php echo $pokemonNameLeast; ?> </p>
            </div>
          </div>
        </div> <!-- /container -->
    </main>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Deadalus, Inc. </a></p>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="css/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="css/holder.min.js"></script>
  </body>
</html>
