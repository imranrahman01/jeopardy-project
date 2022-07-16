<?php

session_start();

$user_ini_array = parse_ini_file("user_info.ini");
$userPoints = file_get_contents("user_points.txt");

if (isset($_POST["user"]) && !isset($_SESSION["user"])) {

  if (isset($user_ini_array[$_POST["user"]])) {
    if ($user_ini_array[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
	    preg_match('/'.$_SESSION["user"].'=(.*?)\n/', $userPoints, $match);
	    $_SESSION["Score"] = $match[1];
    }
  }
 

  if (!isset($_SESSION["user"])) {
	  $failed = true; 
	  }
}
 

if (isset($_SESSION["user"])) {
  header("Location: index.php"); 
}

?>