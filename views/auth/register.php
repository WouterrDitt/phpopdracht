<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <?php require_once("views/pages/links.php"); ?>
  </head>
  <body>
    <!-- register form -->
    <div class="container register">
      <div class="row">
           <div class="input-field col s4 push-s3">
        <form method="post" action="register.php" name="registerform">

            <!-- the user name input field uses a HTML5 pattern check -->
            <div class="row">
              <div class="input-field col s12">
              <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
              <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
              </div>
            </div>

            <!-- the email input field uses a HTML5 email type check -->
            <div class="row">
              <div class="input-field col s12">
                <input id="login_input_email" class="login_input" type="email" name="user_email" required />
                <label for="login_input_email">User's email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                <label for="login_input_password_new">Password (min. 6 characters)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                <label for="login_input_password_repeat">Repeat password</label>
              </div>
            </div>

            <div class="row">
            <input type="submit" class="waves-effect waves-light btn" name="register" value="Register" />
          </div>
        </form>
        <a href="index.php">Back to Login Page</a>
       </div>
      </div>
    </div>
    <?php require_once("views/pages/scripts.php"); ?>
  </body>
</html>


<!-- backlink -->
