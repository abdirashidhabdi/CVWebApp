<?php
session_start(); //start a session

if(isset($_SESSION['login']) && $_SESSION['login']==1) //ensure the user has logged in by checking that the
                                                       //login session variable is set & its value is 1
{
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Me</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
 <style>
#form1 p #Submit {
	color: #000;
}
#Submit {
	color: #000;
}
</style>
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
    <td style="width:604px"><div class="col-3"><form action="#" method="post" name="form1" id="form1" onsubmit="MM_validateForm('Name','','R','Surname','','R','Email','','R','Message','','R');return document.MM_returnValue">
      <div style="text-align:center">
        <table style="width:571px; height:582px; border:0px">
          <tr>
            <td  style="width:87px; height:61px"><label for="Name">First Name</label></td>
            <td  style="width:474px"><input type="text" name="Name" id="Name" /></td>
            </tr>
          <tr>
            <td  style="height:65px"><label for="Surname2">Surname</label></td>
            <td><input type="text" name="Surname" id="Surname2" /></td>
            </tr>
          <tr>
            <td  style="height:54px"><label for="Email2">Email</label></td>
            <td><input type="text" name="Email" id="Email2" /></td>
            </tr>
          <tr>
            <td  style="height:66px" colspan="2">What are you contacting us for?</td>
            </tr>
          <tr>
            <td  style="height:57px"><label for="GeneralQuery2">General Query</label></td>
            <td><input type="checkbox" name="General Query" id="GeneralQuery2" /></td>
            </tr>
          <tr>
            <td  style="height:56px"><label for="NetworkwithMe2">Network with Me</label></td>
            <td><input type="checkbox" name="Network with Me" id="NetworkwithMe2" /></td>
            </tr>
          <tr>
            <td  style="height:42px"><label for="JobOffer2">Job Offer</label></td>
            <td><input type="checkbox" name="Job Offer" id="JobOffer2" /></td>
            </tr>
          <tr>
            <td  style="height:42px"><label for="MeetwithMe2">Meet with Me</label></td>
            <td><input type="checkbox" name="Meet with Me" id="MeetwithMe2" /></td>
            </tr>
          <tr>
            <td  style="height:119px"><label for="Message2">Message</label></td>
            <td><div class="col-3"><textarea name="Message" id="Message2" cols="45" rows="5"></textarea></div></td>
            </tr>
        </table>
    </div>
      <p style="text-align:center">
        <input type="submit" name="Submit" id="Submit" value="Submit" />
    </p></form>
    <p id="Bold">CONTACT DETAILS</p>
    <p>Address:</p>
    <p>Flat 8</p>
    <p>100 Kevin Street</p>
    <p>Dublin 8</p>
    <p>Ireland</p>
    <p>Email: <a href="mailto:info@abdirashidabdi.ie">info@abdirashidabdi.ie</a></p>
    <p>Telephone: +353864866591 / 2</p></div></td>

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