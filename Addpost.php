<?php 

// include("index.php"); 
$servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecs417";

    // Creates connection
        $title=$_POST['title'];
        $post=$_POST['blog'];
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        $sql = "INSERT INTO post (Title, Content)
                VALUES ('$title', '$post')";
                mysqli_query($conn,$sql);
        header("Location: BLOG.php");
?>