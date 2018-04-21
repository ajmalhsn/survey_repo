<?php include 'header.php';
include 'connect_db.php';

$q1_result=array();
$q2_result=array();
$sql4="SELECT q1,q2,q3,q4,q5 FROM q1_values,q2_values,survey WHERE survey.id=q1_values.fid AND survey.id=q2_values.fid";
$sql2=$link->prepare("SELECT count(q1) AS q1_sum FROM q1_values WHERE q1=?");
$sql3=$link->prepare("SELECT count(q2) AS q2_sum FROM q2_values WHERE q2=?");
$result_all=$link->query($sql4);
//$n=$mysqli_num_rows($result_all);

for($i=1;$i<5;$i++){
    $new="pr".$i;
    echo $new;
    $sql2->bind_param("s",$new);
    //echo $sql2;
    $sql2->execute();
    //print_r($q1["count(q1)"]);
    $result = $sql2->get_result();
    $row=$result->fetch_assoc();
    $q1_result[$i]=$row["q1_sum"];
    //echo $sum;
    //$sql2->bind_result($q1_test);
    //print_r(  $q1_test);
    //$sql2->bind_result($q1_result[$i]);
    
    /*while($row = mysql_fetch_array($q1)) {
    $q1_result[$i]=$row['count(q1)'];  
    break;
    }*/
    //$sql2=rtrim(trim($sql2),$i);
}
$sql2->close();
print_r($q1_result);
for($j=0;$j<4;$j++){
    $sql3->bind_param("i",$j);
    //echo $sql2;
    $sql3->execute();
    //print_r($q1["count(q1)"]);
    $result3 = $sql3->get_result();
    $row3=$result3->fetch_assoc();
    print_r($row3);
    $q2_result[$j]=$row3["q2_sum"];
}

print_r($q2_result);



?>

<div id="myfirstchart" style="height: 250px;"></div>




<script>



</script>


<?php include 'footer.php'?>