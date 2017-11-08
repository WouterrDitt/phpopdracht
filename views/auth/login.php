<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <?php require_once("views/pages/links.php"); ?>
  </head>
  <body>
    <!-- login form box -->
    <div class="container login">
      <div class="row">
         <div class="input-field col s4 push-s3">
           <form method="post" action="index.php" name="loginform">
             <div class="row">
                  <div class="input-field col s12">
                    <input id="login_input_username" name="user_name" type="text" class="validate">
                    <label for="password">Username</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="login_input_password" type="password" name="user_password" class="validate">
                    <label for="email">Password</label>
                  </div>
                </div>
                <br>
                <input type="submit" class="waves-effect waves-light btn"  name="login" value="Log in" />
          </form>
          <br>
          <a href="register.php">Register new account</a>
      </div>
    </div>
    <script>
    $(document).ready(function() {
        Materialize.updateTextFields();
      });
    </script>

<?php require_once("views/pages/scripts.php"); ?>
  </body>
</html>
