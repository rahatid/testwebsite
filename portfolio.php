<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfolio.css" type="text/css">
    <link rel="stylesheet" href="reset.css" type="text/css" >
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:500px)">

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
  <div class="container">
    <header>
        <h1 class="h1">R.Id</h1>
        <h2 class="h2">
            Welcome to my portfolio
        </h2>
    </header>
    <section id="portfolio">
      <h2>Portfolio</h2>
      <article>
        <p>Create a wind farm</p>
        <p><a href="project.html">Project</a></p>
      </article>
    </section>
    <section id="Topic4">
      <article>
          <figure>
            <a href="ex 3.html"></a>
            <figcaption> Topic 4 Website</figcaption>
          </figure>
      </article>
    </section>
    <!-- my work from previous weeks has been linked here -->
    <section id="Topic3">
      <article>
          <figure>
            <a href="EX3.html"></a>
            <figcaption> Topic 3 Website</figcaption>
          </figure>
      </article>
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
