<?php
$username = $_POST["username"];
$password= $_POST["password"];

$userArray = array();
$userArrayWithPoints = array();
$userArray[$username] = $password;

$userData = $username . "=" . '"' . $password . '"';
$userPointData = $username . "=" .'0';
$userTilesData = $username . "=" . "000000000000000000000000000000";

		file_put_contents('user_info.ini', $userData . "\n", FILE_APPEND);
		file_put_contents('user_points.txt', $userPointData . "\n", FILE_APPEND);
		file_put_contents('user_tiles.txt', $userTilesData . "\n", FILE_APPEND);

?>

<?php include "header.php" ?>

	
	<h3 class="dindin" style="padding-top: 10%; width: 100%; text-align: center;"> Sign up complete! Return to login and sign in to play.</h3>
	<button class="button" style="width: 10%; margin-left: 45%; height: 30px; background-color: black; position: inherit; margin-top: 1%;"><a style="color: white;" href="index.php"><span> Home </span></a></button>
	
	
		
	</body>

