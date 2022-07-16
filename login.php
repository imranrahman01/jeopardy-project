<?php include ("header.php") ?>
<?php require "check.php"; ?>



<h3 class="lgn-title"> Jeopardy!</h3>
<div id="jp-div"><span></span></div>
<h4 class="lgn-subtitle">ONLINE</h4>

	<?php if (isset($failed)) { ?>
	<div id="bad-login">Invalid user or password.</div>
	<?php } ?>
	<form id="login-form" method="post" target="_self">
		  <p for="user">User</p><br>
		  <input class="user" type="text" name="user" required/><br>
		  <p for="password">Password</p><br>
		  <input class="pswd" type="password" name="password" required/><br>
		  <input type="submit" class="submit" value="SIGN IN">

		  <h4><a href="signup.php"> New user? Click here. </a></h4>
	</form>
</body>
</html>