<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Filmon's Art Works</title>
    <meta name="robots" content="noindex,nofollow" >
    <meta name="viewport" content="width=device-width" >
    <meta charset="utf-8" >
    <link rel="stylesheet" href="css/portal.css" >
    <link rel="stylesheet" href="css/nav.css" >
    <link rel="stylesheet" href="css/stylegallary.css" >
    <link rel="stylesheet" href="css/contact.css" >
  </head>
  <body>
    <header>
      <h1>FILIMON ADELEHEY</h1>
      <nav class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="gallery.html">Gallery</a>
        <a href="about.html">About Us</a>
        <a href="template-contact.php" class="active">Contact Us</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"
          >&#9776;</a
        >
      </nav>
    </header>
    <div class="wrapper">
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "feven.meselu@outlook.com";  //place your/your client's email address here
        $toName = "Filmon Adelehey"; //place your client's name here
        $website = "Filmon's Art Gallary";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

      <footer>
        <p>
          <small> <a href="index.html">HOME</a></small>
        </p>
        <p>
          <small
            >&copy; 2023 by Filmon , All Rights Reserved | ,<a
              href="disclaimer.html"
            >
              Disclaimer / Privacy Notice</a
            >
            ,<a id="html-checker" href="#">Check HTML</a> |
            <a id="css-checker" href="#">Check CSS</a>~

            <a href="https://www.instagram.com/artnfilmon/?hl=en"
              ><ion-icon name="logo-instagram"></ion-icon
            ></a>
          </small>
        </p>
      </footer>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>
      //https://tinyurl.com/dynamic-html-checker
      document
        .getElementById("html-checker")
        .setAttribute(
          "href",
          "https://validator.w3.org/nu/?doc=" + location.href
        );

      document
        .getElementById("css-checker")
        .setAttribute(
          "href",
          "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
        );

      //manages mobile nav
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
