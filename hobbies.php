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
	<li><a href="workexperience.php">Work Experience </a></li>
	<li><a href="hobbies.php">Hobbies </a></li>
	<li><a href="contactme.php">Contact Me </a></li>
	<li><a href="SiteMap.php">Site Map </a></li>
	<li><a href="logOut.php">Logout</a></li>
    </ul>
   </div></div></td>
  </tr>
   <tr>
      <td style="width:639px"><div class="col-3">
        <h2>Hobbies and Interests</h2>
		<p>I have many things that I do when I have free time. Some of the things that I do include the following:</p>
       <ul>
        <li>Volunteering at my Local Soup Kitchen</li>
        <li>Garden Club</li>
        <li>Football</li>
        <li>Basketball</li>
       </ul>
	  </div></td>
 </tr>

  <tr>
    <th><div class="col-3">&copy;Abdirashid Abdi 2023</div></th>
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