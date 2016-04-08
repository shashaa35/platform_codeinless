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
      <script type="text/javascript">
        function signup()
        {
          form=document.getElementById("register");
          form.action="<?php echo base_url()?>index.php/Main/signup";
          form.submit();
        }
      </script>
    </head>

    <body>

      <div class="center">
        <img src="<?php echo base_url() ?>img/logo.png">
      </div>
      
      <br><br>
      <div class="container">
        <div class="row">
          <div class="col s5 login center">
            <h3>LOGIN</h3>
            <br><br>
            <div class="row center">
              <form class="col s12" method="get" id="register" action="<?php echo base_url()?>index.php/Main/login">
                <div class="row">
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text" name="username">
                    <label for="name">Username</label>
                  </div>
                  <br>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_telephone" type="password" class="password" name="password">
                    <label for="icon_telephone">Password</label>
                  </div>
                </div>
                <button class="waves-effect waves-light btn btn-large" type="submit"  id="run">LOGIN</button>
              </form>
            </div>
            <h3 style="font-size: 20px; color: red;"><?php if(!empty($message))echo $message;?></h3>
          </div>
          
          <div class="col s2 center white-text">
            <p style="padding-top: 200px;">--- or ---</p>
          </div>

          <div class="col s5 signup center">
            <h3>SIGN UP</h3>
            <br><br>
            <div class="row center">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s10">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text">
                    <label for="name">Username</label>
                  </div>
                  <br>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_telephone" type="password" class="password">
                    <label for="icon_telephone">Password</label>
                  </div>
                  <div class="input-field col s10">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_telephone" type="password" class="password">
                    <label for="icon_telephone">Confirm Password</label>
                  </div>
                </div>
              </form>
              <a class="waves-effect waves-light btn btn-large">SIGN UP</a>
            </div>
          </div>
        </div>
      </div>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>js/materialize.min.js"></script>
    </body>
  </html>