<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>img/icon.png">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper">
          <a href="<?php echo base_url()?>index.php/home/questions" class="brand-logo"><img src="<?php echo base_url() ?>img/head.png"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url()?>index.php/home/questions">HOME</a></li>
            <li><a href="<?php echo base_url()?>">SUBMIT</a></li>
            <li><a href="<?php echo base_url()?>index.php/home/leaderboard">LEADERBOARD</a></li>
            <li><a href="<?php echo base_url()?>index.php/home/logout">LOGOUT</a></li>
          </ul>
        </div>
      </nav>
      
      <br><br><br>
      <section>
        <div class="container">
          <div class="row">
            
            <div class="col s12">
              <div class="boxhead center">
                  <h3 style="font-size: 40px;">IDE</h3>
              </div>
            </div>
            <div><br><br></div>

            <div class="col s12">
                <form method="post" id="code" action="<?php echo base_url()?>index.php/Main/run">  
                  <select name="lang" id="lang" style="">
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
                  
                  <br>
                  <textarea id="myInput" rows="30" cols="130" name="code" id="code"></textarea>
                  <br>
                  <center>
                  <button type="submit" value="Submit" id="run" class="btn btn-large waves-effect btn">SUBMIT</button>
                  </center>
                </form>
              
            </div>

          </div>
        </div>
      </section>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>js/materialize.min.js"></script>
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
      <script type="text/javascript">
        $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
      </script>
    </body>
  </html>