<?php include 'connect_db.php' ?>
<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
        <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="images/jj_logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
    JJ Market Research
  </a>
</nav>
          
    </head>
    <body>


 <?php
    echo '<div class="container">'; 
        echo '<div class="row `">';
        if($link){
            $sql="SELECT * FROM insurance_company";
            $result=$link->query($sql);
            if($result->num_rows > 0){
                    $i=1;  
                    while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-6">';
                    echo '<div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck"'.$i.'>
                    <label class="custom-control-label" for="customCheck1">'.$row["insurance_e"].' ('.$row["insurance_a"].')</label></div><br></div>';
                    $i++;
                    }
   
            }
        }
else
  echo 'pls check syntax';
    echo '</div>';
    echo '</div>';
    



 ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    </body> 
    </html>