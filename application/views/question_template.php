<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Question Page</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>

<a href="<?php echo base_url()?>index.php/home/questions"><div style="height:20px;width:90px;box-shadow: 0px 0px 5px #888888">Back</div></a>
<h2><?php echo $q_no;?></h2>
<div>
<?php echo $q_desc;?>
	</div>

<a href="<?php echo base_url()?>"><div style="height:20px;width:50px;box-shadow: 0px 0px 5px #888888">test run</div></a>

<a href="<?php echo base_url()?>index.php/home/leaderboard"><div style="height:20px;width:100px;box-shadow: 0px 0px 5px #888888">Leaderboard</div></a>






</body>
</html>