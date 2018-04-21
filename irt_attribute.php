<?php
include 'connect_db.php';
//session_start();

// $id=0;
// $id1=1;
// $r=0;
 $id_counter=$_GET["id"];
// echo $id_counter;
// if(isset($_GET["id"])){
//   $sql2="SELECT id,irt_rotation_count FROM rotation_plan_primary ORDER BY irt_rotation_count ASC LIMIT 1";
//   $result2=$link->query($sql2);
//       if($result2->num_rows > 0){
//           while($row=$result2->fetch_assoc()){
//               $id=$row["id"];
//               $r=$row["irt_rotation_count"];
//           }
//       }
//     //  $_SESSION["id"]=$r;
//   $r++;
//   $id1=$id;
//   echo $r;
//   echo '<br>';
//   $sql3="UPDATE rotation_plan_primary SET irt_rotation_count=$r WHERE id=$id";
//   if($link->query($sql3)){
//
//   }
// }//else if (//$_SESSION["id"]>4){
//   //$_SESSION["id"]=1;
// //}
//     //  $id1=$_SESSION["id"];
//       echo $id1;

  $sql="SELECT id,attribute FROM irt_attributes WHERE  id=$id_counter";
  //echo mysqli_error($link);
  $result=$link->query($sql);
  //echo mysqli_error($link);
 //$sql="SELECT * FROM irt_attributes where id=$id";
    //$result=$link->query($sql);
    echo mysqli_error($link);
    if($result->num_rows > 0){
            $i=1;
            while($row = $result->fetch_assoc()) {
              //echo $result;
            //echo '<div class="col-md-6-centre">';
            echo '<h3>'.$row["attribute"].' </h3><br><input type="hidden" name="Q28" value="'.$row["id"].'"/>';
            //echo '<input type="hidden" value="'.htmlspecialchars($company_id).'"';
            $i++;
            }

    }
?>
