<?php

require_once 'postsRailsLogic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post and Railings Challenge</title>
</head>
<body>

    <form method="post" action="index.php">

        <h1>Fence Length Calculator</h1>
        <p>Create a PHP application that can calculate the length of a fence when you provide the
            number of posts and railings.</p>
            <label for="railings">Number of railings:
                <input type="number" name="railings" id="railings">
            </label>
            <label for="posts">Number of posts:
                <input type="number" name="posts" id="posts">
            </label>
            <input type="submit">

            <?php
            echo calcFenceLength();
            ?>

        <h1>Posts and Railings Calculator</h1>
        <p>Create a PHP application that can calculate the number of posts and railings required to build
            a fence of a certain length.</p>
            <label>Length (meters):
                <input type="text" name="length" id="length">
            </label>
            <input type="submit">

            <?php
            echo calcPostsAndRailings();
            ?>
     </form>
     <h2>Requirements:</h2>
     <ul>
        <li>All fences must start and end with a post and must contain at least 1 railing.</li>
        <li>Railings must have a post between them to connect them, posts cannot sit next to other posts.</li>
        <li>When calculating the amount of posts and railings needed to cover a certain length fence, the result
            must span at least the length required, no less</li>
        <li>Fence length results must be displayed in meters with no more than 2 decimal places.</li>
        <li>Code must use functions or OOP (classes)</li>
    </ul>
    <h2>Specification:</h2>
    <ul>
        <li>A railing is 1.5m long</li>
        <li>A post is 10cm wide</li>
    </ul>
</body>
</html>


