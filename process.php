
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['comment'])) {
    $comment = trim($_POST['comment']);
    
    
    $comment = htmlspecialchars($comment);
    
    file_put_contents('feedbacks.txt', $comment . PHP_EOL, FILE_APPEND | LOCK_EX);
    
    
    header('Location: http://localhost/G10-ex3/index.php');
    exit();
}
?>