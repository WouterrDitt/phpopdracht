<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php quiz</title>
<?php include("links.php");?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s5 red lighten-2 z-depth-2 quiz"><div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">PHP Quiz</span>
              <p>Je word gematched tegen 1 andere tegenstander, degene die de meeste vragen goed beantwoord wint de quiz en gaat door naar de volgende ronde</p>
            </div>
          </div></div>
          <div class="col s5 red push-s1 lighten-2 z-depth-2 quiz"><div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <p>Jij bent gematched tegen:</p>
                <span class="card-title">PIETER</span>
              </div>
            </div></div>
      </div>
      <div class="row">
        <div class="col s5 red lighten-2 z-depth-2 quiz">
          <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Nieuwe quiz</span>
             </div>
          </div>
          <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <div class="input-field">
                   <br>
                <form action="#" method="post">
                   <select>
                     <option value="" disabled selected>Choose your option</option>
                     <option value="1">Option 1</option>
                     <option value="2">Option 2</option>
                     <option value="3">Option 3</option>
                   </select>
                   <label><h5>Materialize Select</h5></label>
                 </div>
                 <br>
                 <div class="input-field">
                   <br>
                   <select>
                     <option value="" disabled selected>Choose your option</option>
                     <option value="1">Option 1</option>
                     <option value="2">Option 2</option>
                     <option value="3">Option 3</option>
                   </select>
                   <label><h5>Materialize Select</h5></label>
                  </div>
                  <br>
                  <div class="input-field">
                    <br>
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label><h5>Materialize Select</h5></label>
                   </div>
                   <br>
                   <button class="btn waves-effect waves-light red" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                  </button>
                 </form>
             </div>
          </div>
      </div>
    </div>
    <?php include("scripts.php") ?>
  </body>
</html>
