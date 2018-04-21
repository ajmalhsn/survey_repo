<?php session_start();
include 'connect_db.php';

    //if (basename($_SERVER['PHP_SELF']) != "verify.php") {
      //  session_destroy();
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
    //}
//    if(isset($_SESSION["user"])&& $_SESSION['previous']=="verify.php"){

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.ico">

    <title>JJ Market Research</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

  </head>

  <body class="bg-light">
    <div class="container">
      <div class="row">
      <div class="form-group">
        <form class="needs-validation" id="form_screen" action="input_process.php" method="GET" novalidate>
                <p>Q9. For how long have you been providing Private Medical/Health insurance to your employees? SHOW CARD. SINGLE ANSWER POSSIBLE</p>
          <div class="form-check">
              <br>
              <div class="custom-control custom-radio ">
      <input type="radio" id="Q9_opt1" name="Q9" value="1" class="custom-control-input" required >
          <label class="custom-control-label" for="Q9_opt1">Less than 1 year
          </label>
      </div>
      <div class="custom-control custom-radio ">
      <input type="radio" id="Q9_opt2" name="Q9" value="2" class="custom-control-input" required >
      <label class="custom-control-label" for="Q9_opt2">1-3 years</label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q9_opt3" name="Q9" value="3" class="custom-control-input" required >
  <label class="custom-control-label" for="Q9_opt3">3-5 years</label>
</div>
<div class="custom-control custom-radio ">
<input type="radio" id="Q9_opt4" name="Q9" value="4" class="custom-control-input" required >
<label class="custom-control-label" for="Q9_opt4">More than 5 years</label>
</div>
          <br>
        </div>
        <p>Q10. What would you say are the main reasons that your company provides the staff with Medical/Health insurance? SHOW CARD. MULTIPLE ANSWERS POSSIBLE</p>
  <div class="form-check">
      <br>
      <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt1" name="Q10" value="1" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt1">Since we deeply care about employee health and well being
  </label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt2" name="Q10" value="2" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt2">It is a special benefit to keep employees loyal to the company</label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt3" name="Q10" value="3" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt3">It is an investment in our company’s future</label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt4" name="Q10" value="4" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt4">It is the minimum we can do for employees</label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt5" name="Q10" value="5" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt5">Because employees feel safe and confident to do their job</label>
  </div>

  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt6" name="Q10" value="6" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt6">Is easier compensating staff if claimed as an expense</label>
  </div>

  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt7" name="Q10" value="7" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt7">Improve our package to the staff</label>
  </div>

  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt8" name="Q10" value="8" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt8">Creating better relations between staff & the company</label>
  </div>
  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt9" name="Q10" value="9" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt9">Helps the company maintain a healthy workforce</label>
  </div>

  <div class="custom-control custom-radio ">
  <input type="radio" id="Q10_opt10" name="Q10" value="10" class="custom-control-input" required >
  <label class="custom-control-label" for="Q10_opt10">Due to government regulations</label>
  </div>
  <div class="custom-control">
  <input type="text" id="Q10_opt10" name="Q10"  class="custom-control-input">
  <label class="custom-control-label" for="Q10_opt10">Others pls specify</label>
  </div>



  <br>
  </div>

  <p>Q17. What would you say are the main reasons that your company provides the staff with Medical/Health insurance? SHOW CARD. MULTIPLE ANSWERS POSSIBLE</p>
  <div class="form-check">
      <br>
  <?php
  $row_col=0;
      $sql4="SELECT * FROM brand_set";
      $result2=$link->query($sql4);
          if($result2->num_rows > 0){
            echo '<div class="row">';
              echo '<div class="col">';
              while($row=$result2->fetch_assoc()){
                if($row_col==14){
                echo '</div><div class="col">';
              }
                echo '<div class="custom-control custom-radio ">'
                    .'<input type="checkbox" id="Q17_'.htmlspecialchars($row["id"]).'" name="Q17[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
                    .'<label class="custom-control-label" for="Q17_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
              echo '</label>';
              echo '</div>';
                  //$id=$row["id"];
                  //$r=$row["rotation_count"];
                  $row_col++;
              }
              echo '</div></div>';
          }
  ?>
  <br>
  </div>
  <p> Q18. Which Private Medical/Health Insurance Company did you invite for proposals in your last selection process? SHOW PMI LIST. MULTIPLE ANSWERS POSSIBLE</p>
  <?php
  $row_col=0;
      $sql4="SELECT * FROM brand_set";
      $result2=$link->query($sql4);
          if($result2->num_rows > 0){
            echo '<div class="row">';
              echo '<div class="col">';
              while($row=$result2->fetch_assoc()){
                if($row_col==14){
                echo '</div><div class="col">';
              }
                echo '<div class="custom-control custom-radio ">'
                    .'<input type="checkbox" id="Q17_'.htmlspecialchars($row["id"]).'" name="Q18[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
                    .'<label class="custom-control-label" for="Q18_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
              echo '</label>';
              echo '</div>';
                  //$id=$row["id"];
                  //$r=$row["rotation_count"];
                  $row_col++;
              }
              echo '</div></div>';
          }
  ?>
  <p>Q19. Which Private Medical/Health Insurance Company is the current insurer for your employees? SHOW PMI LIST. SINGLE ANSWER POSSIBLE</p>
  <?php
  $row_col=0;
      $sql4="SELECT * FROM brand_set";
      $result2=$link->query($sql4);
          if($result2->num_rows > 0){
            echo '<div class="row">';
              echo '<div class="col">';
              while($row=$result2->fetch_assoc()){
                if($row_col==14){
                echo '</div><div class="col">';
              }
                echo '<div class="custom-control custom-radio ">'
                    .'<input type="checkbox" id="Q17_'.htmlspecialchars($row["id"]).'" name="Q18[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
                    .'<label class="custom-control-label" for="Q18_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
              echo '</label>';
              echo '</div>';
                  //$id=$row["id"];
                  //$r=$row["rotation_count"];
                  $row_col++;
              }
              echo '</div></div>';
          }
  ?>
  <p>Q20. And which Private Medical/Health Insurance Company were you using before ________ for your company’s Medical Insurance/Health Insurance needs? SHOW PMI LIST. SINGLE ANSWER POSSIBLE</p>
  <?php
  $row_col=0;
      $sql4="SELECT * FROM brand_set";
      $result2=$link->query($sql4);
          if($result2->num_rows > 0){
            echo '<div class="row">';
              echo '<div class="col">';
              while($row=$result2->fetch_assoc()){
                if($row_col==14){
                echo '</div><div class="col">';
              }
                echo '<div class="custom-control custom-radio ">'
                    .'<input type="checkbox" id="Q17_'.htmlspecialchars($row["id"]).'" name="Q18[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
                    .'<label class="custom-control-label" for="Q18_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
              echo '</label>';
              echo '</div>';
                  //$id=$row["id"];
                  //$r=$row["rotation_count"];
                  $row_col++;
              }
              echo '</div></div>';
          }
  ?>
<br>
<br>
  <input type="submit"/>
          </form>
          </div>
      </div>
    </div>
  </body>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 JJ Market Research</p>
        <!--<ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>-->
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script>
      /* window.onload = function(){
    document.getElementById("subm").onclick=function(){
        alert("Hello WOrld");
    }
} */

      </script>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        /*console.log("hello");
       document.getElementById("excess").style.visibility = "hidden";
        document.getElementById("customRadio43").onclick = function() { document.getElementById("excess").style.visibility = "visible";
            };
        (function() {
        'use strict';

   window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if(document.getElementById('customRadio6').checked||document.getElementById('customRadio13').checked||document.getElementById('customRadio20').checked||document.getElementById('customRadio27').checked){
                event.preventDefault();
                event.stopPropagation();
                alert("please insert appropriate values otherwise the interview is terminated");
                return;
            }
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();*/
    </script>
  </body>
</html>
<?php
/*}
else{
    echo 'Please login sorry for the inconvineince...';
    sleep(3);
     header("Location:login.php");
}*/
?>
