<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="css/register.css" />
    </head>

    <body>
        <?php

            include ('db.php');

            $error = "An Error occurred. Please try again later.";

            // Connect to DB
            if(isset($_POST['submit'])) {

                // Get values
                $username = $_POST['username'];
                $password = $_POST['password'];
                $birthday = date('Y-m-d', strtotime($_POST['birthday']));

                $sql = "SELECT * FROM users 
                        WHERE username LIKE '$username'";
                $result = $con->query($sql);

                // If username is taken
                

                    // SQL
                    $sql = "INSERT INTO users (username, birthday, password, money)
                            VALUES ('$username', '$birthday', '$password', 500)";
                    
                    // Check SQL
                    if ($con->query($sql) === TRUE) {
                        echo "New account created successfully<br>";
                        // Go to another page
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }

                          
                $sql = "SELECT * FROM users
                        WHERE username LIKE '$username' AND password LIKE '$password' ";    
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $userID = $row['userID'];

                    // Set values to session.
                    session_start();
                    $_SESSION['userID'] = $userID;
                    $sql = "INSERT INTO player (userID,inventoryID ,money)
                    VALUES ( $userID,$userID,500)";
                    if ($con->query($sql) === TRUE) {
                        echo "New account created successfully<br>";
                        // Go to another page
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }
                    // Go to another page
                    header("Location: petSelector.php");

                }

            }

        ?>
        <div class="form">
            <h1>Registration</h1>
            <form name="registration" action="" method="post">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required /> 
                <input type="date" name="birthday" min="1990-12-31" required>
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
    </body>
</html>