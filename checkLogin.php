<?php
	session_start(); //start a session 
    $username = ""; // variable to hold the username
    $ID = "";   // variable to hold the user ID value
    $errorMessage = ""; // variable to hold error message value

        if (isset($_POST['submit']) || isset($_POST['register'])) { //submit or register button has been clicked
            $username = $_POST['username']; //read in the value the user has entered for the username
            $username = htmlspecialchars($username); //prevent cross site scripting errors
            $username = strip_tags($username); //prevent cross site scripting errors
            $username = trim($username);       //trim any whitespaces in the input value
			//using filters to sanitise $username, i.e. remove any HTML characters surronding it
			filter_var($username, FILTER_SANITIZE_STRING);
						
            $ID = $_POST['ID'];
            $ID = htmlspecialchars($ID);
            $ID = strip_tags($ID);
            $ID = trim($ID);
			
			$mySQL_Server = "127.0.0.1";  // IP address of the database
			$db_userName = "root";  // default username for MySQL
			$db_password = "";     // default password for MySQL
			$database = "myDB";  // name of the database containing user credetials
			
			/* Connect to the database on MySQL server and store the result of the function 
			   in a variable called $conn */
			$conn = mysqli_connect($mySQL_Server, $db_userName, $db_password, $database);
			
			// the database is not connected
			if (mysqli_connect_errno($conn))
			{
				$errorMessage = "Error connecting to database";
				$_SESSION['error'] = $errorMessage;  // set the value of the errorMessage session variable
				$_SESSION['login'] = "";  // set the value of the login session variable to ""
				
				// Redirect to login pageand send error message
				header('Location: loginForm.php');  // redirect user to login page
			}
			else {
				if (isset($_POST['submit'])) {
					// Query the database
					$SQL_Query = "SELECT * FROM loginTable WHERE uname = '$username' AND id = $ID"; //
					if ($result = mysqli_query($conn, $SQL_Query)){
						$num_rows = mysqli_num_rows($result);
						if ($num_rows > 0){
							/* if there is 1 or more rows of data, it means that there is a user details 
							in the database matching those entered by the client on the browser's form */
							// login successful
							$errorMessage = "Login unsuccessdul";
							$_SESSION['error'] = $errorMessage;
							$_SESSION['login'] = "1"; // Set the value of the login session to 1
							$_SESSION['username'] = $username;
							header('Location: home.php');  // Redirect the user to home.php page
						} else {
							$errorMessage = "Invalid login details";
							$_SESSION['error'] = $errorMessage; // set the value of errorMessage session variable 
							$_SESSION['login'] = ""; // set the value of the login session variable to ""
							//Redirect to login page and send error message
							header('Location: loginForm.php'); // Redirect the user to the login page
						}
					}
					else {
						print($SQL_Query);
						$errorMessage = "Invalid SQL query";
						$_SESSION['error'] = $errorMessage; //Set the value of the errorMessage session variable
						$_SESSION['login'] = ""; // set the value of the login session variable to ""
						//Redirect to login page and send error message
						header('Location: loginForm.php'); // Redirect the user to the login page
					}
				}
				else { // isset ($_POST['register']), register button has been clicked
					print("register button clicked");
					$SQL_Query = 'SELECT * FROM user WHERE username="'.$_POST['username'].'"';  // Select the input the user has posted in the username variable
					if($username == "")
					{
						$errorMessage =  'No username filled in';
						$_SESSION['error'] = $errorMessage;
						$_SESSION['register'] = "";
						header('Location: loginForm.php'); // Redirect the user to the login page
					}
					else if($result = mysqli_query($conn, $SQL_Query)){
						$num_rows = mysqli_num_rows($result);
						if ($num_rows > 0){
							$errorMessage = 'This username does already exists!';  // Set the value of the errorMessage variable to this string
							$_SESSION['error'] = $errorMessage; //Set the value of the errorMessage session variable
							$_SESSION['register'] = ""; // set the value of the register session variable to ""
							//Redirect to login page and send error message
							header('Location: loginForm.php'); // Redirect the user to the login page
					}}
					else if($ID == "") // if the ID is empty
					{
						$errorMessage = 'No password filled in'; // Set the value of the errorMessage variable to this string
						$_SESSION['error'] = $errorMessage; //Set the value of the errorMessage session variable
						$_SESSION['register'] = ""; // set the value of the register session variable to ""
						//Redirect to login page and send error message
						header('Location: loginForm.php'); // Redirect the user to the login page
					}
					else {
						$SQL_Query = 'INSERT INTO loginTable (uname, id) VALUES ("'.$username.'", "'.$ID.'")';
						mysqli_query($conn,$SQL_Query);
						$errorMessage = 'Your account has been created, you can now login.';
						$_SESSION['error'] = $errorMessage;
						$_SESSION['register'] = "1";
						header('Location: loginForm.php'); // Redirect the user to the login page
					}

				}
					
			}
			// Close the connection to the database
			mysqli_close($conn);
		}
	
?>