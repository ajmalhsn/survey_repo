<?php include 'header.php'; ?>


<br>
<br>
<br>
<br>




<div class="container-fluid">
    <div class="section">
    <form method="POST" action="oil.php">
    <div id='tab1'>      
     
        <!--<div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Address(العنوان)</label>
          </div>
        </div>-->
    <div class="row">    
        <div class="col s12 m6 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title" >Introduction</span>
              <p> Good Morning/Afternoon/Evening. I am from SpectrumR, an International Marketing Research Consultancy. We are doing a Survey about your expectations when using Private Medical/Health Insurance. Please if you can take some time to answer this survey and help us launch better products and services for your needs.
Please be assured that your opinions will not be revealed with your name and will be kept strictly confidential. Your responses will be aggregated with other respondents to present an overall feedback.</p>
            </div>
          </div>
        </div>    
        <div class="col s12 m6 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title" >المقدمة</span>
              <p> صباح / مساء الخير. أنا ...... من شركة إسبيكترم - ر، هي شركة دولية لإستشارات أبحاث التسويق. نحن نقوم بإجراء إستطلاع رأي حول توقعاتك عند استخدام التأمين الطبي / الصحي الخاص لموظفيك. من فضلك خذ بعض الوقت للرد على هذا الإستبيان – إذا كان في إمكانك - لمساعدتنا على تقديم أفضل المنتجات و الخدمات التي تلبي إجتياجاتك.
تاكد ان معلوماتك ستعامل بسرية تامة و سيتم إستخدام جوبتك مع المجيبين الاخرين كمرجع عام</p>
            </div>
          </div>
          
        </div>
    </div>
         <div class="row">
       
            <div class="input-field col s12 m6 l4">
              <input id="icon_prefix" class="first" name="name1" type="text">
              <label for="icon_prefix">Respondent Name<br>(سم المجيبا)<br></label>
                
            </div>
        </div>
<p>Are you sure you want to continue?(هل انت سعيد بالمواصلة )</p>        
    <div class="switch"  >
        <label class="blue-text text-darken-4" class="flow-text">
        No(لا)
            <input type="checkbox" id="first_q">
            <span class="lever" ></span>
        Yes(نعم)
        </label>
    </div>
    <br>
    <br>
    </div>    
    <div id='tab2'>
    <div class="row">
      <div class="input-field col s12">
          <h5>Do you work in any of the following industries? </h5>
          <p>SINGLE ANSWER POSSIBLE</p>
          <h5>.هل تعمل في أي من الصناعات  التالية؟ إجابة واحدة</h5><br>
          <select name="opinion1" id="question2">
          <option value="" disabled selected>Choose your option</option>
          <option value="1">Advertising</option>
          <option value="2">Market Research</option>
          <option value="3">Journalism</option>
          <option value="4">Insurance company</option>  
          <option value="5">None of the above</option>             
        </select>
        
      </div>
        </div>
        </div>    
    <div id='tab3'>
      <div class="row">
        <div class="col s12 m6 l4">  
            <h5 >Have you participated in a Market Research survey or Focus Group Discussion in the past 6 months? SINGLE ANSWER POSSIBLE</h5>
            <p>
                <input name="q3" type="radio" id="test1" value="1" />
                <label for="test1">Yes</label>
                <input name="q3" type="radio" id="test2" value="0" />
                <label for="test2">No</label>
            </p>
      </div>
    </div>
    <div class="row">    
    <div class="col s12 m6 l4">  
        <h5 >Which city do you permanently live in? SINGLE ANSWER POSSIBLE (S3.ما هي المدينة التي تعيش فيها بشكل دائم؟ إجابة واحدة )</h5>
           <input type="radio" name="q4" id="test5" value="Jeddah"  />
            <label for="test5">Jeddah</label>
            <input type="radio" name="q4" id="test6" value="Riyadh"  />
            <label for="test6">Riyadh</label>
            <input type="radio" name="q4" id="test7" value="Dammam"  />
            <label for="test7">Dammam</label>
            <input type="radio" name="q4" id="test8" value="others"  />
            <label for="test8">others</label>  
      </div>
        </div>
    <div class="row">     
    <div class="col s12 m6 l4">  
        <h5>What is your age? SHOW CARD. SINGLE ANSWER POSSIBLE</h5>
        <h5></h5>
            <input type="radio" name="q5" id="q5_opt1" value="1"  />
            <label for="q5_opt1">Less than 22 years old</label>
            <input type="radio" name="q5" id="q5_opt2" value="2"  />
            <label for="q5_opt2">22-35</label>
            <input type="radio" name="q5" id="q5_opt3" value="3"  />
            <label for="q5_opt3">36-45</label>
            <input type="radio" name="q5" id="q5_opt4" value="4"  />
            <label for="q5_opt4">More than 45 years old</label>
    </div>       
    </div>    
    <div class="row">     
    <div class="col s12 m6 l4">  
        <h5>Have you participated in a Market Research survey or Focus Group Discussion in the past 6 months? SINGLE ANSWER POSSIBLE</h5>
            <input type="radio" name="q6" id="test9" value="1"  />
            <label for="test9">Yes</label>
            No<input type="radio" name="q6" id="test10" value="0"  />  
            <label for="test10">No</label>
    </div>       
    </div>
    </div>
    <div class="container">
    <div class="row">    
    <div class="col s3 m6 l4">    
    <a class="waves-effect waves-light btn" id="prev"><i class="material-icons left">arrow_back</i></a>        
    </div>    
    <div class="col s3 m6 l4 offset-s4">        
    <a class="waves-effect waves-light btn" id="next"><i class="material-icons right">arrow_forward</i></a>
        </div>
    </div>
    </div>        
        <div id="sub">    
        <button class="btn waves-effect waves-light" type="submit" action="action">Submit
        <i class="material-icons right">send</i>
        </button>
        </div>
    </form> 
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


















<?php include 'footer.php'; ?>