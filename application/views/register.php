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
</script>
<h2>Register or Login</h2>
<h3><?php if(!empty($message))echo $message;?></h3>
<form method="get" id="register" action="<?php echo base_url()?>index.php/Main/signup">
	<p>Team Username:</p><input type="text" name="username"/><br>
	<p>Password</p><input type="password" name="password"/><br>
	<button type="submit"  id="run" >Signup</button>
</form>
</body>
</html>
