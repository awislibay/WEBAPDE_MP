<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/login.css" />
	</head>

	<body>
		<?php
			// Clear a session if it exists.
			if(!isset($_SESSION)) {
				session_start();
				session_destroy();
			}

			// Error message.
			$error = NULL;

			// When 'log-in" is clicked
			if(isset($_POST['submit'])) {
				
				require ('db.php');
				// Get values from form.
				$trainerUsername = $_POST['trainerUsername'];
				$trainerPassword = $_POST['trainerPassword'];
				
				$sql = "SELECT * FROM trainer
						WHERE trainerUsername LIKE '$trainerUsername' AND trainerPassword LIKE '$trainerPassword' ";	
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
					$row = $result->fetch_assoc();
					$trainerID = $row['trainerID'];

					// Set values to session.
					session_start();
					$_SESSION['trainerID'] = $trainerID;

					// Go to another page
					header("Location: index.php");

				}
				else {
					$error = "Incorrect username or password!";
				}

			}
			
		?>
		<div class="form">
			<h1>Log In</h1>
				<form action="" method="post" name="login">
					<input type="text" name="trainerUsername" placeholder="Username" required />
					<input type="password" name="trainerPassword" placeholder="Password" required />
					<input name="submit" type="submit" value="Login" />
				</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
	</body>
</html>