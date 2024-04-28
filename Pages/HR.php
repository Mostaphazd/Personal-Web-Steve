<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location:../index.php");
}


$galleryFile = "gallery1.txt";
$images = file($galleryFile, FILE_IGNORE_NEW_LINES);


if (!$images) {
    $images = []; 
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
    <link rel="stylesheet" href="../CSS/HR.css" />


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
          <a href="../Pages/portfolio.php"
            ><i class="ico ico-l project-ico"></i>Portfolio
          </a>
          </div>
      </div>
    </div>
    
    <div class="gallery">
    <h3>Gallery:</h3>
    <div class="thumbnails">
    <?php foreach ($images as $image) : ?>
        <a href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/images/HRprj/<?php echo $image; ?>" onclick="showOverlay(this); return false;">
            <img src="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/images/HRprj/<?php echo str_replace("Thumb", "", $image); ?>" alt="Thumbnail"/>
        </a>
    <?php endforeach; ?>
</div>
    <div class="gallery-overlay">
        <div class="back-button">
            <a href="../Pages/HR.php">Back</a>
        </div>
        <img src="" alt="Image"/>
    </div>
</div>

<h3>Please click beside to open the pdf of the project: <a href="../Projects/PHASE4docx[1].pdf" class="see">
    <i></i>SEE PROJECT PDF
</a></h3>


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
    <script>
    function showOverlay(thumbnail) {
        var imageUrl = thumbnail.getAttribute("href");
        var imageAlt = thumbnail.querySelector("img").getAttribute("alt");
        var overlay = document.querySelector(".gallery-overlay");
        var overlayImage = overlay.querySelector("img");
        var backButton = overlay.querySelector(".back-button a");

        overlayImage.src = imageUrl;
        overlayImage.alt = imageAlt;
        overlay.style.display = "flex";
        backButton.href = window.location.href;

        document.body.style.overflow = "hidden"; 
    }
</script>
  </body>
  
</html>
