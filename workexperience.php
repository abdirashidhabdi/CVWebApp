<?php
session_start(); //start a session

if(isset($_SESSION['login']) && $_SESSION['login']==1) //ensure the user has logged in by checking that the
                                                       //login session variable is set & its value is 1
{
?>    

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Work Experience</title>
 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="style.css">
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
      <td style="width:639px"><div class="col-3">
        <h2>Employment History</h2>
        <h3>June 2022 – Aug 2023 &nbsp; Work Experience &nbsp; Penneys, Eyre Square Shopping Centre, Galway&nbsp;</h3>
        <ul>
           <li>Maintained HUAWEI cloud service with a reliable rating of 99.9% in the European market.</li>
           <li>Deployed cloud services on public cloud platforms using ELB, Virtual Machines, DCS, DMQ, and MySQL to enhance customer experience and provide efficient storage solutions.</li>
           <li>Collaborated with HUAWEI developers in China to upgrade and troubleshoot enterprise-level cloud services, ensuring smooth transitions without disrupting existing operations.</li>
           <li>Optimised cloud service scalability by monitoring and adjusting CPU/memory/storage levels, effectively managing cluster sizing based on demand.</li>
		   <li>Improved resource utilization by optimizing host configurations, resulting in an 8% decrease in memory usage and a 7% increase in CPU efficiency.</li>
        </ul>
		<h3>Nov 2021 – June 2022 &nbsp; Service Desk Engineer &nbsp; Auxilion &nbsp;</h3>
        <ul>
           <li>Provided comprehensive technical support for software, hardware, and networking issues, ensuring timely resolution and client satisfaction.</li>
           <li>Supported Microsoft products including Teams, Outlook, OneDrive, SharePoint, and Intune, offering expert assistance and guidance to optimize user utilization.</li>
           <li>Proficiently diagnosed intricate technical issues by gathering requisite information and conducting thorough preliminary research using available resources.</li>
           <li>Documented and updated customer inquiries and technical issues within the designated ticket management system (ServiceNow), diligently tracking incidents from initiation through resolution or necessary escalation.</li>
		   <li>Offered steadfast support for Windows, Mac, and Linux devices and assisted in the administration of Active Directory, Office365, and account management using Azure AD and Okta Identity provider for seamless operations and enhanced productivity.</li>
        </ul>
        <h3>March 2021 – Sep 2021 &nbsp; IT Analyst - Intership &nbsp; Eir Evo - Formely Evros Technology Group &nbsp;</h3>
        <ul>
           <li>Provided adept technical support and assistance to end-users within a managed service environment, addressing a variety of needs for different clients and seamlessly collaborating with multiple teams.</li>
           <li>Diagnosed and resolved technical issues related to Active Directory, Azure AD, Office365 administration, Microsoft Exchange, and Virtualization (Hyper-V), ensuring smooth operations of essential IT infrastructure.</li>
           <li>Installed, configured, and maintained systems and applications, paying special attention to Active Directory, Azure AD, and Office365 administration to meet clients' specific requirements and security protocols.</li>
           <li>Employed the use of ticket tracking tool Autotask to efficiently manage and respond to support tickets, maintaining a structured approach to issue resolution and tracking.</li>
		   <li>Leveraged remote desktop access tools to facilitate effective troubleshooting and provide remote assistance, optimizing support delivery and minimizing downtime for clients.</li>
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