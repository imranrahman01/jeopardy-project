<?php

session_start();

$lines = file("user_points.txt", FILE_IGNORE_NEW_LINES);
$board = array();
$newBoard = array();
$names = array();
$points = array();
for($i=0; $i<count($lines); $i++) {
	$data = explode('=', $lines[$i]);
	array_push($names, $data[0]);
	$test2 = intval($data[1]);
	array_push($points, $test2);
}


function bubble_Sort($names, $points)
{
	do
	{
		$swapped = false;
		for( $i = 0;  $i < count($names)-1; $i++ )
		{
			if($points[$i] < $points[$i+1])
			{
				
				list($names[$i+1], $names[$i] ) =
						array($names[$i], $names[$i+1]);
				list($points[$i+1], $points[$i] ) =
						array($points[$i], $points[$i+1]);

				$swapped = true;
			}
		}
	}
	while($swapped);
	return array($names, $points);
}

$newBoard = bubble_Sort($names, $points);
	
?>

<?php include ("header.php") ?>
	
	<h3 class="leadb"> LEADERBOARD </h3>

	<table class="ldb">
		<tr>
			<th> User </th>
			<th> Score </th>
		</tr>

		<?php
			//Create table to display array 
			for ($i=0; $i<count($names); $i++) {
				echo"<tr>";
				echo "<td>" . $newBoard[0][$i] . "</td>";
				echo "<td> $" . $newBoard[1][$i] . "</td>";
				echo "</tr>";
			}
		?>
	</table>

	</body>

</html>