<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Status</title>
</head>
<body>
	<?php 
	if($compile_status == "OK")
		echo "<h2>your compile status is $compile_status </h2>";
	else
		echo "<h2> Error ocurred </h2><br><h4> $compile_status</h4>";
	?>


</body>
</html>
