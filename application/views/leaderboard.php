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

	<a href="<?php echo base_url()?>index.php/home/questions"><div style="height:20px;width:150px;box-shadow: 0px 0px 5px #888888">Back to Questions</div></a>

	<table border="1">
		<thead>
			<th>Rank</th>
			<th>Team Username</th>
			<th>Total</th>
			<th>Q1 c/cpp</th>
			<th>Q1 java</th>
			<th>Q1 py</th>
			<th>Q2 c/cpp</th>
			<th>Q2 java</th>
			<th>Q2 py</th>
			<th>Q3 c/cpp</th>
			<th>Q3 java</th>
			<th>Q3 py</th>
			<th>Q4 c/cpp</th>
			<th>Q4 java</th>
			<th>Q4 py</th>
			<th>Q5 c/cpp</th>
			<th>Q5 java</th>
			<th>Q5 py</th>
		</thead>
		<tbody>

	<?php 
	$i=0;
	foreach ($leader as $row)
	{	$i++;
		echo "<tr>";
		echo "<td>".$i."<br>";
		echo "<td> ".$row['username']." </td>";
		echo "<td> ".$row['total']." </td>";
		echo "<td> ".$row['1_cpp']." </td>";
		echo "<td> ".$row['1_java']." </td>";
		echo "<td> ".$row['1_python']." </td>";
		echo "<td> ".$row['2_cpp']." </td>";
		echo "<td> ".$row['2_java']." </td>";
		echo "<td> ".$row['2_python']." </td>";
		echo "<td> ".$row['3_cpp']." </td>";
		echo "<td> ".$row['3_java']." </td>";
		echo "<td> ".$row['3_python']." </td>";
		echo "<td> ".$row['4_cpp']." </td>";
		echo "<td> ".$row['4_java']." </td>";
		echo "<td> ".$row['4_python']." </td>";
		echo "<td> ".$row['5_cpp']." </td>";
		echo "<td> ".$row['5_java']." </td>";
		echo "<td> ".$row['5_python']." </td>";
		
		echo "</tr>";
	}
	?>

		</tbody>

	</table>


</body>
</html>
