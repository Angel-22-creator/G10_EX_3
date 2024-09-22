<?php

if (file_exists("feedbacks.txt")) {

    $file_lines = file("feedbacks.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!empty($file_lines)) {
        echo "<h2>Previous Comments</h2>";
        echo "<ul>";

        foreach ($file_lines as $line) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No comments yet. Be the first to leave one!</p>";
    }

} else {
    echo "<p>The log file does not exist.</p>";
}

?>