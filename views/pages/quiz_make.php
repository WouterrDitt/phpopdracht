<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maak quiz</title>
    <?php require_once("links.php"); ?>
  </head>

<div class="container">
  <div class="row">
    <div class="col s4 red lighten-2 z-depth-2 quiz">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <div class="row">
            <div class="input-field col s12">
              <form action="index.php" method="post">
              <input type="text" name="QuizName" class="validate">
              <label>Quiz name</label>
            </div>
          </div>
        </div>
      </div>
     </div>
   </div>
   <div class="row">
     <div class="col s4 red lighten-2 z-depth-2 quiz">
       <div class="card blue-grey darken-1">
         <div class="card-content white-text">
           <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="Question" type="text" class="validate">
                    <label>Question</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="AnswerA" type="text" class="validate">
                    <label>answerA</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="AnswerB" type="text" class="validate">
                    <label>answerB</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="AnswerC" type="text" class="validate">
                    <label>answerC</label>
                  </div>
                </div>
                <div class="input-field col s12">
                  <select>
                    <option value="" disabled selected>Select the correct answer</option>
                    <option value="1">answer A</option>
                    <option value="2">answer B</option>
                    <option value="3">answer C</option>
                  </select>
                  <label>ANSWER</label>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </form>
            </div>
            </div>
         </div>
       </div>
     </div>
     <div class="col s4 push-s1 red lighten-2 z-depth-2 quiz">
       <div class="card blue-grey darken-1">
         <div class="card-content white-text">
           <div class="row">
             <?php ?>
            </div>
         </div>
       </div>
     </div>
   </div>
 </div>
  <?php require_once("scripts.php"); ?>
  </body>
</html>
