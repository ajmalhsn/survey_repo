<?php
session_start();
include 'connect_db.php';


$userid=$_POST["interviewer_number"];
$pass=$_POST["pass"];
$sql="SELECT password FROM login_info WHERE interviewer_no = '$userid' LIMIT 1 ";
$result=$link->query($sql);
echo 'wonderful';
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
      echo 'wonderful';
    echo $row["password"];
       echo '<br>';
      echo sha1($pass);
    if($row["password"]==$pass){
        $_SESSION['user']=session_id();
        $_SESSION['previous'] =basename($_SERVER['PHP_SELF']);
      echo 'password verified ...';
        header("Location:survey_pg1.php"); /* Redirect browser */
        exit();
    }
  }
}

?>
