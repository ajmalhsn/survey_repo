<?php
session_start();

if($_SESSION['user']==session_id()){



include 'connect_db.php';
//error_reporting(E_ALL);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$first_name=$_GET["first_name"];
$last_name=$_GET["last_name"];
$tel_mobile=$_GET["tel_mobile"];
$tel_landline=$_GET["tel_landline"];
$email=$_GET["email"];
$address=$_GET["address"];
$question1=$_GET["customRadio1"];
$question2=$_GET["customRadio2"];
$question3=$_GET["customRadio3"];
$question4=$_GET["customRadio4"];
$question5=$_GET["customRadio5"];
$question6=$_GET["customRadio6"];
$question7=$_GET["customRadio7"];
$question8=$_GET["customRadio8"];
$question9=$_GET["customRadio9"];
$question10=$_GET["customRadio10"];
$_SESSION["Q2"]=$_GET["customRadio10"];
$question11=$_GET["customRadio11"];
    
    
$sql2=$link->prepare("INSERT INTO screener_survey(first_name,last_name,address,email,tel_mobile,tel_landline) VALUES(?,?,?,?,?,?)");    

$sql2->bind_param("ssssii",$first_name,$last_name,$address,$email,$tel_mobile,$tel_landline);    
$sql2->execute();    
$stmt_select="SELECT id FROM ans ORDER BY id DESC LIMIT 1";    
$result=$link->query($stmt_select);
   
$id=0;    
if($result->num_rows > 0){  
while($row = $result->fetch_assoc()) {
    $id=$row["id"];    
    }
}
$sql=$link->prepare("INSERT INTO ans(a1,a2,a3,a4,a5,a6,a7,a8,a9,a10) VALUES(?,?,?,?,?,?,?,?,?,?)");
$sql->bind_param("iiiiiiiiii",$question1,$question2,$question3,$question4,$question5,$question6,$question7,$question8,$question9,$question10);    
    
$sql->execute();       
$id+=1;    
$stmt2=$link->prepare("INSERT INTO s11_values(fid,q1) VALUES(?,?)");    
//$stmt2=$link->prepare("INSERT INTO q1_values(fid,q1) VALUES(?,?)");    
for ($i=0; $i<count($question11); $i++) {
        //echo $question11[$i]."<br/>";
        $stmt2->bind_param("ii",$id,$question11[$i]);
        $stmt2->execute();
    echo mysqli_error ( $link ) ;
        
    }
  
echo mysqli_error ( $link ) ;  
echo "everything executed properly i think";  
sleep(2);
header("Location:survey_pg2.php");
$_SESSION['user']=basename($_SERVER["PHP_SELF"]);
}
/*
$id=0;
$product_use;
$product_which;
$text_image;
$linking;

$sql="SELECT id FROM survey ORDER BY id DESC LIMIT 1";
$result=$link->query($sql);
if($result->num_rows > 0){  
while($row = $result->fetch_assoc()) {
    $id=$row["id"];    
    }
}
echo $id;
$id+=1;
echo $id;
$stmt2=$link->prepare("INSERT INTO q1_values(fid,q1) VALUES(?,?)");
$stmt3=$link->prepare("INSERT INTO q2_values(fid,q2) VALUES(?,?)");
$switch_provider = array();
if(isset($_POST["group1"]) && isset($_POST["txt_img"])){    
$product_use=$_POST["group1"];
    $text_image=$_POST["txt_img"];

    }
echo $product_use. "<br>";
if (isset($_POST['product_which'])) {
    $optionArray = $_POST['product_which'];
    echo "going in <br>";
}
$liking=$_POST['slider_range'];
if(is_array($_POST["reason_switch"])){
$switch_provider=$_POST["reason_switch"];
//foreach ($_POST["reason_switch"] as $selectedOption){
  //  echo $selectedOption . "<p> hello2</p><br>";
    //$switch_provider=$selectedOption;
}
//else
   // echo "not an array";
echo  "  " . $liking;

$stmt=$link->prepare("INSERT INTO survey(id,q3,q4,q5) VALUES(?,?,?,?)");
$stmt->bind_param("iiis",$id,$product_use,$liking,$text_image);
$stmt->execute();
for ($i=0; $i<count($optionArray); $i++) {
        echo $optionArray[$i]."<br/>";
        $stmt2->bind_param("is",$id,$optionArray[$i]);
        $stmt2->execute();
        
    }
for($i=0;$i<count($switch_provider);$i++){
    echo $switch_provider[$i]."<br>";
    $stmt3->bind_param("is",$id,$switch_provider[$i]);
    $stmt3->execute();
}
$stmt->close();
$stmt2->close();    

//$link->query($sql); 


    
if(isset($_POST["name1"])&&isset($_POST['telephone'])&&isset($_POST["group1"])&&isset($_POST["group2"])&&isset($_POST["group3"])&&isset($_POST["group4"])){
    
            $id;
            $var1=$_POST["name1"];
            $var2=$_POST["telephone"];
            $var3=$_POST["group1"];
            $var4=$_POST["group2"];
            $var5=$_POST["group3"];
            $var6=$_POST["group4"];
            //echo $var1,$var2,$var3,$var4
            //echo $sql_last;
            $sql="SELECT id FROM survey ORDER BY id DESC LIMIT 1";
                $result2=$link->query($sql);
            if($result2->num_rows > 0){  
                while($row2 = $result2->fetch_assoc()) {
                    $id_las=$row2["id"];    
                }
            }            
    echo $id_las;
    $sql_last="UPDATE survey SET first_name='$var1' , tel='$var2' , factor1='$var3' , factor2='$var4' , factor3='$var5' , factor4='$var6' WHERE id ='$id_las'";
            $result5=$link->query($sql_last);
            echo $result5;
            //echo $sql_last->execute();
    if(mysqli_affected_rows($link) >= 0){echo 'yay'; }
    
    header("Location:result.php");
    die();
        
        
}
*/


?>