<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
  <head>
    <link rel="stylesheet" href="../CSS/cv.css" />
    <link rel="stylesheet" href="../CSS/ic.css" />
    <link rel="stylesheet" href="../CSS/welc.css" />


    <title>CV</title>
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
    <center>
      <h1 style="font-family: cursive">
        RESUME: <br />
        Undergraduate Mostapha's CV
      </h1>
    </center>
    <div
      style="
        border: 2px solid grey;
        border-radius: 10px;
        background-color: grey;
        margin-left: 5px;
        margin-right: 5px;
        margin-top: 70px;
      ">
      <h2 class="bl">Personal details</h2>
      <hr />
      <img
        src="../images/ME/uu.jpg"
        alt="pfp"
        style="
          width: 180px;
          height: 200px;
          position: absolute;
          right: 50px;
          margin-top: 20px;
          border-radius: 13px;
        " />

      <div style="position: absolute"><h2>Name</h2></div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 5px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">Mostapha Zeineddin</p>
      </div>
      <div style="position: absolute; margin-top: 50px">
        <h2>Email address</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 50px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">mostapha.zeineddin@lau.edu</p>
      </div>
      <div style="position: absolute; margin-top: 100px">
        <h2>Phone number</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 100px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">81790310</p>
      </div>
      <div style="position: absolute; margin-top: 150px">
        <h2>Address</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 150px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">Beirut,Lebanon</p>
      </div>
      <div style="position: absolute; margin-top: 200px">
        <h2>Nationality</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 200px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">Lebanese</p>
      </div>
      <div style="position: absolute; margin-top: 250px">
        <h2>LinkedIn</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 250px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">
          <a href="linkedin.com/in/mostapha-zeineddinb97965296"
            >linkedin.com/in/mostapha-zeineddinb97965296</a
          >
        </p>
      </div>
      <hr style="margin-top: 350px; border: 1.5px solid grey" />
    </div>
    <div
      style="
        border: 2px solid grey;
        border-radius: 10px;
        background-color: grey;
        border-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
      ">
      <h2 class="bl">Profile</h2>
      <hr />
      <p style="font-size: 25px; font-family: cursive">
        Hardworking and enthusiastic student working towards a B.S. in Computer
        Science. Seeking to apply my programming knowledge to effectively
        elevate my experience level. Dedicated, hardworking, and committed to
        becoming a dependable and valuable team member.
      </p>
    </div>
    <div
      style="
        background-color: grey;
        border-radius: 10px;
        margin-left: 5px;
        margin-right: 5px;
      ">
      <div>
        <h2 class="bl">Education</h2>
        <hr style="color: rgb(255, 255, 255)" />
      </div>

      <div style="position: absolute"><h2>09/2018-08/2021</h2></div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 5px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">
          Baccalaureate, General Sciences <br />
          Nabil Adib Slaymen, Bednayel <br />
          Graduated with an impressive degree
        </p>
      </div>
      <div style="position: absolute; margin-top: 170px">
        <h2>09/2022-05/2025</h2>
      </div>
      <div
        style="
          position: absolute;
          margin-left: 700px;
          margin-top: 170px;
          font-size: 25px;
        ">
        <p style="font-family: cursive">
          BS in Computer Science <br />
          Lebanese American University, Beirut <br />
          Working hard to pursue my B.S. in Computer Science and graduate with
          high honors
        </p>
      </div>
      <hr style="margin-top: 350px; border: 1.5px solid white" />
    </div>
    <div
      style="
        border: 2px solid grey;
        border-radius: 10px;
        background-color: grey;
        border-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
      ">
      <h2 class="bl">Skills</h2>
      <hr />

      <ol style="font-size: 25px; font-family: cursive">
        <li>Leadership (Very good)</li>
        <li>Critical thinking and problem solving (Very good)</li>
        <li>Fast Learner (Excellent)</li>
        <li>Communications Skills (Excellent)</li>
        <li>Ability to Work in a Team (Excellent)</li>
        <li>Computer Skills (Very good)</li>
      </ol>
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

      <div id>
        <p>Copyright Ⓒ 2024 Mostapha Zeineddin. All rights Reserved</p>
    </div>    </body>
</html>
