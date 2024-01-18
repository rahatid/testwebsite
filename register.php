<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "ecs417";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error){
            die("connection falier" . $conn->connect_error);
        }
            $userID = $_POST['email'];
            $passhash=password_hash($_POST["password"], PASSWORD_DEFAULT);
            // echo $username;
            // echo $passhash;
            
            $sql ="INSERT INTO users (email, password)
            VALUES ('$userID', '$passhash')";
            
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location: BLOG.html")

?>
</body>
</html>