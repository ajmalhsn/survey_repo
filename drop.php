<?php 
include 'connect_db.php';


$sql="SELECT id from screener_survey ORDER BY id DESC LIMIT 1";
$result=$link->query($sql);
if($result->num_rows > 0){  
while($row = $result->fetch_assoc()) {
    $id=$row["id"];    
    }
}
echo $result->num_rows;
$value=0;
$stmt2="SELECT a19 FROM answer_set WHERE id=$id";
$result_dropdown=$link->query($stmt2);
if($result_dropdown->num_rows > 0){  
while($row = $result_dropdown->fetch_assoc()) {
    $value=$row["a19"];    
    }
}
//echo $result_dropdown->num_rows;

switch($value){
    case 1:{
     ?>

<p>Q24. What is the average premium you paid per scheme? SINGLE ANSWER POSSIBLE PER SCHEME</p>
<p dir="rtl">Q24-  ما هو متوسط القسط الذي دفعتموه لكل برنامج؟ يسمح بإجابة واحدة لكل برنامج </p>
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Bupa Arabiaبوبا العربية
        </span>
</label>
        <select  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_1"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select> </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_2"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><select name="Q23_3"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select> </td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_4"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select> </td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><select name="Q23_5"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_6"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_7"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_8"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_9"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_10"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_11"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">
    1. Diamond
           <span dir="rtl">1 الألماسية
              </span>
               </option>
          <option value="2">2. Gold+
     <span dir="rtl">2- الذهبية+</span>
    </option>
          <option value="3">3. Gold
    <span dir="rtl">3- الذهبية
    </span>
        </option>
          <option value="4"><span dir="rtl">4. Silver
    4- الفضية
    </span>
              </option>
         <option value="5">5. Bronze
    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Blue
    <span dir="rtl">6- الزرقاء
              </span>
        </option>
          <option value="7">7. Green
              <span dir="rtl">7- الخضراء
              </span>
                  </option>
          <option value="8"> 8. Basic
    <span dir="rtl">8- بيسك 
              </span>    
    </option>    
          <option value="9">9. White
    <span dir="rtl">9- البيضاء
              </span>
        </option>
        </select>  </td>
                    <td><input type="text" name="Q24_11"> </td>
                </tr>
             </tbody>
        </table>
<?php 
    }        
    case 6:{
     
?>     
    <table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Tawuniyaالتعاونية
        </span>
</label>
        
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td>  <select name="Q23_1"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_2"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><select name="Q23_3"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_4"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><select name="Q23_5"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_6"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
               
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_7"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>   </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_8"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_9"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>   </td>
                    <td><input type="text" name="Q24_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_10"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_11"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_11"> </td>
                </tr>
             </tbody>
        </table>
    
<?php }
    case 24:{
        
?>   
<select  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select>
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Tawuniyaالتعاونية
        </span>
</label>
        
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_1"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_2"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_3"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><select name="Q23_3"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_4"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><select name="Q23_5"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3
              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_6"  class="form-control" id="exampleFormControlSelect1">
          <option>MedGulf
              <span dir="rtl">ميد غلف
            </span></option>
          <option value="1">1. VVIP</option>
          <option value="2">2. VIP
            <span dir="rtl">2- كبار الشخصيات</span>
        </option>
          <option value="3">3. A Option 1

<span dir="rtl">
3- أ  الخيار 1</span></option>
         <option value="4">4. A Option 2


    <span dir="rtl">4- أ الخيار 2
             </span>
        </option >
          <option value="5">5. B Option 1


    <span dir="rtl">5- ب الخيار 1
              </span>
        </option>
          <option value="6">6. B Option 2


              <span dir="rtl">6- ب الخيار 2</span>
          </option>
          <option value="7">7. B Option 3


              <span dir="rtl">7- ب الخيار 3</span>
          </option>
          <option value="8">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        <option value="9">8. C Option 1
              <span dir="rtl">8- ج الخيار 1</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
               
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_7"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>   </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_8"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select> </td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><select name="Q23_9"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_10"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select></td>
                    <td><input type="text" name="Q24_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><select name="Q23_11"  class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Premier +

    
       <span dir="rtl">1- بريميير+
              </span>
               </option>
          <option value="2">2. Premier
2- بريميير

     <span dir="rtl">2- بريميير</span>
    </option>
          <option value="3">3. Gold

    <span dir="rtl">3- الذهبية

    </span>
        </option>
          <option value="4">4. Silver<span dir="rtl">
4- الفضية</span></option>
         <option value="5">5. Bronze


    <span dir="rtl">5- البرونزية
             </span>
        </option >
          <option value="6">6. Basic +


    <span dir="rtl">6- بيسك +
              </span>
        </option>
          <option value="7">7. Basic
              <span dir="rtl">7- بيسك</span>
          </option>
        </select>  </td>
                    <td><input type="text" name="Q24_11"> </td>
                </tr>
             </tbody>
        </table>
<?php    }   
    case 16:{
?>
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_1" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option>
    </select>
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td>
    <label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_2" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option>
    </select>
   </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_3" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option>
    </select> </td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_4" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_5 " class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select></td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_6" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select> </td>
                    <td><input type="text" name="Q24_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_7" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select></td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select> </td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select></td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_9" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select> </td>
                    <td><input type="text" name="Q24_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_10" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select> </td>
                    <td><input type="text" name="Q24_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Takaful Al Rajhi
تكافل الراجحي

        <select name="Q23_11" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class A
     <span dir="rtl">1- الدرجة أ</span>
    </option>
          <option value="2">2. Class B
    <span dir="rtl">2- الدرجة ب</span>
        </option>
          <option value="3">3. Class C<span dir="rtl">3- الدرجة ج
    </span></option></select> </td>
                    <td><input type="text" name="Q24_11"> </td>
                </tr>
             </tbody>
        </table>
<?php    }   
    case 20:{
?>        
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
    



    
    <div class="form-group">
    


        <select name="Q" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select>
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td>


        <select name="Q23_1" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select>
   </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td>


        <select name="Q23_2" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td>


        <select name="Q23_3" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td> 
        <select name="Q23_4" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td>
        <select name="Q23_5" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td>



        <select name="Q23_6" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td>


        <select name="Q23_7" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_9" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select> </td>
                    <td><input type="text" name="Q24_9"> </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td>



        <select name="Q23_10" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_10"> </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_11" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B
<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C 

<span dir="rtl">4- الدرجة ج
    </span></option>
            <option value="5">5. Class CVT
<span dir="rtl">الدرجة CVT
    </span></option>
            <option value="6">6. Class C0111
<span dir="rtl">6- الدرجة C0111
    </span></option>
    </select> </td>
                    <td><input type="text" name="Q24_11"> </td>
                </tr>
             </tbody>
        </table>
<?php    }
    case 11:{


    
        
        
?> 
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
<div class="form-group">
    




        <select name="Q" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select>
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_1" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select>
   </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_2" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td>


        <select name="Q23_3" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_4" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_5" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_6" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_7" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A
<span dir="rtl">3- الدرجة أ</span>
          </option>
            <option value="4">4. Class B
<span dir="rtl">4- الدرجة ب</span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_9"> </td>
        </tr>
        <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_10"> </td>
        </tr>
        <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td>




        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP
     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class L

    <span dir="rtl">2- الدرجة L</span>
        </option>
          <option value="3">3. Class A

<span dir="rtl">3- الدرجة أ

    </span></option>
            <option value="4">4. Class B


<span dir="rtl">4- الدرجة ب
    </span></option>
            <option value="5">5. Class C

<span dir="rtl">5- الدرجة ج
    </span></option>
            <option value="6">6. Class D

<span dir="rtl">6- الدرجة د
  </span></option>
                        </select> 
                    
 </td>
                    <td><input type="text" name="Q24_11"> </td>
            </tr>
        </tbody>
</table>
    
<?php 
    }
    case 22:
        {
?>     
<table class="table table-striped" border="3">
            <thead class=" table-hover thead-dark">
                <tr>
                    <th scope="col">Sno.</th>
                    <th scope="col">Type of Employees benefitted</th>
                    <th scope="col">Q23</th>
                    <th scope="col">Q24</th>
                </tr>
            </thead>
<div class="form-group">
    <label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select>
  </div>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue collar staff/Labour &nbsp;   <b dir="rtl">كم عدد موظفي المكاتب – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_1" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select>
   </td>
                    <td><input type="text" name="Q24_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>For Managers &nbsp; <b dir="rtl">كم عدد العمال – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_2" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>For Directors&nbsp;<b dir="rtl">كم عدد العمال  – المرافقين المؤمن عليهم </b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagrالصقر</span></label>
    
        <select name="Q23_3" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>For Senior Executives (CEO/Owner) &nbsp; <b dir="rtl">كم عدد السعوديين - الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_4" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>For Normal/Mid-level employees &nbsp;<b dir="rtl">كم عدد السعوديين – الأشخاص التابعين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_5" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_5"> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Locals &nbsp;<b dir="rtl">كم عدد العرب – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_6" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_6"> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Arab Expats &nbsp;<b dir="rtl">كم عدد العرب – المرافقين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_7" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_7"> </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Asian Expats &nbsp;<b dir="rtl">كم عدد الآسيويين – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_8" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_8"> </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Westerners &nbsp;<b dir="rtl">كم عدد الآسيويين – المرافقين المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_9" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_9"> </td>
        </tr>
        <tr>
                    <td>10</td>
                    <td>Male &nbsp;<b dir="rtl">كم عدد الذكور – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_10" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select></td>
                    <td><input type="text" name="Q24_10"> </td>
        </tr>
        <tr>
                    <td>11</td>
                    <td>Female &nbsp;<b dir="rtl">كم عدد الإناث  – الأشخاص المؤمن عليهم</b></td>
                    <td><label for="exampleFormControlSelect1">Al Sagr


الصقر

		


    
        <select name="Q23_11" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1. Class VIP

     <span dir="rtl">1- درجة كبار الشخصيات</span>
    </option>
          <option value="2">2. Class A
    <span dir="rtl">2- الدرجة أ</span>
        </option>
          <option value="3">3. Class B

<span dir="rtl">3- الدرجة ب
    </span></option>
            <option value="4">4. Class C Direct
<span dir="rtl">4- الدرجة ج مباش
    </span></option>
            
<option value="5">5. Class C Restricted


<span dir="rtl">5- الدرجة ج 
    </span></option>
    </select>
 </td>
                    <td><input type="text" name="Q24_11"> </td>
            </tr>
        </tbody>
</table>
<?php          
}
}
?>