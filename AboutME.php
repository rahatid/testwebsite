<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutme.css" type="text/css">
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
<!-- my image  -->
<section class="image" >
  <figure>
    <img src="Me.jpg" alt="My picture" width ="220" height="290">
    <figcaption>Rahat I. Dewan</figcaption>
  </figure>
</section>    
<section id="AboutME">
  <h2>About me</h2><br>
  <article>
    <p>Hi, my name is Rahat and I am a Computer Science Student. I am passionate about Web development.</p><br>
  </article>
</section>
<article>
  <h3>LOG IN OR REGISTER HERE FOR YOUR BLOG</h3><br>
</article>
<section id="button">
  <a href="loginpage.php"> <button class="buttons" type="button">
    LOGIN</button></a>
</section>
<footer> 
  <section id="Contacts">
      <article>
        <ul><br>
          <li>Phone: 073974679276</li>
          <li>Email: Rahat.id@gmail.com</li>
        </ul>
      </article>
    </section>
</footer>
</body>
</html>