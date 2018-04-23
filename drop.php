<?php include 'connect_db.php';


$sql="SELECT id from screener_survey ORDER BY id DESC LIMIT 1";
$result=$link->query($sql);
if($result->num_rows > 0){  
while($row = $result->fetch_assoc()) {
    $id=$row["id"];    
    }
}
$stmt2="SELECT a19 FROM answer_set WHERE id=$id";
$result_dropdown=$link->query($stmt2);
if($result_dropdown->num_rows > 0){  
while($row = $result_dropdown->fetch_assoc()) {
    $value=$row["a19"];    
    }
}

switch($value){
    case 1:{
     ?>

<?php 
    }        
    case 6:{
?>     

    
<?php }
    case 24:{
?>        
<?php    }   
    case 16:{
?>
<?php    }   
    case 20:{
?>        
<?php    }
    case 11:{
?>        
    }
<?php    case 22:{
?>        
<?php    }    
?>        
}



?>