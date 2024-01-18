<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="SKLnACH.CSS" type="text/css" />
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
    <!-- use of class -->
    <div class="container">
      <hgroup>
        <h1 class="h1">Welcome to my Skills and Achievements page</h1>
        <h2 class="h2">
          I need to achive stuff of higher note before I can say anything. I am
          experienced in: HTML, CSS, JAVA, JS,PHP
        </h2>
      </hgroup>
      <section class="image">

      </section>
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
