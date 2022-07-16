<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="questionPagecss.css" />
</head>

<body>

<?php
if (isset($_POST['sub'])) {
    if (strcasecmp($_SESSION["Answer"], $_POST["u_answer"]) == 0) {
        $_SESSION["Score"] += $_SESSION["Points"];
        $_SESSION["answerv1"] = "u-visible";
        $_SESSION["correct"] = "u-visible";
    
        $file = file_get_contents("user_points.txt");
        preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $file, $match);
        $newScore = $_SESSION["user"]."=".$_SESSION["Score"];
        $file = str_replace($match[0], $newScore, $file);
        file_put_contents("user_points.txt", $file);
    }
     else {
        $_SESSION["Score"] -= $_SESSION["Points"];
        $_SESSION["answerv1"] = "u-visible";
        $_SESSION["incorrect"] = "u-visible";
        $file = file_get_contents("user_points.txt");
        preg_match('/(' . $_SESSION["user"]. ')' . '(=)' . '(.*)' . '/', $file, $match);
        $newScore = $_SESSION["user"]."=".$_SESSION["Score"];
        $file = str_replace($match[0], $newScore, $file);
        file_put_contents("user_points.txt", $file);
    }
}
?>

<div id=container>

    <div class="question">
        <?php echo $_SESSION["Question"] . "<br>" ?>
    </div>

    <h1 class="<?php echo $_SESSION["correct"] ?>">Correct!</h1>
    <h1 class="<?php echo $_SESSION["incorrect"] ?>">Incorrect</h1>
    <h1 class="<?php echo $_SESSION["answerv1"] ?>"> The correct answer is: <?php echo $_SESSION["Answer"] ?></h1>

    <form class="question-response" method="POST">
        <input type="text" name="u_answer"> <button type="submit" name="sub">Answer</button>
    </form><br><br><br>

    <a href="play.php"><button class="btn <?php echo $_SESSION["answerv1"] ?>" name="home">Back To Board</button></a>

</div>
</body>
</html>