<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post and Railings Challenge</title>
</head>
<body>
<div>
    <h1>Fence Length Calculator</h1>
    <form method="post" action="index.php">
        <label for="railings">Number of railings:
            <input type="number" name="railings" id="railings">
        </label>
        <label for="posts">Number of posts:
            <input type="number" name="posts" id="posts">
        </label>
        <input type="submit">
        <?php

        // get value
//        echo '<p>' . $_POST["railings"] . '</p>';
//        echo '<p>' . $_POST["posts"] . '</p>';

        // do maths
        function calcFenceLength() {

            $posts = $_POST['posts'];
            $railings = $_POST['railings'];
            $fenceLength;

            $posts -= 1; //subtract start post
            If ($posts < 1) {
                return '<p>Minimum of 2 posts required for a fence!</p>';
            } else {
                return '<p>Fence length: ' . (0.1 + ($posts * 0.1) + ($posts * 1.5)) . ' meters</p>'; // # of posts must equal # of railings
            }
        }

        // print result
        echo calcFenceLength();

        ?>

        <h1> Posts and Railings Calculator</h1>
        <label>Length (meters):
            <input type="number" name="length" id="length">
        </label>
        <input type="submit">
        <?php
/*
        $railings = 0;
        $posts = 0;
        $length = 0;
        $errorMessage = "";

        // get value
        echo '<p>' . $_POST["length"] . '</p>';
        $length = $_POST["length"];

        // do maths
        function calcPostsAndRailings() {
            if ($length < 1.7) {
                $errorMessage = "A fence cannot be shorter than 1.7m";
                return $errorMessage;
            }


        }

        // print result
*/
        ?>
    </form>
</div>
</body>
</html>