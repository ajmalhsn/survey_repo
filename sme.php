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
    <img src="logo.svg" >
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
                <p>Q1. I would like to start by reading some statements which reflects different types of people in terms of personal values, beliefs and attitudes. We would like to understand to what extent do you agree with these statements for yourself.
 Please use a scale of 1-5, where 5 is Completely Agree and 1 is Completely Disagree. You can also give a score in between as per your opinion. SHOW CARD. SINGLE ANSWER POSSIBLE</p>
<p dir="rtl">               
-  سأبدا بقراءة مجموعة عبارات تعكس أنواع مختلفة من الناس من حيث القيم الشخصية، والمعتقدات والمواقف. نود أن نفهم إلى أي درجة توافق على هذه العبارات بالنسبة لك. 

أرجو منك استخدام مقياس من 1-5، حيث 5 تعني أوافق تماما و 1 تعني لا أوافق أبدا. يمكنك استخدام أي تقييم بينهما حسب رأيك. اعرض البطاقة. 
    يسمح باجابة واحدة فقط
</p> 
                <?php include 'table_randomize.php' ?>
            </div>
            </div>
<form class="needs-validation" id="form_screen" action="main_input.php" method="POST" novalidate>
            <div class="row">
                <div class="form-group">
    
                    <p>Q2. Is your company part of a bigger group of companies or is this an individual business entity? SINGLE ANSWER POSSIBLE</p>
                    <p dir="rtl">
والآن أود أن أطرح عليك بعض الأسئلة عن شركتكم/مقر عملكم  
Q2-	هل شركتكم جزء من مجموعة شركات كبيرة أم أنها كيان فردي؟ يسمح باجابة واحدة
</p>
                        <div class="form-check">
                            <br>
                            <div class="custom-control custom-radio ">
                            <input type="radio" id="q2_1" name="q2" value="1" class="custom-control-input" required >
                            <label class="custom-control-label" for="q2_1">Part of bigger group of companies <span dir="">(جزء من مجموعة شركات كبيرة )</span> </label>
                            </div>
                            <br>
                            <div class="custom-control custom-radio ">
                            <input type="radio" id="q2_2" name="q2" value="2" class="custom-control-input" required >
                            <label class="custom-control-label" for="q2_2">Individual business entity <span dir="rtl">( كيان فردي ) </span></label>
                            </div>
                            <br>
                        </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                      <p>Q3. How many branches does your company have? SINGLE ANSWER POSSIBLE</p>
                    <p dir="rtl">
Q3-	كم عدد فروع شركتكم؟ يسمح باجابة واحدة
</p>
                            <div class="form-check">
                                <br>
                             <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_1" name="q3" value="1" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_1">This is the only branch</label>
                        </div>
                            <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_2" name="q3" value="2" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_2">2</label>
                        </div>
                            <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_3" name="q3" value="3" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_3">3</label>
                        </div>
                        <div class="custom-control custom-radio ">
                        <input type="radio" id="q3_3" name="q3" value="3" class="custom-control-input" required >
                            <label class="custom-control-label" for="q3_3">More than 3</label>
                        </div>        
                            <br>
                          </div>

            </div>
        </div>
        <div class="row">
        <div class="col">
            <p>Q4. I would now like read some statements which reflect company culture, business orientation and ambitions for various SME owners/Decision makers. We would like to understand to what extent do you agree with these statements for yourself.
                         Please use a scale of 1-5, where 5 is Completely Agree and 1 is Completely Disagree. You can also give a score in between as per your opinion.</p>
<p dir="rtl">Q4-  سأقرأ عليك بعض العبارات التي تعكس ثقافة الشركة، وتوجهات الأعمال والطموحات لمختلف أصحاب الشركات الصغيرة والمتوسطة/صانعي القرار. نود أن نفهم إلى أي درجة توافق على هذه العبارات بالنسبة لك شخصيا. 

أرجو منك استخدام مقياس من 1-5، حيث 5 تعني أوافق تماما و 1 تعني لا أوافق أبدا. يمكنك استخدام أي تقييم بينهما حسب رأيك. اعرض البطاقة. يسمح باجابة واحدة فقط
   </p>
            <?php include 'table_randomize_8.php' ?>
        </div>
        </div>
        <div class="row">
        <div class="col">
            <p>Q5. I would like to understand your management style at work. This means people management and dealing with employees. We would like to understand to what extent do you agree with these statements for yourself.
 Please use a scale of 1-5, where 5 is Completely Agree and 1 is Completely Disagree. You can also give a score in between as per your opinion.</p>
<p dir="rtl">Q6-  أود أن أفهم أسلوبكم في إدارة العمل. وهذا يعني إدارة الأشخاص والتعامل مع الموظفين. نود أن نفهم إلى أي درجة توافق على العبارات التالية بالنسبة لك شخصيا.

أرجو منك استخدام مقياس من 1-5، حيث 5 تعني أوافق تماما و 1 تعني لا أوافق أبدا. يمكنك استخدام أي تقييم بينهما حسب رأيك. اعرض البطاقة. يسمح باجابة واحدة فقط
</p>
            <?php include 'table_randomize_9.php' ?>
        </div>
        </div>
        <div class="row">
            <div class="form-group">
                     <p>Q5a. How do you usually promote the business/your products & services? MTULIPLE ANSWERS POSSIBLE </p>
<p dir="rtl">Q5-  عادة، كيف تقومون بالترويج لشركتكم/منتجاتكم وخدماتكم؟ يسمح بعد إجابات     </p>

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

            <p>Q6. Which of the following Social Media Platforms do you regularly use? Please can you rank the below based on most used? NOTE: Top 3 RANKING ONLY</p><p dir="rtl">
Q6-  أي من منصات التواصل الاجتماعي التالية تستخدمون بانتظام؟ أرجو منك ترتيبها بناءا على المنصة الأكثر استخداما؟ ملاحظة: فقط أهم 3 </p>
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
                <p>Q8. Which Newspaper/Magazine do you read most often? OPEN ENDED RESPONSE. ONE ANSWER POSSIBLE ONLY.</p>
<p dir="rtl">                
Q8-  ما هي الصحيفة/المجلة التي تقرأها في أغلب الأحيان؟ إجابة مفتوحة. يسمح باجابة واحدة فقط
</p>
                <br>
                <div class="col-md-3">
                <label  for="q8_1">Newspaper:</label><input type="text" name="q8" id="q8_1" />
                </div>
                <div class="col-md-3">
                <label  for="q8_2">Magazine:</label><input type="text" name="q8" id="q8_2" />
                    </div>
            </div>
            <p>Q9. For how long have you been providing Private Medical/Health insurance to your employees? SHOW CARD. SINGLE ANSWER POSSIBLE</p>
    <p></p>Q9-  منذ متى وأن تقومون بتوفير تأمين طبي/صحي خاص لموظفيكم؟ اعرض البطاقة. يسمح باجابة واحدة

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
    
    <p>Q11. What would you describe are the top 2 reasons for providing the staff with Medical/Health insurance? SHOW CARD (Maximum 2 Reasons)</p>
<p>Q11- وماذا&nbsp; يمكن أن تصف أنهما أهم سببين لتقديم التأمين الطبي/الصحي إلى موظفيكم؟ اعرض البطاقة (سببان كحد أقصى)</p>
<p>&nbsp;</p>
<table class="table table-striped" border="3" >
<tbody>
<tr>
<td >
<p>Since we deeply care about employee health and well being</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="1"/>
</td>
<td >
<p>&nbsp;لكوننا نحرص بشدة على صحة وعافية موظفينا</p>
</td>
</tr>
<tr>
<td >
<p>It is a special benefit to keep employees loyal to the company</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="2"/>
</td>
<td >
<p>&nbsp;إنها فائدة خاصة للحفاظ على الموظفين المخلصين للشركة</p>
</td>
</tr>
<tr>
<td >
<p>It is an investment in our company&rsquo;s future</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="3"/>
</td>
<td >
<p>&nbsp;إنه عبارة عن استثمار في مستقبل شركتنا</p>
</td>
</tr>
<tr>
<td >
<p>It is the minimum we can do for employees</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="4"/>
</td>
<td >
<p>&nbsp;هذا هو الحد الأدنى الذي يمكننا القيام به للموظفين</p>
</td>
</tr>
<tr>
<td >
<p>Because employees feel safe and confident to do their job</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="5"/>
</td>
<td >
<p>&nbsp;لأن الموظفين يشعرون بالأمان والثقة للقيام بعملهم</p>
</td>
</tr>
<tr>
<td >
<p>Is easier compensating staff if claimed as an expense</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="6"/>
</td>
<td >
<p>&nbsp;من الأسهل تعويض الموظفين إذا تم تحديده على أنه مصاريف</p>
</td>
</tr>
<tr>
<td >
<p>Improve our package to the staff</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="7"/>
</td>
<td >
<p>&nbsp;تحسين الباقة الخاصة بنا للموظفين</p>
</td>
</tr>
<tr>
<td >
<p>Creating better relations between staff &amp; the company</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="8"/>
</td>
<td >
<p>&nbsp;خلق علاقات أفضل بين الموظفين والشركة</p>
</td>
</tr>
<tr>
<td >
<p>Helps the company maintain a healthy workforce</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="9"/>
</td>
<td >
<p>&nbsp;يساعد الشركة في الحفاظ على صحة القوى العاملة</p>
</td>
</tr>
<tr>
<td >
<p>Due to government regulations</p>
</td>
<td >
<input class="check2" type="checkbox" name="Q11"  value="10"/>
</td>
<td >
<p>&nbsp;بسبب الأنظمة الحكومية</p>
</td>
</tr>
<tr>
<td >
<p>Others (Specify)___________________</p>
<p>&nbsp;</p>
</td>
<td >
<p>&nbsp;</p>
</td>
<td >
<input type="text" name="Q11_others"  />
</td>
</tr>
</tbody>
</table>
<p><br /><br /></p>

<p>&nbsp;</p>

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
            <p dir="rtl">Q21- لقد ذكرت أنكم حاليا تتعاملون مع ________ (اذكر اسم الشاركة من Q19) كمزود للتأمين الصحي. هل يمكن أن تقول لنا: 
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
                    <td>How many Blue Collar – Primary Lives Covered &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>How many White Collar – Primary Lives Covered &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>How many White Collar – Dependent Lives Covered&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><input type="text" name="Q21_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>How many Saudis – Primary Lives Covered &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>How many Saudis – Dependents Lives Covered &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>How many Arabs – Primary Lives Covered &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>How many Arabs – Dependents Lives Covered &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>How many Asians – Primary Lives Covered &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>How many Asians – Dependents Lives Covered &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>How many Male – Primary Lives Covered &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>How many Female – Primary Lives Covered &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><input type="text" name="Q21_11"> </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Total lives&nbsp;<b dir="rtl">مجموع الأشخاص</b></td>
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
            <span dir="rtl"><b>جمالي القسط السنوي بالريال السعوديإ</b></span>
        </label>    
    <br>
    <br>
    <p>Q25. What are the current payment terms with your Private Medical/Health Insurer? SHOW CARD. SINGL ANSWER POSSIBLE</p><p dir="rtl">
Q25-  ما هي شروط الدفع الحالية مع مزود التأمين الطبي/الصحي لشركتكم؟ اعرض البطاقة. يسمح باجابة واحدة فقط</p>        
    <div class="custom-control custom-radio ">
    <input type="checkbox" id="Q25_1" name="Q25" value="1" class="custom-control-input" required >
    <label class="custom-control-label" for="Q25_1">Due to government regulations</label>
    </div>
    <div class="row">
            <p>Q26. What are the most important criteria for final selection? UPTO THREE ANSWERS POSSIBLE
Q27. And are you willing to pay more for ______ (Mention from Q26) or not? SINGLE ANSWER POSSIBLE
</p>
            <p dir="rtl">Q26 -	ما هي العوامل الأكثر أهمية في عملية الاختيار النهائي؟ يسمح بثلاثة إجابات. 
Q27-	هل أنتم مستعدون لدفع المزيد مقابل ________ (اذكر من Q26) أم لا؟ يسمح باجابة واحدة

</p>
        <?php
$sql="SELECT id,attribute_e,attribute_a FROM Q26_attr";
//echo mysqli_error($link); 
$result=$link->query($sql);    
echo mysqli_error($link);
        
    $i=0;
$j=0;
//$ratings=array("disagree","2","3","4","Agreed");
 $content = '<table class="table table-striped" border="3">';
    $content .= '<thead class="thead-dark"><tr><th scope="col">id</th><th scope="col">attributes</th><th scope="col">Q26</th><th scope="col">Q27 Yes</th><th scope="col">Q27 No</th><th scope="col"></th></tr></thead><tbody>' ;
    //for($j=0;$j<mysqli_num_rows($result);$j++){
    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                        $content.='<tr scope="row"><td>'.$row["id"].'</td><td>'.$row["attribute_e"].'</td><td><input class="check" type="checkbox" value="'.$row["id"].'" name="Q26"> </td><td><input value="1" type="radio" id="Q27_1_'.$row["id"].'" name="Q27_'.$row["id"].'"> </td><td><input value="2" id="Q27_2_'.$row["id"].'" type="radio" name="Q27_'.$row["id"].'"> </td> <td>'.$row["attribute_a"].'</td></tr>';
                            
                        }
    }
$content.='</tbody></table>';
        echo $content;
?>
    </div>
    
    <p>Q30a. You mentioned that you invited proposal from Bupa but did not eventually select Bupa. May I know how did you find Bupa’s proposal on the following factors compared to you your current PMI?NOTE: ASK IF BUPA MENTIONED IN Q18 BUT NOT IN Q19
SHOW CARD. SINGLE ANSWER POSSIBLE</p>
<p dir="rtl">Q30a – لقد ذكرت أنكم طلبتم عرض من بوبا ولكنكم في نهاية المطاف لم تختاروا بوبا. هل يمكن أن أعرف كيف وجدتم عرض بوبا بناءا على العوامل التالية بالمقارنة مع شركة التأمين الصحي التي تتعاملون معها حاليا؟ اعرض البطاقة.  يسمح باجابة واحدة فقط </p>
    
    <table border="3">
<tbody>
<tr>
<td colspan="5" >
<p><strong>Overall Offer</strong></p>
<p><strong>العرض الاجمالي</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Flexible Coverage Schemes</p>
</td>
<td >
<input type="radio" name="Q30a_1" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_1" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_1" value="3"/>3
</td>
<td >
<p>برامج تغطية مرنة</p>
</td>
</tr>
<tr>
<td >
<p>Value for money/ Value-Added Services</p>
</td>
<td >
<input type="radio" name="Q30a_2" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_2" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_2" value="3"/>3
</td>
<td >
<p>استحقاق السعر/ خدمات ذات قيمة مضافة</p>
</td>
</tr>
<tr>
<td >
<p>Wide range of Products/Services</p>
</td>
<td >
<input type="radio" name="Q30a_3" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_3" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_3" value="3"/>3
</td>
<td >
<p>مجموعة واسعة من المنتجات/ الخدمات</p>
</td>
</tr>
<tr>
<td >
<p>Online platforms to interact with providers</p>
</td>
<td >
<input type="radio" name="Q30a_4" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_4" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_4" value="3"/>3
</td>
<td >
<p>منصات عبر الإنترنت للتفاعل مع المزودين</p>
</td>
</tr>
<tr>
<td >
<p>Outpatient coverage</p>
</td>
<td >
<input type="radio" name="Q30a_5" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_5" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_5" value="3"/>3
</td>
<td >
<p>تغطية العيادات الخارجية</p>
</td>
</tr>
<tr>
<td >
<p>Inpatient coverage</p>
</td>
<td >
<input type="radio" name="Q30a_6" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_6" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_6" value="3"/>3
</td>
<td >
<p>تغطية التنويم</p>
</td>
</tr>
<tr>
<td >
<p>Emergency treatment &amp; coverage</p>
</td>
<td >
<input type="radio" name="Q30a_7" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_7" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_7" value="3"/>3
</td>
<td >
<p>العلاج والتغطية الطارئة</p>
</td>
</tr>
<tr>
<td >
<p>Quality of Doctors offered on the Network</p>
</td>
<td >
<input type="radio" name="Q30a_8" value="1"/>1
</td>
<td >
<input type="radio" name="Q30a_8" value="2"/>2
</td>
<td >
<input type="radio" nae="Q30a_8" value="3"/>3
</td>
<td >
<p>جودة الأطباء المتوفرين في الشبكة</p>
</td>
</tr>
</tbody>
</table>

<hr>
    <table class="table table-striped" border="3" >
<tbody>
<tr>
<td colspan="5" >
<p><strong>Network Quality</strong></p>
<p><strong>جودة الشبكة</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Quality of Hospital Network</p>
</td>
<td >
<input type="radio" name="Q30a_9" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_9"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_9" value="3"/>
</td>
<td >
<p>جودة شبكة المستشفيات</p>
</td>
</tr>
<tr>
<td >
<p>Geographical Coverage of Network</p>
</td>
<td >
<input type="radio" name="Q30a_10" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_10"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_10" value="3"/>
</td>
<td >
<p>التغطية الجغرافية للشبكة</p>
</td>
</tr>
<tr>
<td >
<p>Specialties covered by the Hospital/Clinic network</p>
</td>
<td >
<input type="radio" name="Q30a_11" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_11"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_11" value="3"/>
</td>
<td >
<p>الإختصاصات المغطاة من قبل شبكة المستشفيات/المستوصفات</p>
</td>
</tr>
<tr>
<td >
<p>Waiting time at hospitals/clinics</p>
</td>
<td >
<input type="radio" name="Q30a_12" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_12"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_12" value="3"/>
</td>
<td >
<p>وقت الانتظار في المستشفيات/ المستوصفات</p>
</td>
</tr>
<tr>
<td >
<p>KSA level Hospital Coverage</p>
</td>
<td >
<input type="radio" name="Q30a_13" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_13"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_13" value="3"/>
</td>
<td >
<p>تغطية المستشفيات على مستوى المملكة العربية السعودية</p>
</td>
</tr>
<tr>
<td >
<p>City level Hospital Coverage</p>
</td>
<td >
<input type="radio" name="Q30a_14" value="1"/> 
</td>
<td >
<input type="radio" name="Q30a_14"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_14" value="3"/>
</td>
<td >
<p>تغطية المستشفيات على مستوى المدينة</p>
</td>
</tr>
</tbody>
</table>

    <hr>
    <table class="table table-striped" border="3" >
<tbody>
<tr>
<td colspan="5" >
<p><strong>Customer Experience</strong></p>
<p><strong>تجربة العملاء</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Customer Service overall</p>
</td>
<td >
<input type="radio" name="Q30a_15" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_15"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_15" value="3"/>
</td>
<td >
<p>خدمة العملاء بشكل عام</p>
</td>
</tr>
<tr>
<td >
<p>Staff competency/professionalism</p>
</td>
<td >
<input type="radio" name="Q30a_16" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_16"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_16" value="3"/>
</td>
<td >
<p>كفاءة/ احترافية الموظفين</p>
</td>
</tr>
<tr>
<td >
<p>Staff courtesy and attitude</p>
</td>
<td >
<input type="radio" name="Q30a_17" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_17"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_17" value="3"/>
</td>
<td >
<p>لطف وحسن معاملة الموظفين</p>
</td>
</tr>
<tr>
<td >
<p>Speed of reverting on requests/queries</p>
</td>
<td >
<input type="radio" name="Q30a_18" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_18"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_18" value="3"/>
</td>
<td >
<p>سرعة الرد على الطلبات/ الاستفسارات</p>
</td>
</tr>
<tr>
<td >
<p>Transparency in communication</p>
</td>
<td >
<input type="radio" name="Q30a_19" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_19"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_19" value="3"/>
</td>
<td >
<p>شفافية في التواصل</p>
</td>
</tr>
<tr>
<td >
<p>Frequency of contacts</p>
</td>
<td >
<input type="radio" name="Q30a_20" value="1"/>
</td>
<td >
<input type="radio" name="Q30a_20"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_20" value="3"/>
</td>
<td >
<p>تكرار الاتصال</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
    <hr/>
<table class="table table-striped" border="3" >
<tbody>
<tr>
<td colspan="5" >
<p><strong>Process</strong></p>
<p><strong>العملية</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Ease of procedures overall</p>
</td>
<td >
<input type="radio" name="Q30a_21"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_21"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_21" value="3"/>
</td>
<td >
<p>سهولة الإجراءات بشكل عام</p>
</td>
</tr>
<tr>
<td >
<p>Ease of Application Process</p>
</td>
<td >
<input type="radio" name="Q30a_22"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_22"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_22" value="3"/>
</td>
<td >
<p>سهولة عملية تقديم الطلب</p>
</td>
</tr>
<tr>
<td >
<p>Ease of Pre-Authorization process</p>
</td>
<td >
<input type="radio" name="Q30a_22" name="Q30a_3"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_22"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_22" value="3"/>
</td>
<td >
<p>سهولة في عملية ما قبل التفويض</p>
</td>
</tr>
<tr>
<td >
<p>Speed of Approvals</p>
</td>
<td >
<input type="radio" name="Q30a_23"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_23"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_23" value="3"/>
</td>
<td >
<p>سرعة في الموافقات</p>
</td>
</tr>
<tr>
<td >
<p>Ease of Claims Process</p>
</td>
<td >
<input type="radio" name="Q30a_24"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_24"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_24" value="3"/>
</td>
<td >
<p>عملية مطالبة سهلة</p>
</td>
</tr>
<tr>
<td >
<p>Ease of linking with Jawazat</p>
</td>
<td >
<input type="radio" name="Q30a_25"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_25"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_25" value="3"/>
</td>
<td >
<p>سهولة الربط مع الجوازات</p>
</td>
</tr>
<tr>
<td >
<p>Fast Delivery of cards once signed up</p>
</td>
<td >
<input type="radio" name="Q30a_26"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_26"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_26" value="3"/>
</td>
<td >
<p>السرعة في تسليم البطاقات بمجرد الاشتراك</p>
</td>
</tr>
<tr>
<td >
<p>Less documentation</p>
</td>
<td >
<input type="radio"  name="Q30a_27"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_27"  value="2"/> 
</td>
<td >
<input type="radio" value="3"/>
</td>
<td >
<p>مستندا ت أقل</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>    
<table class="table table-striped" border="3" >
<tbody>
<tr>
<td colspan="5" >
<p><strong>Pricing/Payments</strong></p>
<p><strong>الأسعار/الدفعات</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Pricing, Fee &amp; Charges</p>
</td>
<td >
<input type="radio" name="Q30a_28"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_28"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_28" value="3"/>
</td>
<td >
<p>الأسعار والرسوم والأتعاب &nbsp;&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Variety of Payment Options &amp; Flexible Terms</p>
</td>
<td >
<input type="radio" name="Q30a_29"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_29"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_29" value="3"/>
</td>
<td >
<p>مجموعة من خيارات الدفع والشروط المرنة</p>
</td>
</tr>
<tr>
<td >
<p>Loyalty Programs</p>
</td>
<td >
<input type="radio" name="Q30a_30"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_30"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_30" value="3"/>
</td>
<td >
<p>برامج الولاء</p>
</td>
</tr>
<tr>
<td >
<p>Cheap Price to comply with regulation</p>
</td>
<td >
<input type="radio" name="Q30a_31"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_31"  value="2"/> 
</td>
<td >
<input type="radio" name="Q30a_31" value="3"/>
</td>
<td >
<p>سعر منخفض للالتزام بالأنظمة</p>
</td>
</tr>
</tbody>
</table>
<table class="table table-striped" border="3" >
<tbody>
<tr>
<td colspan="5" >
<p><strong>Pricing/Payments</strong></p>
<p><strong>الأسعار/الدفعات</strong></p>
</td>
</tr>
<tr>
<td >
<p>&nbsp;</p>
</td>
<td >
<p>Current PMI was better than Bupa</p>
<p>&nbsp;</p>
<p>شركة التأمين الطبي الحالية كانت أفضل من بوبا</p>
</td>
<td >
<p>Current PMI and Bupa were more or less similar</p>
<p>شركة التأمين الطبي الحالية وبوبا كانتا بنفس المستوى تقريبا</p>
</td>
<td >
<p>Bupa was better than current PMI.</p>
<p>&nbsp;</p>
<p>بوبا كانت أفضل من شركة التأمين الطبي الحالية</p>
</td>
<td >
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Pricing, Fee &amp; Charges</p>
</td>
<td >
<input type="radio" name="Q30a_32"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_32"  value="2"/>
</td>
<td >
<input type="radio" name="Q30a_32"  value="3"/>
</td>
<td >
<p>الأسعار والرسوم والأتعاب &nbsp;&nbsp;</p>
</td>
</tr>
<tr>
<td >
<p>Variety of Payment Options &amp; Flexible Terms</p>
</td>
<td >
<input type="radio" name="Q30a_33"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_33"  value="2"/>
</td>
<td >
<input type="radio" name="Q30a_33"  value="3"/>
</td>
<td >
<p>مجموعة من خيارات الدفع والشروط المرنة</p>
</td>
</tr>
<tr>
<td >
<p>Loyalty Programs</p>
</td>
<td >
<input type="radio" name="Q30a_34"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_34"  value="2"/>
</td>
<td >
<input type="radio" name="Q30a_34"  value="3"/>
</td>
<td >
<p>برامج الولاء</p>
</td>
</tr>
<tr>
<td >
<p>Cheap Price to comply with regulation</p>
</td>
<td >
<input type="radio" name="Q30a_35"  value="1"/>
</td>
<td >
<input type="radio" name="Q30a_35"  value="2"/>
</td>
<td >
<input type="radio" name="Q30a_35"  value="3"/>
</td>
<td >
<p>سعر منخفض للالتزام بالأنظمة</p>
</td>
</tr>
</tbody>
</table>
    
<p>Q30b. If you were to select Bupa, what is the maximum price difference (In %) you would have accepted to get the coverage from Bupa? SINGLE ANSWER POSSIBLE

<span dir="rtl">Q30b- لو كان عليك اختيار بوبا، ما هو الحد الأقصى لاختلاف السعر (بالنسبة المئوية) الذي يمكن أن تكونوا قبلتم دفعه للحصول 
على تغطية من بوا؟ يسمح باجابة واحدة فقط
</span>
    </p>
<table >
<tbody>
<tr>
<td >
<p>Percentage Price Difference Acceptable</p>
</td>
<td >
<p><input type="number" name="Q30b"/></p>
</td>
<td >
<p>النسبة المقبولة للاختلاف في السعر</p>
</td>
</tr>
</tbody>
</table>
    

    
    <input type="submit" class="btn btn-primary"/>
            
            </form>        
        </div>
    </body>
<script>
var max_limit = 3; // Max Limit
var Q11_limit=2;
//    var inter=[];
$(document).load(function(){  
    for(var i=0;i<41;i++){
    $("#Q27_1_"+i).hide();
    $("#Q27_2_"+i).hide();
    }    
    console.log(hello);
});
$(document).ready(function (){
    
  
    $(".check2:input:checkbox").each(function (index){
        this.checked = (".check2:input:checkbox" < Q11_limit);
        //console.log(index);
        if(this.checked==true){
        inter[index]=1;
        console.log(inter);
        }
    }).change(function (){
        if ($(".check2:input:checkbox:checked").length > Q11_limit){
            this.checked = false;
        }
    });
});
//$('.check:input:checkbox').click( function() {
//    var selectedIndex = $('.check:input:checkbox').index( $(this) );
    //console.log(selectedIndex);
    //... now do something with it...
//});
$(".check").each(function (index){
        this.checked = (".check:input:checkbox" < max_limit);
         
        //if(this.checked==true){
        //inter[index]=1;
    //  console.log(inter);
        //}
    
    for(var i=0;i<41;i++){
    $("#Q27_1_"+i).hide();
    $("#Q27_2_"+i).hide();
    }    
    //console.log(hello);
    
    }).change(function (){
        //console.log();
        if ($(".check:input:checkbox:checked").length > max_limit){
            this.checked = false;
        }
});
$('.check:input:checkbox').click( function() {
    var selectedIndex = $('.check:input:checkbox').index( $(this) );
    console.log(selectedIndex);
    var len = $('.check:input:checkbox:checked').length;
    selectedIndex+=1;
    console.log(len);
    if(len<=3){
    $("#Q27_1_"+selectedIndex).show();
    $("#Q27_2_"+selectedIndex).show();
        }
    console.log(selectedIndex);
    //... now do something with it...
});    
    
    </script>    
</html>
