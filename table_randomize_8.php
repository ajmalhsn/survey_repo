<?php
    include 'connect_db.php';





$id=0;
$r=0;

$sql2="SELECT id,rotation_count_8 FROM rotation_plan_primary ORDER BY rotation_count_8 ASC LIMIT 1";
$result2=$link->query($sql2);
    if($result2->num_rows > 0){
        while($row=$result2->fetch_assoc()){
            $id=$row["id"];
            $r=$row["rotation_count_8"];
        }
    }
$r++;

$sql3="UPDATE rotation_plan_primary SET rotation_count_8=$r WHERE id=$id";
if($link->query($sql3)){
   
   
}
 
$sql="SELECT id,attributes FROM rotation_plan r,attributes_q8 a WHERE r.stid = a.id AND rid=$id";
//echo mysqli_error($link); 
$result=$link->query($sql);    
echo mysqli_error($link);
        
    $i=0;
$j=0;
$ratings=array("disagree","2","3","4","Agreed");
 $content = '<table class="table table-striped" border="3">';
    $content .= '<thead class="thead-dark"><tr><th scope="col">id</th><th scope="col">attributes</th><th scope="col"> 1</td><th scope="col">2</th><th scope="col">3</th><th scope="col">4</th><th scope="col">5</th><tr></thead><tbody>' ;
    //for($j=0;$j<mysqli_num_rows($result);$j++){
    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                        $content.='<tr scope="row"><td>'.$row["id"].'</td><td>'.$row["attributes"].'</td><td><input type="radio" name="group'.$row["id"].'"> </td><td><input type="radio" name="group'.$row["id"].'"> </td><td><input type="radio" name="group'.$row["id"].'"> </td><td><input type="radio" name="group'.$row["id"].'"> </td><td><input type="radio" name="group'.$row["id"].'"> </td></tr>';
                            
                        }
    }
$content.='</tbody></table>';
echo '<br>';
echo '<p>Q8 I would now like read some statements which reflects company culture, business orientation and ambitions for various SME owners/Decision makers. We would like to understand to what extent do you agree with these statements for yourself.</p>';
echo '<p><b>Please use a scale of 1-5, where 5 is Completely Agree and 1 is Completely Disagree. You can also
give a score in between as per your opinion.</b>    </p>';
echo $content;


?>