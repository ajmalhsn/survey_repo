<?php include 'connect_db.php';
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="shortcut icon" href="favicon.ico">

    <title>JJ Market Research</title>
      <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="logo.svg" width="50" height="50" class="d-inline-block align-top" alt="">
    JJ Market Research
  </a>
</nav>
    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
      <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/css/base/jquery.ui.all.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.2/css/lightness/jquery-ui-1.10.2.custom.min.css" rel="stylesheet">
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>

  </head>
    <body class="bg-light">
        <div class="container">
            <div class="row">
            <div class="col">
                <?php include 'table_randomize.php' ?>
            </div>
            </div>
<form class="needs-validation" id="form_screen" action="main_input.php" method="POST" novalidate>
            <div class="row">
                <div class="form-group">
    
                    <p>Q2. Is your company part of a bigger group of companies or is this an individual business entity? SINGLE ANSWER POSSIBLE</p>
                        <div class="form-check">
                            <br>
                            <div class="custom-control custom-radio ">
                            <input type="radio" id="q2_1" name="q2" value="1" class="custom-control-input" required >
                            <label class="custom-control-label" for="q2_1">Part of bigger group of companies </label>
                            </div>
                            <br>
                            <div class="custom-control custom-radio ">
                            <input type="radio" id="q2_2" name="q2" value="2" class="custom-control-input" required >
                            <label class="custom-control-label" for="q2_2">Individual business entity</label>
                            </div>
                            <br>
                        </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                      <p>Q3. How many branches does your company have? SINGLE ANSWER POSSIBLE</p>
                            <div class="form-check">
                                <br>
                             <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_1" name="q3" value="1" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_1">Yes</label>
                        </div>
                            <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_2" name="q3" value="2" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_2">No</label>
                        </div>
                            <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_3" name="q3" value="3" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_3">Not Sure</label>
                        </div>
                            <br>
                          </div>

            </div>
        </div>
        <div class="row">
        <div class="col">
            <?php include 'table_randomize_8.php' ?>
        </div>
        </div>
        <div class="row">
        <div class="col">
            <?php include 'table_randomize_9.php' ?>
        </div>
        </div>
        <div class="row">
            <div class="form-group">
                     <p>Q6. How do you usually promote the business/your products & services? MTULIPLE ANSWERS POSSIBLE     </p>
                                <div class="form-check">

                                 <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_1" name="q6" value="1" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_1">TV</label>
                            </div>
                                <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_2" name="q6" value="2" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_2">Newspapers/ Magazines</label>
                            </div>
                                <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_3" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_3">Brochures/Leaflets/Mailers</label>
                            </div>
                            <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_4" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_4">Billboards</label>
                            </div>
                            <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_5" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_5">Exhibitions/Events/Professional gathering</label>
                            </div>
                            <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_6" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_6">Face to face with your potential clients </label>
                            </div>
                            <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_7" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_7">Media marketing like SMS, Snapchat </label>
                            </div>
                            <div class="custom-control custom-radio ">
                            <input type="checkbox" id="q6_8" name="q6" value="3" class="custom-control-input" required >
                                <label class="custom-control-label" for="q6_8">Do not promote business at this moment </label>
                            </div>


                                <br>
                              </div>
            </div>
        </div>
        <div class="row">

            <p>Q7. Which of the following Social Media Platforms do you regularly use? Please can you rank the below based on most used?</p>
        <script>
        $(function() {
            $('#1').draggable();
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
        });
        </script>

            <div class="col-md-3 offset-1">
      <ol id="sortable" class="list-group">
        <li id="1" class="ui-state-default" ><input type="hidden" name="q7[]" value="1"/>Facebook/Messenger</li>
        <li id="1" class="ui-state-default" ><input type="hidden" name="q7[]" value="2"/>Twitter</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="3"/>Snapchat</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="4"/>YouTube</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="5"/>Instagram</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="6"/>Pin Interest</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="7"/>LinkedIn</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="8"/>WhatsApp</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="9"/>We Chat</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="10"/>Skype</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="11"/>Google+</li>
        <li id="1" class="ui-state-default"><input type="hidden" name="q7[]" value="12"/>Badoo</li>
      </ol>
    </div>
            </div>
            <div class="row">
                <p>Q8. Which Newspaper/Magazine did you read most often? OPEN ENDED RESPONSE. ONE ANSWER POSSIBLE ONLY.</p>
                <br>
                <div class="col-md-3">
                <label  for="q8_1">Newspaper:</label><input type="text" name="q8" id="q8_1" />
                </div>
                <div class="col-md-3">
                <label  for="q8_2">Magazine:</label><input type="text" name="q8" id="q8_2" />
                    </div>
            </div>
            <p>Q9. For how long have you been providing Private Medical/Health insurance to your employees? SHOW CARD. SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="q9_1" name="q9" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="q9_1">Less than 1 year
            </label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="q9_2" name="q9" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="q9_2">1-3 years</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="q9_3" name="q9" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="q9_3">3-5 years</label>
        </div>
        <div class="custom-control custom-radio ">
    <input type="radio" id="q9_4" name="q9" value="4" class="custom-control-input" required >
        <label class="custom-control-label" for="q9_4">More than 5 years</label>
    </div>
            <br>
          </div>
          <p>Q9. For how long have you been providing Private Medical/Health insurance to your employees? SHOW CARD. SINGLE ANSWER POSSIBLE</p>
    <div class="form-check">
        <br>
        <div class="custom-control custom-radio ">
    <input type="radio" id="Q9_opt1" name="Q9" value="1" class="custom-control-input" required >
    <label class="custom-control-label" for="Q9_opt1">Less than 1 year
    </label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="radio" id="Q9_opt2" name="Q9" value="2" class="custom-control-input" required >
    <label class="custom-control-label" for="Q9_opt2">1-3 years</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="radio" id="Q9_opt3" name="Q9" value="3" class="custom-control-input" required >
    <label class="custom-control-label" for="Q9_opt3">3-5 years</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="radio" id="Q9_opt4" name="Q9" value="4" class="custom-control-input" required >
    <label class="custom-control-label" for="Q9_opt4">More than 5 years</label>
    </div>
    <br>
    </div>
    <p>Q10. What would you say are the main reasons that your company provides the staff with Medical/Health insurance? SHOW CARD. MULTIPLE ANSWERS POSSIBLE</p>
    <div class="form-check">
    <br>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt1" name="Q10" value="1" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt1">Since we deeply care about employee health and well being
    </label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt2" name="Q10" value="2" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt2">It is a special benefit to keep employees loyal to the company</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt3" name="Q10" value="3" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt3">It is an investment in our company’s future</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt4" name="Q10" value="4" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt4">It is the minimum we can do for employees</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt5" name="Q10" value="5" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt5">Because employees feel safe and confident to do their job</label>
    </div>

    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt6" name="Q10" value="6" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt6">Is easier compensating staff if claimed as an expense</label>
    </div>

    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt7" name="Q10" value="7" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt7">Improve our package to the staff</label>
    </div>

    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt8" name="Q10" value="8" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt8">Creating better relations between staff & the company</label>
    </div>
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt9" name="Q10" value="9" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt9">Helps the company maintain a healthy workforce</label>
    </div>

    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q10_opt10" name="Q10" value="10" class="custom-control-input" required >
    <label class="custom-control-label" for="Q10_opt10">Due to government regulations</label>
    </div>
    <div class="custom-control">
    <input type="text" id="Q10_opt11" name="Q10"  class="custom-control-input">
    <label class="custom-control-label" for="Q10_opt11">Others pls specify</label>
    </div>



    <br>
    </div>

    <p>Q17. What would you say are the main reasons that your company provides the staff with Medical/Health insurance? SHOW CARD. MULTIPLE ANSWERS POSSIBLE</p>
    <div class="form-check">
    <br>
    <?php
    $row_col=0;
    $sql4="SELECT * FROM brand_set";
    $result2=$link->query($sql4);
    if($result2->num_rows > 0){
      echo '<div class="row">';
        echo '<div class="col">';
        while($row=$result2->fetch_assoc()){
          if($row_col==14){
          echo '</div><div class="col">';
        }
          echo '<div class="custom-control custom-radio ">'
              .'<input type="checkbox" id="Q17_'.htmlspecialchars($row["id"]).'" name="Q17[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
              .'<label class="custom-control-label" for="Q17_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
        echo '</label>';
        echo '</div>';
            //$id=$row["id"];
            //$r=$row["rotation_count"];
            $row_col++;
        }
        echo '</div></div>';
    }
    ?>
    <br>
    </div>
    <p> Q18. Which Private Medical/Health Insurance Company did you invite for proposals in your last selection process? SHOW PMI LIST. MULTIPLE ANSWERS POSSIBLE</p>
    <?php
    $row_col=0;
    $sql4="SELECT * FROM brand_set";
    $result2=$link->query($sql4);
    if($result2->num_rows > 0){
      echo '<div class="row">';
        echo '<div class="col">';
        while($row=$result2->fetch_assoc()){
          if($row_col==14){
          echo '</div><div class="col">';
        }
          echo '<div class="custom-control custom-radio ">'
              .'<input type="checkbox" id="Q18_'.htmlspecialchars($row["id"]).'" name="Q18[]" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
              .'<label class="custom-control-label" for="Q18_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
        echo '</label>';
        echo '</div>';
            //$id=$row["id"];
            //$r=$row["rotation_count"];
            $row_col++;
        }
        echo '</div></div>';
    }
    ?>
    <p>Q19. Which Private Medical/Health Insurance Company is the current insurer for your employees? SHOW PMI LIST. SINGLE ANSWER POSSIBLE</p>
    <?php
    $row_col=0;
    $sql4="SELECT * FROM brand_set";
    $result2=$link->query($sql4);
    if($result2->num_rows > 0){
      echo '<div class="row">';
        echo '<div class="col">';
        while($row=$result2->fetch_assoc()){
          if($row_col==14){
          echo '</div><div class="col">';
        }
          echo '<div class="custom-control custom-radio ">'
              .'<input type="radio" id="Q19_'.htmlspecialchars($row["id"]).'" name="Q19" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
              .'<label class="custom-control-label" for="Q19_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
        echo '</label>';
        echo '</div>';
            //$id=$row["id"];
            //$r=$row["rotation_count"];
            $row_col++;
        }
        echo '</div></div>';
    }
    ?>
    <p>Q20. And which Private Medical/Health Insurance Company were you using before ________ for your company’s Medical Insurance/Health Insurance needs? SHOW PMI LIST. SINGLE ANSWER POSSIBLE</p>
    <?php
    $row_col=0;
    $sql4="SELECT * FROM brand_set";
    $result2=$link->query($sql4);
    if($result2->num_rows > 0){
      echo '<div class="row">';
        echo '<div class="col">';
        while($row=$result2->fetch_assoc()){
          if($row_col==14){
          echo '</div><div class="col">';
        }
          echo '<div class="custom-control custom-radio ">'
              .'<input type="radio" id="Q20_'.htmlspecialchars($row["id"]).'" name="Q20" value="'.htmlspecialchars($row["id"]).'" class="custom-control-input" required>'
              .'<label class="custom-control-label" for="Q20_'.htmlspecialchars($row["id"]).'">'.$row["brand_name"].'';
        echo '</label>';
        echo '</div>';
            //$id=$row["id"];
            //$r=$row["rotation_count"];
            $row_col++;
        }
        echo '</div></div>';
    }
    ?>
    <div class="row">
            <p>Q21. You mentioned that you are currently using _________(Mention company in Q19) as health insurance provider. Can you please tell us:</p>
            <p class="rtl">Q21- لقد ذكرت أنكم حاليا تتعاملون مع ________ (اذكر اسم الشاركة من Q19) كمزود للتأمين الصحي. هل يمكن أن تقول لنا: 
</p>
        <table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">No of Employes</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>How many Blue Collar – Primary Lives Covered &nbsp;   <b class="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>How many White Collar – Primary Lives Covered &nbsp; <b class="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>How many White Collar – Dependent Lives Covered&nbsp;<b class="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><input type="text" name="Q21_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>How many Saudis – Primary Lives Covered &nbsp; <b class="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>How many Saudis – Dependents Lives Covered &nbsp;<b class="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>How many Arabs – Primary Lives Covered &nbsp;<b class="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>How many Arabs – Dependents Lives Covered &nbsp;<b class="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>How many Asians – Primary Lives Covered &nbsp;<b class="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>How many Asians – Dependents Lives Covered &nbsp;<b class="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>How many Male – Primary Lives Covered &nbsp;<b class="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>How many Female – Primary Lives Covered &nbsp;<b class="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_11"> </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Total lives&nbsp;<b class="rtl">مجموع الأشخاص</b></td>
                    <td><input type="text" name="Q21_12"> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>Q22. What is the total annual premium paid for the Private Medical/Health insurance for employees/dependents this year….? SINGLE ANSWER POSSIBLE</p>
    <p class="rtl"><b>
Q22- ما هو اجمالي القسط السنوي المدفوع للتأمين الطبي/الصحي الخاص للموظفين/المرافقين والتابعين هذه السنة....؟ يسمح باجابة واحدة
</b></p>
        <label>Annual premium in SAR
            <input type="text" name="Q22">
            <span class="rtl"><b>جمالي القسط السنوي بالريال السعوديإ</b></span>
        </label>    
    <br>
    <br>
    <p>Q25. What are the current payment terms with your Private Medical/Health Insurer? SHOW CARD. SINGL ANSWER POSSIBLE</p><p class="rtl">
Q25-  ما هي شروط الدفع الحالية مع مزود التأمين الطبي/الصحي لشركتكم؟ اعرض البطاقة. يسمح باجابة واحدة فقط</p>        
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q25_1" name="Q25" value="1" class="custom-control-input" required >
    <label class="custom-control-label" for="Q25_1">Due to government regulations</label>
    </div>        
    <input type="submit" class="btn btn-primary"/>
            
            </form>        
        </div>
    </body>
</html>
