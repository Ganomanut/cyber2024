<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = trim($_POST["comment"]);
    if (!empty($comment)) {
        $safe_comment = htmlspecialchars($comment, ENT_QUOTES);
        file_put_contents("comments.txt", $safe_comment . PHP_EOL, FILE_APPEND);
        header("Location: index.html"); // Redirect back to homepage
        exit();
    } else {
        echo "Comment cannot be empty.";
    }
} else {
    echo "Invalid request method.";
}
?>
