<?php
if(isset($_POST["name"])) {
    $name = $_POST["name"];
    $profession = $_POST["profession"];
    $comments = $_POST["comments"];

    $file_name = "feedback.txt";
    $file = fopen($file_name, "a") or die('Cannot open file: '.$file_name);
    $string_to_write = $name . " " . $profession . " " . $comments . "\n";
    fwrite($file , $string_to_write);
    fclose($file);
}
?>
<html>
<head>
    <title>Send It | Feedback</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="slideshow.js"></script>
</head>
<body>
    <header>
        <span id="maintitle">Send It</span>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">|</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="team.html">The Team</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </header>
    <div id="maincontent">
        <div class="content">
            <h2>Feedback</h2>
            <form action="feedback.php" method="post">
                Name: <input type="text" name="name"><br>
                Profession: <input type="text" name="profession"><br>
                Comments: <textarea name="comments" rows="5" cols="30"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
