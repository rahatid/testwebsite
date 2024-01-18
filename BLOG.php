<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="BLOG.css" type="text/css" />
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <script src="test.js" defer></script>
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
          echo "<a href='BLOG.php'>Blog</a>";
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
      <hgroup>
        <h1 class="h1">R.Id</h1>
        <h2 class="h2">Welcome to my Blog</h2>
      </hgroup>
      <fielset class="blogtable">
        <legend>Add blog</legend>
        <div id="login">
          <form action="Addpost.php" method="post">
            <label for="text">Title:</label>
            <input type="text" id="title" name="title" required />
            <br />
            <label for="text">Add your blog here:</label>
            <br />
            <textarea id="textarea" name="blog" rows="5" cols="40"></textarea>
            <br />
            <input type="submit" value="submit" class="submit" id="post" />
            <input type="reset" value="Clear" id="clearButton" class="clear" />
          </form>
        </div>
      </fielset>
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
