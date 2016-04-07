<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type="text/javascript">
	function signup()
	{
		form=document.getElementById("register");
		form.action="<?php echo base_url()?>index.php/Main/signup";
		form.submit();
	}
</script>
<h2>Register or Login</h2>
<h3><?php if(!empty($message))echo $message;?></h3>
<form method="get" id="register" action="<?php echo base_url()?>index.php/Main/login">
	<p>Team Username:</p><input type="text" name="username"/><br>
	<p>Password</p><input type="password" name="password"/><br>
	<button type="submit"  id="run" >LOGIN</button>
</form>
<a href="<?php echo base_url()?>index.php/home/register"><div style="height:20px;width:90px;box-shadow: 0px 0px 5px #888888">Register</div></a>

</body>
</html>
