<!DOCTYPE html>
<html>
    <head>
		<title>Login page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<style>
			h1 {
			font-family: "arial"; 
			text-align: left;
			font-size:20px; 
			color:black;
			}
		</style>
		<script src="myJavaScript.js"></script>
	</head>
    <body>
		<div class="col-2"><img src="NameBanner.JPG" alt="Banner " /></div>
		<h1>Login Page</h1>

        <form name ="form1" method = "post" action = "checkLogin.php">
            <p>Username <input type = "text" name = "username" value = "" maxlength="20" id="username"/></p>
            <p>ID <input type = "text" name = "ID" value = "" maxlength="5" id="username"/></p>
            <p><input type = "submit" name = "submit" value = "login" id = "login"/></p>
			<p><input type = "submit" name = "register" value = "register"/></p>
        </form>

            <?PHP
                if (isset($_SESSION['error'])) { // if there is an errorMessage session variable set
                   print($_SESSION['error']); //print the errorMessage session variable value
                   unset($_SESSION['error']); //unset the errorMessage variable
                }
            ?>
    </body>
</html>
