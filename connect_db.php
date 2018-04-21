<?php
$link = mysqli_connect('localhost','root','','test');
if($link){
    $res=mysqli_query($link,"SET NAMES 'utf8'"); 
$res2=mysqli_query($link,'SET CHARACTER SET utf8'); 

}
  //echo 'db connected succesfully';
  //$userid="ajmal12";
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
  }*/
else
  echo 'pls check syntax';

?>
