<?php
session_start(); //start a session

if(isset($_SESSION['login']) && $_SESSION['login']==1) //Ensure the user has logged in by checking that the
                                                       //login session variable is set & its value is 1
{
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <style>
	h2 {
		color:#A569BD ;
	}
  </style>
  <meta name="keywords" content="Networking, Technologies, technology, IT, local networks, Holiday, student, network technician" />
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
      <td style="width:639px">
        <div class="col-3"><div style="text-align:center" id="Highlight">
         <h1>Welcome to Abdirashid Abdi's profile</h1>
       </div>
       <h2>Personal Profile:</h2>
	   <img src="Tech_pic.jpg" alt="Profile Picture"/>
       <p>A highly skilled and experienced professional with a proven track record of delivering high-impact work in the IT industry. Proven ability to cultivate strong internal and external relationships, collaborate effectively, and thrive in a fast-paced environment. Expertise in IT Support, Infrastructure, Cloud Computing (AWS/Azure), DevOps - CI/CD, Bash, and Python. Committed to lifelong learning and continuous improvement.</p>
        <p>&nbsp;</p></div>
       </td>    
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
 