<?php
//echo '<div class="container-fluid"><form mthod="GET" action="self">'; 
    echo '<div class="row justify-content-md-center">';
    echo '<div class="col-md-auto">';
    $sql="SELECT * FROM ques";
$result=$link->query($sql);
if($result->num_rows > 0){
    //echo '<div class="row justify-content-md-center">';
$count=0;    
  $j=1; 
    
    $k=1;
while($row = $result->fetch_assoc()) {
   // print_r($row);
    /*echo '<div class="row justify-content-md-center">';
    echo '<div class="col-sm">';*/
     
        echo '<p>'.$row["id"].'. '.$row["question_eng"].'<br> ('.$row["question_ar"].')</p>';
    echo '<div class="form-check">';
       
    $value_count=1;
    for($i=1;$i<=7;$i++){
        $ar='o'.$i.'_a';
        $en='o'.$i.'_e';
    if($row["id"]==11 && $row["".$en]!=null){
        echo '<div class="custom-control custom-checkbox ">
        <input type="checkbox" id="customRadio'.$j.'" name="customRadio'.$k.'[]" value="'.$value_count++.'" class="custom-control-input" >
        <label class="custom-control-label" for="customRadio'.$j.'">'.$row["".$en].' '.$row["".$ar].' '.'</label>
    </div>';
     $j++;    
    }else if($row["".$en]!=null){
        echo '<br>';
        
    echo '<div class="custom-control custom-radio ">
        <input type="radio" id="customRadio'.$j.'" name="customRadio'.$k.'" value="'.$value_count++.'" class="custom-control-input" required >
        <label class="custom-control-label" for="customRadio'.$j.'">'.$row["".$en].' '.$row["".$ar].' '.'</label>
    </div>';
        $j++;
        }
    }
    if($row["id"]==11){
        echo '<div class="col-sm12-md6-lg3"><div class="form-group" id="excess">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Others..."></div></div>';
    }
    echo '</div>';
    echo '<br>';
    
    $k++;
    }
}
else
  echo 'pls check syntax';
    echo '</div>';
    echo '</div>';
//echo '<button type="submit" class="btn btn-primary">Submit</button></form></div>';
    
?>
