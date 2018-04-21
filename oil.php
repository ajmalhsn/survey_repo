<?php 
include 'connect_db.php';


if(isset($_POST["name1"])&&isset($_POST["telephone"])&&isset($_POST["opinion1"])&&isset($_POST["rating"])){
$name=$_POST["name1"];
$tel=$_POST["telephone"];
$city=$_POST["city"];
$cont1=$_POST["small"];
$cont2=$_POST["medium"];
$cont3=$_POST["large"];
$opinion_friendly=$_POST["opinion1"];
$rating=$_POST["rating"];

$stmt=$link->prepare("INSERT INTO oil_survey ( `name`, `tel`, `city`, `small`, `medium`, `large`, `opinion`, `rating`) VALUES (?,?,?,?,?,?,?,?)");
if(!$stmt){
    echo 'false';
}  
$stmt->bind_param("sisiiiii",$name,$tel,$city,$cont1,$cont2,$cont3,$opinion_friendly,$rating);
echo mysqli_error($link);
$result=$stmt->execute();
    echo $result;
    
echo $opinion_friendly;
}
else{
echo 'check syntax '+$_POST["opinion1"]+" "+$_POST["name1"];
}










?>





