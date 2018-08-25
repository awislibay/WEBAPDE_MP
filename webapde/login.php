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
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$sql = "SELECT * FROM users
						WHERE username LIKE '$username' AND password LIKE '$password' ";	
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
					$row = $result->fetch_assoc();
					$userID = $row['userID'];

					// Set values to session.
					session_start();
					$_SESSION['userID'] = $userID;

					// Go to another page
					header("Location: webby\index.html");

				}
				else {
					$error = "Incorrect username or password!";
				}

			}
			
		?>
		<div class="form">
			<h1>Log In</h1>
				<form action="" method="post" name="login">
					<input type="text" name="username" placeholder="Username" required />
					<input type="password" name="password" placeholder="Password" required />
					<input name="submit" type="submit" value="Login" />
				</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
	</body>
</html>