<?php

/**
 * Calculates fence length from provided posts and railings
 *
 * @return Int the result of posts + railings or String error message if requirements not met
 */
function calcFenceLength() {

    $posts = $_POST['posts'];
    $railings = $_POST['railings'];

    $posts -= 1; // subtract start post
    if ($posts < 1) {
        $errorMessage = '<p>Minimum of 2 posts required for a fence!</p>';
    }
    if ($railings < 1) {
        $errorMessage .= '<p>Minimum of 1 railing required for a fence!</p>';
    }
    if (empty($errorMessage)) {
        return '<p>Fence length: ' . (0.1 + ($posts * 0.1) + ($posts * 1.5)) . ' meters</p>'; // # of posts must equal # of railings
    } else {
        if($posts != NULL && $railings != NULL) {
            return $errorMessage;
        }
    }
}

/**
 * Calculates number of posts and railings required to cover fence length
 *
 * @return Int the number of posts and railings
 */
function calcPostsAndRailings() {

    $length = (float) $_POST['length'];  // convert from string to float

    if ($length < 1.7) {
        $errorMessage = '<p>Minimum fence length is 1.7m (1 x 1.5m railing & 2 x 10cm posts)!</p>';
    }
    $length -= 0.1; // subtract start post
    $postRailUnit = ceil($length / 1.6); // divide by 1 railing/1 post combo & round up to cover overlap
    $posts = $postRailUnit + 1; // always need 1 more post than railings
    $railings = $postRailUnit;

    if (empty($errorMessage)) {
        return '<p>Posts: ' . $posts . '</p>' . '<p>Railings: ' . $railings . '</p>';
    } else {
        if(!$length) {
            return $errorMessage;
        }
    }
}

?>