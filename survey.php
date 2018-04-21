<?php include 'header.php'; ?>

<div class="container">
        
<form action ='input_process.php' method="POST" class="s12">
<div class="row">
<div class="col s12 m6 l4">       
<p>How long have you used
our products/service?</p>
    <br>
    <p>
      <input name="group1" type="radio" id="test1" value="1" />
      <label for="test1">Less than 6 months</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" value="2" />
      <label for="test2">1 year to less than 3 years</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test3" value="3" />
      <label for="test3">3 years to less than 5 years</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test4" value="4" />
      <label for="test4">5 years or more</label>
    </p>
    </div>
    
<div class="divider"></div>
<br>
<div class="col s12 m6 l4">           
    <p>Which of our products/services
do you use?</p>
    <br>
    <p>
      <input type="checkbox" id="test5" name="product_which[]" value="pr1" />
      <label for="test5">Product 1</label>
    </p>
    <p>
      <input type="checkbox" id="test6" name="product_which[]" value="pr2" />
      <label for="test6">Product 2</label>
    </p>
    <p>
      <input type="checkbox" id="test7" name="product_which[]" value="pr3" />
      <label for="test7">Product 3</label>
    </p>
    <p>
      <input type="checkbox" id="test8" name="product_which[]" value="pr4" />
      <label for="test8">Product 4</label>
    </p>
    <p>
      <input type="checkbox" id="test9" name="product_which[]" value="pr5" />
      <label for="test9">Others</label>
    </p>
    </div>
<div class="divider"></div>
    <br>
    <div class="col s12 m4">
<p>How much percentage are you satisfied with our product?</p>
    <br>
<p class="range-field">
      <input type="range" name="slider_range" id="test5" min="0" max="100" />
    </p>

</div> 
    </div>
<div class="divider"></div> 
<div class="row">    
<div class="col s12 m4">    
    
<p class="black-text">If you switched to another
service provider, please indicate
your reasons for doing so.
Select all that apply.</p>
   
<div class="input-field col s12">
    
    <select name="reason_switch[]" multiple>
        <option value="0" disabled selected>Choose your option</option>
        <option value="1">Better quality of service</option>
        <option value="2">Service is easier to use</option>
        <option value="3">Better access to service</option>
        <option value="4">Better customer service</option>
        <option value="5">Better price</option>
        <option value="6">Better payment plan</option>
    </select>
        
    <label>select one or more than one</label>
        </div>
    </div> 

    <br>
    <br>
    <br>
    <br>  
    <div class="col s12">
    What do you feel about this image?<br><img class src="images/client1.png" width="200px" height="200px"/>
    
        <div class="input-field col s12 m4">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="txt_img"></textarea>
          <label for="icon_prefix2">Your opinion about image</label>
        </div>
      </div>
  </div>
<button class="btn waves-effect waves-light" type="submit" name="action">Next
    <i class="material-icons right">arrow_forward</i>
  </button>
    
</form>
</div>














<!--<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-affect"><a href="survey1.php">1</a></li>
    <li class="waves-effect"><a href="survey2.php">2</a></li>
    <li class="waves-effect"><a href="survey3.php">3</a></li>
    <li class="waves-effect"><a href="survey4.php">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>-->

<?php include 'footer.php'; ?>