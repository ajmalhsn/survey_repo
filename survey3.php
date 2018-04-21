<?php include 'header.php'; ?>

<div class="container">
    <div class="section">
        <h3 class="orange-text">Questionaire</h3>
        <div class="divider"></div>
<form method="POST" class="red-text" action="oil.php">
<div class="row">
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="Location" name="location" type="text"/>
            <label id="Location">Location</label>   
        </div>
    </div>
    </div>    
    
    <div class="row">    
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="typeoil" name="oil-type" type="text"/>
            <label id="typeoil">Type of oil</label>   
        </div>
        </div>    
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="amt" name="amount" type="text"/>
            <label id="amt">Amount</label>   
        </div>    
    </div>
        </div>    
    <div class="row">    
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="typeoil" name="oil-type" type="text"/>
            <label id="typeoil">Type of oil</label>   
        </div>
        </div>
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="amt" name="amount" type="text"/>
            <label id="amt">Amount</label>   
        </div>    
    </div>
    </div>    
    <div class="row">    
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="typeoil" name="oil-type" type="text"/>
            <label id="typeoil">Type of oil</label>   
        </div>
        </div>    
    <div class="col s12 m6 l4">
        <div class="input-field">
            <input id="amt" name="amount" type="text"/>
            <label id="amt">Amount</label>   
        </div>    
    </div>
    </div>    
   <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</form>
</div>
</div>









<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

<?php include 'footer.php'; ?>