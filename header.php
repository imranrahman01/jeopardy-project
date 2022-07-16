<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jeopardy Online | Americas Favorite Quiz Show</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>

        <!--- Navigation -->

        <div id="navbar">
            
            <a id="logo" href="index.php">
                    <img src="img/logo.png" />
            </a>

            <div id="menubar">
                <ul>
                    <a href="index.php"><li>HOME</li></a>
                    <a href="leaderboard.php"><li>LEADERBOARD</li></a>
                    <a href="about.php"><li>ABOUT</li></a>
                </ul>
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="play.php">
                        <div id="playjp">
                            <p class="jpfont">PLAY</p>
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="login.php">
                        <div id="playjp">
                            <p class="jpfont">PLAY</p>
                        </div>
                    </a>
                <?php } ?>

                <?php if (isset($_SESSION['user'])) { ?> 
                    <a class="sin" href="logout.php">Sign Out</a>
                <?php } else { ?>
                    <a class="sin" href="login.php">Sign in / Create Account</a>
                    <?php } ?>
            </div>
        </div>