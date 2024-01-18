<?php
session_start();
$conn = mysqli_connect('127.0.0.1',"root" , "", "ecs417") or die('connection not found');

if (isset($_POST['button'])){    
   $email=$_POST['email'];
   $password=$_POST['password'];

   $Select = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
   $row = mysqli_fetch_array($Select);

   if(is_array($row)){
      $_SESSION["email"] = $row['email'];
      $_SESSION["password"] = $row['password'];
   }
   else{
      //header("Location: AboutME.html");
      echo"you're not in";
      header("Location: loginpage.php");
   }
}
if(isset($_SESSION["email"])){
   header("Location: BLOG.php");
}
?>
<!-- // if (isset($_POST["LOGIN"])){
//     $email=$_POST("email");
//     $password=$_POST("password");
//    $servername = "127.0.0.1";
//     $username = "root";
//     $password = "";
//     $dbname = "ecs417";

//     // Creates connection

//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Checks connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     if(emptyINputlogin ($email, $password !== false))
//     header("location: /loginpage.php?error=emptyinput");
//     exit();
//     Userlogin($conn, $email, $password);
// }
// else{
//     header("location: AboutMe.html");
//     exit();
// } -->
