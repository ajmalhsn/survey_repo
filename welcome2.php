<?php include 'header.php';
    include 'connect_db.php';

$sql="SELECT * FROM oil_survey";
$result=$link->query($sql);

?>
<br>

<div class="container">
    <div class="section">
        <h3 class="black-text">Survey</h3>
    <div class="divider"></div>    
    <table class="centered black-text">
    <thead>
        <tr>
            <th>name</th>
            <th>telephone</th>
            <th>Location</th>
            <th>small</th>
            <th>medium</th>
            <th>large</th>
            <th>friendliness-rating</th>
            <th>experience(1-100)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($result->num_rows>0)
while($row=$result->fetch_assoc()){
    echo "<tr><td>". $row["name"]. "</td><td>" . $row["tel"]. "</td><td>" . $row["city"]. "</td><td>" . $row["small"]. "</td><td>" . $row["medium"]. "</td><td>"  . $row["large"]. "</td><td>"  . $row["rating"]. "</td><td>"  . $row["opinion"]. "</td></tr>" ;  
    }
     ?>   
        </tbody>
    </table>
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



<?php 
    include 'footer.php'?>