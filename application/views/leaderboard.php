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
                  <h3 style="font-size: 40px;">LEADERBOARD</h3>
              </div>
            </div>

            <div class="col s12">
              <div class="box">
                <table class="centered striped">
                  <thead>
                    <tr>
                        <th data-field="id" class="siz">Rank</th>
                        <th data-field="name" class="siz"> Team Name</th>
                        <th data-field="name" class="siz"> Total</th>
                        <th data-field="name" class="siz">Q1 C/C++</th>
                        <th data-field="name" class="siz">Q1 Java</th>
                        <th data-field="name" class="siz">Q1 Python</th>
                        <th data-field="name" class="siz">Q2 C/C++</th>
                        <th data-field="name" class="siz">Q2 Java</th>
                        <th data-field="name" class="siz">Q2 Python</th>
                        <th data-field="name" class="siz">Q3 C/C++</th>
                        <th data-field="name" class="siz">Q3 Java</th>
                        <th data-field="name" class="siz">Q3 Python</th>
                        <th data-field="name" class="siz">Q4 C/C++</th>
                        <th data-field="name" class="siz">Q4 Java</th>
                        <th data-field="name" class="siz">Q4 Python</th>
                        <th data-field="name" class="siz">Q5 C/C++</th>
                        <th data-field="name" class="siz">Q5 Java</th>
                        <th data-field="name" class="siz">Q5 Python</th>
                        
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                      $i=0;
                      foreach ($leader as $row)
                      { $i++;
                        echo "<tr>";
                          echo "<td>".$i."<br>";
                          echo "<td> ".$row['username']." </td>";
                          echo "<td> ".$row['total']." </td>";
                          echo "<td> ".$row['1_cpp']." </td>";
                          echo "<td> ".$row['1_java']." </td>";
                          echo "<td> ".$row['1_python']." </td>";
                          echo "<td> ".$row['2_cpp']." </td>";
                          echo "<td> ".$row['2_java']." </td>";
                          echo "<td> ".$row['2_python']." </td>";
                          echo "<td> ".$row['3_cpp']." </td>";
                          echo "<td> ".$row['3_java']." </td>";
                          echo "<td> ".$row['3_python']." </td>";
                          echo "<td> ".$row['4_cpp']." </td>";
                          echo "<td> ".$row['4_java']." </td>";
                          echo "<td> ".$row['4_python']." </td>";
                          echo "<td> ".$row['5_cpp']." </td>";
                          echo "<td> ".$row['5_java']." </td>";
                          echo "<td> ".$row['5_python']." </td>";
                        echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
                <br>
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