<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>leaderboards</title>
      <?php  require_once("links.php"); ?>
  </head>
  <body>

  <div class="container">

     <div class="row">
        <div class="col s8 push-s1 red lighten-2 z-depth-2 quiz">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Leaderboards</span>
            </div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col s8 push-s1 red lighten-2 z-depth-2 quiz">
        <div class="card blue-grey darken-1">
          <table class="table-responsive  white-text">

    <!--             Table head             --->
           <thead>
             <tr>
                 <th>Username</th>
                 <th>Score</th>
             </tr>
           </thead>

    <!--             Table body           --->

           <tbody class="remove" id="table_body">
              <?php
              require_once("connect.php");
              $getUserInfo = $conn->query("SELECT user_name, user_score FROM users ORDER BY user_score DESC");


              if($getUserInfo == !NULL){
                foreach ($getUserInfo as $info) {
                  echo "<tr>";
                  echo "<td>" . $info['user_name'] . "</td>";
                  echo "<td>" . $info['user_score'] . "</td>";
                  echo "</tr>";
                }
              }
              else{
                  echo "<td>" . "no data to show" . "</td>";
              }
              ?>
             </tbody>
      <!--             end           --->
           </table>
        </div>

      </div>
    </div>
</div>
<?php  require_once("scripts.php"); ?>
  </body>
</html>
