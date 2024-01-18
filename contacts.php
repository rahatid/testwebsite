<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatcs.css" type="text/css">
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
    <section id="Contacts">
      <h1 class="h1">These are my contacts</h1>
      <h2>Contact me via the following</h2>
      <article>
        <ul>
          <li>Phone: 073974679276</li>
          <li>Email: Rahat.id@gmail.com</li>
          <figure>
            <td>
              <a href="https://www.instagram.com/"> <img src="instagram logo 2.jpg" alt="instagram" width="80" height="50"></a>
            </td>
          </figure>
        </ul>
      </article>
    </section>
  </div>
</body>
</html>
