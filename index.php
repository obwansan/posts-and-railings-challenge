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

        function calcFenceLength() {

            $posts = $_POST['posts'];
            $railings = $_POST['railings'];
            $errorMessage = '';

            $posts -= 1; // subtract start post
            if ($posts < 1) {
                $errorMessage = '<p>Minimum of 2 posts required for a fence!</p>';
            }
            if ($railings < 1) {
                $errorMessage .= '<p>Minimum of 1 railing required for a fence!</p>';
            }
            if ($errorMessage == '') {
                return '<p>Fence length: ' . (0.1 + ($posts * 0.1) + ($posts * 1.5)) . ' meters</p>'; // # of posts must equal # of railings
            } else {
                return $errorMessage;
            }
        }
        echo calcFenceLength();

        ?>

        <h1>Posts and Railings Calculator</h1>
        <label>Length (meters):
            <input type="number" name="length" id="length">
        </label>
        <input type="submit">
        <?php

        function calcPostsAndRailings() {

            $posts = 0;
            $railings = 0;
            $length = $_POST['length'];

            if ($length < 1.7) {
                return '<p>Minimum fence length is 1.7m (1 x 1.5m railing & 2 x 10cm posts)!</p>';
            }

            $length -= 0.1; // subtract start post
            $postRailingUnit = $length / 1.6; // divide by 1 railing & 1 post combo

            if (is_int($postRailingUnit)) {
                $posts = $postRailingUnit;
                $railings = $postRailingUnit;
            } else {
                $posts = $postRailingUnit;
                $railings = $postRailingUnit + 1;
            }
            return '<p>Posts: ' . $posts . '</p>' . '<p>Railings: ' . $railings . '</p>' ;
        }

        ?>
    </form>
</div>
</body>
</html>