<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Status</title>
</head>
<body>
	<h2>LEADERBOARD</h2>
	<table border="1">
		<thead>
			<th>Rank</th>
			<th>Team Username</th>
			<th>Q1 c/cpp</th>
			<th>Q1 java</th>
			<th>Q1 python</th>
		</thead>
		<tbody>

	<?php 
	foreach ($leader as $row)
	{	
		echo "<tr>";
		echo "<td> ".$row['username']." </td>";
		echo "<td> ".$row['total']." </td>";
		echo "<td> ".$row['1_cpp']." </td>";
		echo "<td> ".$row['1_java']." </td>";
		echo "<td> ".$row['1_python']." </td>";
		echo "<tr>";
	}
	?>

		</tbody>

	</table>


</body>
</html>
