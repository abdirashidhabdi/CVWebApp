<?php
session_start(); //start a session

if(isset($_SESSION['login']) && $_SESSION['login']==1) //ensure the user has logged in by checking that the
                                                       //login session variable is set & its value is 1
{
?>    

<!DOCTYPE html>
<html lang = "en">
<head>
 <title>Education</title>
 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="style.css"/>
 <meta name="keywords" content="Networking, Technologies, technology, IT, local networks, Holiday, student, networking degree, network technician" />
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
        <h2>Education & Qualifications</h2>
        <h3>Sep 2022 – Sep 2023 &nbsp; BSc in Cloud Computing with DevOps &nbsp; TU Dublin Tallaght Campus , Dublin 8&nbsp;</h3>
        <ul>
           <li>Awarded QQI Level 8 Honours Degree</li>
           <li>Coursework in Cloud Services & Distributed Computing, DevOps - Continuous Integration and Deployment, Information Management, Security for the cloud and IoT, Architecting on the Public Cloud, Enterprise Performance Architecture, IT Governance and Quality, Project (Cloud Stream)</li>
        </ul>
		<h3>Sep 2019 – Sep 2021 &nbsp; BTech in Networking Technologies &nbsp; TUD Kevin Street, Dublin 8&nbsp;</h3>
        <ul>
           <li>Awarded QQI Level 7 Ordinary Degree</li>
           <li>Coursework in C programming, Python Programming, Linux OS, Data Analysis and Databases, Microcontrollers & Electronics, CCNA Routing & Switching, Fund. of Wireless Communication, Server-side Web Development and Sustainable Business</li>
        </ul>
        <h3>Sep 2018 – May 2019 &nbsp; Computer Systems & Networks &nbsp; Whitehall College, Dublin 9 &nbsp;</h3>
        <ul>
           <li>Awarded QQI Level 6 Ordinary Degree</li>
           <li>Coursework in Physical and Logical Networking, Networking Infrastructure, Information Technology Administration, Systems Software, Mobile Technologies, Mathematics, Communications and Work Experience </li>
        </ul>
        <h3>Sep 2017 – May 2018 &nbsp; Business Studies &nbsp; Galway Community College, Galway&nbsp;</h3>
        <ul>
         <li>Awarded QQI Level 5 Certificate</li>
         <li>Coursework in Business Administration Skills, Customer Service, Database Methods, Desktop Publishing, Marketing Practice, Public Relations, Web Authoring and Work Experience</li>
        </ul>
        <p>&nbsp;</p>
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