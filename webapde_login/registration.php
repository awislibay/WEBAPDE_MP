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
                if($result->num_rows > 0) {
                    $error = "<error>Username has been taken :c.</error><br><br>";
                }
                else if($result->num_rows == 0) {

                    // SQL
                    $sql = "INSERT INTO users (username, birthday, password)
                            VALUES ('$username', '$birthday', '$password')";
                    
                    // Check SQL
                    if ($con->query($sql) === TRUE) {
                        echo "New account created successfully<br>";
                        // Go to another page
                        header("Location: login.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }

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