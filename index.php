<?php include ("header.php") ?>

        <div id="hero-banner">

        </div>

        <div id="cta">
            <p>Play Jeopardy Online</p>
            <?php if (isset($_SESSION['user'])) { ?> 
                <div id="cta-play">
                    <a href="play.php">PLAY</a>
                </div>
            <?php } else { ?>
                <div id="cta-play">
                    <a href="login.php">PLAY</a>
                </div>
            <?php } ?>
        </div>

    </body>
</html>