<?php
include 'connect_db.php';
$id=0;
$optionArray;
$sql="SELECT id FROM screener_survey ORDER BY id DESC LIMIT 1";
$result=$link->query($sql);
if($result->num_rows > 0){  
while($row = $result->fetch_assoc()) {
    $id=$row["id"];    
    }
}

$q17=17;
$q18=18;
$stmt2=$link->prepare("INSERT INTO brand_set_ans(fid,qid,brand_value) VALUES(?,?,?)");
$stmt3=$link->prepare("INSERT INTO brand_set_ans(fid,qid,brand_value) VALUES(?,?,?)");

if (isset($_POST['Q17'])) {
    $optionArray = $_POST['Q17'];
    echo "going in <br>";
}
for ($i=0; $i<count($optionArray); $i++) {
        echo $optionArray[$i]."<br/>";
        //echo mysqli_error($link);
    
        $stmt2->bind_param("iii",$id,$q17,$optionArray[$i]);
        
        $stmt2->execute();
        
}
if (isset($_POST['Q18'])) {
    $optionArray = $_POST['Q18'];
    echo "going in <br>";
}
for ($i=0; $i<count($optionArray); $i++) {
        echo $optionArray[$i]."<br/>";
        //echo mysqli_error($link);
    
        $stmt2->bind_param("iii",$id,$q18,$optionArray[$i]);
        
        $stmt2->execute();

}

//echo "everything worked successfully"
//sleep(5);
//header("Location:IRT.php");
//exit(0);
?>
