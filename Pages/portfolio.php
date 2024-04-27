<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/portfolio.css" />
    <link rel="stylesheet" href="../CSS/ic.css" />
    <link rel="stylesheet" href="../CSS/welc.css" />

    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="../icon/favicon.ico" />
  </head>
  <body>
  <div class="message">
      <div class="welcome">
        <span
          >WELCOME               
          "<?php echo $_SESSION["username"] ; ?>" 
          
          <a href="../logout.php" class="logout">
        (Logout) <i class="fa fa-sign-out" aria-hidden="true"></i>
      </a>
      
        </span>
       
      </div>
      
    </div>
    <div class="navig">
      <div class="dropdown">
        <button><i class="ico burger-ico"></i> Menu</button>
        <div class="content">
          <a href="../Pages/home.php"
            ><i class="ico ico-l home-ico"></i>Home
          </a>
          <a href="../Pages/bio.php"><i class="ico ico-l bio-ico"></i>Bio</a>
          <a href="../Pages/cv.php"><i class="ico ico-l cv-ico"></i>CV</a>
          <a href="../Pages/portfolio.php"
            ><i class="ico ico-l project-ico"></i>Portfolio</a
          >
        
          <a href="../Pages/contact.php"
            ><i class="ico ico-l contact-ico"></i>Contact Me</a
          >
        </div>
      </div>
    </div>
    <div class="content-section">
    <h1>WELCOME STEVE'S PORTFOLIO</h1>
    <h3>You can see below two projects that I've done. Under each project introduction there is a button you can click to see the project gallery.</h3>
</div>

<div class="project-section">
    <div class="project">
        <div class="project-info">
            <p>Database Management System Project</p>
            <div>
                <img class="img" src="../images/Dbth.jpg">
            </div>
            <p>A- Relational Database Management System: 'MSD HR SYSTEM' is one of my projects done for a company that needed a DBMS for its HR department. Objective: The primary objective of the MSD HR SYSTEM was to streamline and optimize the HR processes within the company. This included managing employee data, tracking attendance, handling payroll, facilitating recruitment, and providing comprehensive reporting capabilities. Scope: The system covered various aspects of HR management, including employee information management, leave and attendance tracking, performance evaluations, training and development, payroll processing, and compliance management.<a href="HR.php" class="link-display"><div class="listing-info"><i class="fa fa-plane"></i> MDS HR DBMS</div></a></p>
        </div>
    </div>

    <div class="project">
        <div class="project-info">
            <p>Computer Organization Project</p>
            <div>
                <img class="img" src="../images/co.png">
            </div>
            <p>B- BBL (Barmajeh Bl Lebneneh) Compiler: A compiler that converts a high-level programming syntax into a low-level syntax. Objective: The primary objective of the BBL Compiler was to facilitate the translation of high-level programming syntax into low-level syntax, enabling programmers to write code in a more human-readable and abstract manner while still being able to execute it efficiently on a computer. Scope: The compiler covered various programming languages or dialects, translating their code into machine-readable instructions or intermediate representations that could be further processed by an assembler, linker, or virtual machine.<a href="BBL.php" class="link-display"><div class="listing-info"><i class="fa fa-cogs"></i> BBL</div></a></p>
        </div>
    </div>
</div>

<div class="certificate-section">
    <h1>Certificates Earned:</h1>
    <hr>
    <ul>
        <li>A- Certificate in Introduction to Cybersecurity/Cybersecurity essentials from Cisco</li>
        <br />
        <li>B- Certificate in Maximo Application Suite Foundation from IBM</li>
        <br />
        <li>C- Certificate in Cloud Core from IBM</li>
        <br />
        <li>D- Certificate in The Employability Workshop 'Career Camp' from INJAZ</li>
        <br />
        <li>E- Certificate in Complete Cognos Training Course for a Dream IT Job from Udemy</li>
        <br />
        <li>F- Certificate in The Complete SQL Bootcamp: Go from Zero to Hero from Udemy</li>
        <br />
        <li>G- Certificate in Complete IBM Cognos Analytics 12.0.0 Cloud Training Course from Udemy</li>
        <br />
    </ul>
<p>AND MANY MOREEEEE....</p>
    </div>
    <div class="contact">
      <h2 style="font-family: cursive; font-size: 18px">Links</h2>
      <div>
        <a href="https://www.linkedin.com/in/mostapha-zeineddin-b97965296/"
          ><img
            style="width: 50px; height: 44px; border-radius: 30px"
            src="../images/logos/linkedin.png"
            alt="linkedin"
        /></a>
        <a href="https://github.com/Mostaphazd"
          ><img
            style="width: 50px; height: 43px; border-radius: 30px"
            src="../images/logos/githublogo.jpg"
            alt="Github"
        /></a>
        <a href="https://www.instagram.com/mostapha_zd/"
          ><img
            style="
              width: 50px;
              height: 44px;
              border-radius: 30px;
              background: none;
            "
            src="../images/logos/instalogo.png"
            alt="Insta"
        /></a>
      </div>
      <hr style="color: black" />
      <h2 style="font-family: cursive; font-size: 18px">Contact Me</h2>
      <ul>
        <li style="font-family: cursive; font-size: 18px">
          Email: mostapha.zeineddin@lau.edu
        </li>
        <li style="font-family: cursive; font-size: 18px">
          Phone Number: +961 81790310
        </li>
      </ul>
    </div>
    <div>
        <p>Copyright Ⓒ 2024 Mostapha Zeineddin. All rights Reserved</p>
    </div>
  </body>
</html>
