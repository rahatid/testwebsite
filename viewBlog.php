<?php
session_start();
$conn = mysqli_connect('127.0.0.1','root', '', 'ecs417');
if(!$conn){
    die("NO CONNECTION");
}

// Check if a month was selected
if (isset($_GET['month'])) {
    // Get the selected month
    $selected_month = $_GET['month'];

    // Build the SQL query to retrieve the blog posts for the selected month
    $query="SELECT * FROM post WHERE MONTH(DateandTime)='$selected_month'";
} else {
    // If no month was selected, retrieve all blog posts
    $query="SELECT * FROM post";
   
}

$result=mysqli_query($conn,$query);

// Create an array to store the blog posts
$blog_posts = array();

// Loop through the query result and add each blog post to the array
while ($row = mysqli_fetch_assoc($result)) {
    $blog_posts[] = $row;
}

// Sort the blog posts by date in descending order
usort($blog_posts, function($a, $b) {
    return strtotime($b['DateandTime']) - strtotime($a['DateandTime']);
});
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BLOG.css" type="text/css" />
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <script src="test.js" defer></script>
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

        <form method="get">
            <label for="month">Filter by month:</label>
            <select name="month" id="month">
                <option value="">All month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <button type="submit">Filter</button>
        </form>

            <table id="table">
        <tr>
            <td>Time Of post</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
        <?php 
        // Check if a month is selected
        if(isset($_GET['month'])) {
            $month = $_GET['month'];
            // Loop through the blog posts and only display posts from the selected month
            foreach ($blog_posts as $post) {
                if(date("m", strtotime($post['DateandTime'])) == $month) {
                    echo '<tr>';
                    echo '<td>' . $post['DateandTime'] . '</td>';
                    echo '<td>' . $post['Title'] . '</td>';
                    echo '<td>' . $post['Content'] . '</td>';
                    echo '</tr>';
                }
               
            }
        } else {
            // Display all blog posts
            foreach ($blog_posts as $post) {
                echo '<tr>';
                echo '<td>' . $post['DateandTime'] .'</td>';
                echo '<td>' . $post['Title'] . '</td>';
                echo '<td>' . $post['Content'] . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>

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