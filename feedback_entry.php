<?php 
include 'connect_db.php';
include 'header.php';

$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$email=$_POST["Email"];
$msg=$_POST["msg"];
echo $fname. " " .$email ;
$stmt=$link->prepare("INSERT INTO feedback ( `EmailID`, `First name`, `Last name`, `Message`) VALUES (?,?,?,?)");

 if (!$stmt) {
        echo "false";
    }
$stmt->bind_param("ssss",$email,$fname,$lname,$msg);
echo mysqli_error($link);
$stmt->execute();
//echo $result;
sleep(5);
header("Location: http://www.4dmn.net/contactus.php");
exit();
?>
<div class="container">
<div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
        </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include 'footer.php'; ?>