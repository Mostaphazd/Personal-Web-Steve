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
    <link rel="stylesheet" href="../CSS/contact.css" />
    <link rel="stylesheet" href="../CSS/ic.css" />
    <link rel="stylesheet" href="../CSS/welc.css" />

    <title>Home</title>
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
