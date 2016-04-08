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
            <li><a href="#">RULES</a></li>
            <li><a href="#">LOGOUT</a></li>
          </ul>
        </div>
      </nav>
      
      <br><br><br>
      <section>
        <div class="container">
          <div class="row">
            
            <div class="col s12">
              <div class="boxhead center">
                  <h3 style="font-size: 40px;"><?php echo $q_no;?></h3>
              </div>
            </div>

            <div class="col s12">
              <div class="box">
                
                <div id="txt">
                  <?php echo $q_desc;?>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>js/materialize.min.js"></script>
    </body>
  </html>