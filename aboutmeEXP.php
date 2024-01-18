<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutmeEXP.css" type="text/css" />
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link
      rel="stylesheet"
      href="mobile.css"
      media="screen and (max-width:500px)"
    />
    <title>Document</title>
</head>
<header>
  <section class="section">
    <nav>
      <ul>
        <a href="AboutME.php">About Me</a>
        <a href="SKLnACH.php">Skills </a>
        <a href="aboutmeEXP.php">Education </a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contacts.php">Contact</a>
        <a href="viewBlog.php">View blogs</a>
        <?php
        if(isset($_SESSION["email"]))
        {
          echo "<a href='logout.php'>Log out</a>";
          echo "<a href='BLOG.html'>Blog</a>";
        }
        else{
          echo "<a href='loginpage.php'>Log in</a>";
        }
        ?>
      </ul>
    </nav>
  </section>
</header>
  <body>
    <!-- introduction of class -->
    <div class="container">
      <header>
        <h1 class="h1">R.Id</h1>
        <h2 class="h2">Welcome to my Page</h2>
        <li>I work for the council</li>
        <li>I have experience in government cabinet</li>
        <li>I am a 1st Year CS student studying at QMUL.</li>
      </header>
      <!-- <section class="section">
        <nav>
          <ul>
            <a href="aboutmeEXP.html">About Me</a>
            <a href="SKLnACH.html">Skills </a>
            <a href="aboutmeEXP.html">Education </a> -->
            <!-- <a href="aboutmeEXP.html">Experience</a> -->
            <!-- <a href="portfolio.html">Portfolio</a>
            <a href="contacts.html">Contact</a>
            <a href="BLOG.html">Blog</a>
          </ul>
        </nav>
      </section> -->
      <section class="image"></section>
      <footer>
        <section id="Contacts">
          <article>
            <ul>
              <li>Phone: 073974679276</li>
              <li>Email: Rahat.id@gmail.com</li>
            </ul>
          </article>
        </section>
      </footer>
    </div>
  </body>
</html>
