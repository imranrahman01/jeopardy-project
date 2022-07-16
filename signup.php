<?php include "header.php" ?>
<?php require "check.php"; ?>


<h3 class="lgn-title"> Jeopardy!</h3>
<div id="jp-div"><span></span></div>
<h4 class="lgn-subtitle">ONLINE</h4>


	<form id="login-form" action="signup-submit.php" method="post">
		  <p for="user">User</p><br>
		  <input class="user" type="text" name="username" required/><br>
		  <p for="password">Password</p><br>
		  <input class="pswd" type="password" name="password" required/><br>
		  <input type="submit" class="submit" value="CREATE ACCOUNT">

		  <h4><a href="login.php"> Already Have An Account? Click here. </a></h4>
	</form>

</body>
</html>