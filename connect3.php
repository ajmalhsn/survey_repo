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
    echo '<br>';
echo '<div class="container">'; 
    echo '<div class="row justify-content-md-center">';
    echo '<div class="col-md-auto">';
if($link){
    $i=0;
    $r=0;
    $sql2="SELECT id,rotation_count FROM rotation_plan_primary ORDER BY rotation_count ASC LIMIT 1";
    $result2=$link->query($sql2);
    if($result2->num_rows > 0){
        while($row=$result2->fetch_assoc()){
            $i=$row["id"];
            $r=$row["rotation_count"];
        }
    }
    $r++;
    $sql3="UPDATE rotation_plan_primary SET rotation_count=$r WHERE id=$i";
if($link->query($sql3)){    
    $sql="SELECT * FROM rotation_plan r,statements s WHERE rid=$i AND r.stid=s.stid";
}
$result=$link->query($sql);
if($result->num_rows > 0){
    
while($row = $result->fetch_assoc()) {
   echo $row["statement"];
    echo '<br></div>';
        }
    }
echo '</div>';
   
    }
else
  echo 'pls check syntax';
    
    echo '</div>';
    
?>
    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
</html>
