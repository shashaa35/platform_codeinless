<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Ide</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>



<h2>IDE</h2>
<form method="post" id="code" action="<?php echo base_url()?>index.php/Main/run">
	<select name="lang" id="lang">
	<option value="C">C</option>
	<option value="CPP11">C++</option>
	<option value="JAVA">JAVA</option>
	<option value="PYTHON">Python</option>
</select>
	<select name="q_no" id="question">
	<option value="1">Question 1</option>
	<option value="2">Question 2</option>
	<option value="3">Question 3</option>
	<option value="4">Question 4</option>
</select><br>
	<textarea rows="30" cols="130" name="code" id="code">
	</textarea>
	<br>
	<button type="submit" value="Submit" id="run" >SUBMIT</button>
</form>
</body>
</html>
