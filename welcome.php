<?php include 'header.php';
    include 'connect_db.php';

$sql="SELECT * FROM feedback";
$result=$link->query($sql);

?>
<div class="container">
    <table class="responsive-table striped">
    <thead>
        <tr>
            <th>Sno</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($result->num_rows>0)
while($row=$result->fetch_assoc()){
    echo "<tr><td>". $row["Sno"]. "</td><td>" . $row["First name"]. "</td><td>" . $row["Last name"]. "</td><td>" . $row["EmailID"]. "</td><td>" . $row["Message"]. "</td><td>"  . $row["time"]. "</td></tr>" ;  
    }
     ?>   
        </tbody>
    </table>

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



<?php 
    include 'footer.php'?>