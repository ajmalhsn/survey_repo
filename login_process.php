<?php include 'connect_db.php';


$userid=$_POST["user"];
$pass=$_POST["pass"];
if($userid==$pass)
    echo 'login successful';
  //$pass="ajmal1234";
  //$sql="SELECT password FROM SUBSCRIPTIONS WHERE USER_ID = '$userid' ";
  //$result=$link->query($sql);
  //if($result->num_rows>0){
    /*while($row=$result->fetch_assoc()){
      echo $row["password"];
      if($row["password"]==$pass){
        echo 'password verified ...';
      }
    }
  }
*/
else
  echo 'unsuccessful';