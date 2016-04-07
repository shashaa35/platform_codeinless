<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Status</title>
</head>
<body>
	<a href="<?php echo base_url()?>index.php/home/questions"><div style="height:20px;width:90px;box-shadow: 0px 0px 5px #888888">Back to questions</div></a>

	<a href="<?php echo base_url()?>index.php/home/leaderboard"><div style="height:20px;width:100px;box-shadow: 0px 0px 5px #888888">Leaderboard</div></a>
	<?php 
	if($compile_status == "OK")
		echo "<h2>$message </h2>";
	else
		echo "<h2> Error ocurred </h2><br><h4> $compile_status</h4>";
	?>


</body>
</html>
