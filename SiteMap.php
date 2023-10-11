<?php
session_start(); //start a session

if(isset($_SESSION['login']) && $_SESSION['login']==1) //ensure the user has logged in by checking that the
                                                       //login session variable is set & its value is 1
{
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hobbies</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
 <table>
  <tr>
    <th><div class="col-2"><img src="NameBanner.JPG" alt="Banner " /></div></th>
  </tr>
  <tr>
   <td><div class="col-3"><div id="navcontainer">
	<ul id="navlist">
	<li id="active"><a href="home.php" class="style1" id="current">Homepage</a></li>
	<li><a href="education.php">Education</a></li>
	<li><a href="workexperience.php">Work Experience</a></li>
	<li><a href="hobbies.php">Hobbies </a></li>
	<li><a href="contactme.php">Contact Me </a></li>
	<li><a href="SiteMap.php">Site Map </a></li>
	<li><a href="logOut.php">Logout</a></li>
    </ul>
   </div></div></td>
  </tr>
   <tr>
      <td style="width:639px"><div class="col-3"><p>&nbsp;</p>
      <p style="text-align:left" class="class">MAIN MENU:</p>
      
        <div style="text-align:left">
		<p style="text-align:left"><a href="home.php">Homepage</a>        
		</p></div> 
          
        <div style="text-align:left">
		<p style="text-align:left"><a href="education.php">Education</a>        
        </p></div>
          
        <div style="text-align:left">
		<p style="text-align:left"><a href="workexperience.php">Work Experience</a>        
        </p></div>
          
        <div style="text-align:left">
		<p style="text-align:left"><a href="hobbies.php">Hobbies</a>        
        </p></div>
          
        
        <div style="text-align:left">
		<p style="text-align:left"><a href="contactme.php">Contact Me</a>        
        </p></div>
		
        <div style="text-align:left">
		<p style="text-align:left"><a href="SiteMap.php">Site Map</a>        
         </p></div>
              
	   </div></td>
 </tr>

  <tr>
    <th><div class="col-3">&copy;Abdirashid Abdi 2020</div></th>
  </tr>
 </table>
</body>
</html>
<?php
}
else {
    $errorMessage="You must login to view the page you are trying to access";
    $_SESSION['error']=$errorMessage;
    header('Location: loginForm.php'); //user has not logged in - redirect to login page
}
?> 