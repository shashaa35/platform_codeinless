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
<a href="<?php echo base_url()?>index.php/home/questions"><div style="height:20px;width:90px;box-shadow: 0px 0px 5px #888888">Back</div></a>
<form method="post" id="code" action="<?php echo base_url()?>index.php/Main/run">
	<select name="lang" id="lang">
	<option value="C">C</option>
	<option value="CPP">C++</option>
	<option value="JAVA">JAVA</option>
	<option value="PYTHON">Python</option>
</select>
	<select name="q_no" id="question">
	<option value="1">Question 1</option>
	<option value="2">Question 2</option>
	<option value="3">Question 3</option>
	<option value="4">Question 4</option>
</select><br>
	<textarea id="myInput" rows="30" cols="130" name="code" id="code"></textarea>
	<br>
	<button type="submit" value="Submit" id="run" >SUBMIT</button>
</form>
<script type="text/javascript">
    var myInput = document.getElementById("myInput");
    if(myInput.addEventListener ) {
        myInput.addEventListener('keydown',this.keyHandler,false);
    } else if(myInput.attachEvent ) {
        myInput.attachEvent('onkeydown',this.keyHandler); /* damn IE hack */
    }

    function keyHandler(e) {
        var TABKEY = 9;
        if(e.keyCode == TABKEY) {
            this.value += "    ";
            if(e.preventDefault) {
                e.preventDefault();
            }
            return false;
        }
    }
</script>
</body>
</html>
