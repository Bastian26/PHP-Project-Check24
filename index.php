<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php
            include 'header.php'
        ?>

    <main>

        <?

            foreach ($blogPosts as $post)
            {
                echo "<div class='post'>";
                echo "<h1>" . $post->title . "</h1>";
                echo "<p>" . $post->post . "</h1>";
                echo "<span class='footer'>Posted By: " . $post->author . " Posted On: " . $post->datePosted . " Tags: " . $post->tags . "</span>";
                echo "</div>";
            }
        ?>

    </main>
    <footer>
        <p>© 2007 - Impressum</p>
    </footer>
</body>
</html>