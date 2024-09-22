<?php

  $current = "";


  if (file_exists("feedbacks.txt")) {
      $file = "feedbacks.txt";


      $current = file_get_contents($file);
  } else {

      file_put_contents("feedbacks.txt", "");


      header("Refresh:0");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Comment Page</title>
</head>
<body>
<main>
    <h1>Team 10 FEEDBACK PAGE</h1> 


    <form action="process.php" method="post">
        <textarea class="textarea" rows="6" cols="50" name="comment" placeholder="Enter a message.."></textarea>
        <input id="button" type="submit" value="Submit">
    </form>

    <div>
        <a href="feedbacks.txt">View Text file</a>
    </div>

    <?php include('condition.php'); ?>
</main>

<footer>
    <p>&copy; 2024 Group 10 Exercide No3.</p> 
    <p>PAMANTASAN NG LUNGSOD NG MUNTINLUPA</p>


</footer>

</body>

</html>