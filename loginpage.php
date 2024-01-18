<?php
session_start();
?>
<!-- // Check if form was submitted
if(isset($_POST["submit"])) {
    // Check if email and password are correct
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Replace this with your own validation code
    if($email == "user@example.com" && $password == "password") {
        $_SESSION["Userlogin"] = true;
        header("Location: Addpost.php");
        exit();
    }
    else {
        $error_message = "Invalid email or password";
    }
} -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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
    <section>
    <div class ="wrapper">
        <div class="login form">
          <h2>Login</h2>
          <form action="login.php" method="post">
              <div class ="entry box">
                <input type="email" name="email" required>
                <lable>Email</lable>
                <input type="password" name="password" required>
                <lable>Password</lable>
              </div>
              <button type="submit" class="button" name="button">Login</button>
            </form>
        </div>
    </div>
    </section>
  </body>
</html>
