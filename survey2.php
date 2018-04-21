<?php include 'header.php'; ?>

    <div class="container">
<form action="input_process.php" method="POST">
    <br>
    <br>
    <div class="col s12 m4">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="name1">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="telephone">
          <label for="icon_telephone">Telephone</label>
        </div>
      </div>
    </div>
    <div class="row">    
        <div class="col s12 m6">
            <p class="black-text">How satisfied are you with
our product?</p>
            <table>
                <thead>
                    <th>Factors</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </thead>
                <tbody>
                <tr>
                    <td>Convenience of event location</td>
                    <td><p>
                        <input name="group1" type="radio" id="test1" value="1" />
                            <label for="test1"></label>
                    </p></td>
                    <td><p>
                        <input name="group1" type="radio" id="test2" value="2" />
                            <label for="test2"></label>
                    </p></td>
                    <td><p>
                        <input name="group1" type="radio" id="test3" value="3" />
                            <label for="test3"></label>
                    </p></td>
                    <td><p>
                        <input name="group1" type="radio" id="test4" value="4" />
                            <label for="test4"></label>
                    </p></td>
                    <td><p>
                        <input name="group1" type="radio" id="test5" value="5" />
                            <label for="test5"></label>
                    </p></td>
                    </tr>
                <tr>
                    <td>Cost</td>
                    <td><p>
                        <input name="group2" type="radio" id="test6" value="1" />
                            <label for="test6"></label>
                    </p></td>
                    <td><p>
                        <input name="group2" type="radio" id="test7" value="2" />
                            <label for="test7"></label>
                    </p></td>
                    <td><p>
                        <input name="group2" type="radio" id="test8" value="3" />
                            <label for="test8"></label>
                    </p></td>
                    <td><p>
                        <input name="group2" type="radio" id="test9" value="4" />
                            <label for="test9"></label>
                    </p></td>
                    <td><p>
                        <input name="group2" type="radio" id="test10" value="5" />
                            <label for="test10"></label>
                    </p></td>
                    </tr>
                <tr>
                    <td>Quality of product</td>
                    <td><p>
                        <input name="group3" type="radio" id="test11" value="1" />
                            <label for="test11"></label>
                    </p></td>
                    <td><p>
                        <input name="group3" type="radio" id="test12" value="2" />
                            <label for="test12"></label>
                    </p></td>
                    <td><p>
                        <input name="group3" type="radio" id="test13" value="3" />
                            <label for="test13"></label>
                    </p></td>
                    <td><p>
                        <input name="group3" type="radio" id="test14" value="4" />
                            <label for="test14"></label>
                    </p></td>
                    <td><p>
                        <input name="group3" type="radio" id="test15" value="5" />
                            <label for="test15"></label>
                    </p></td>
                    </tr>
                <tr>
                    <td>Branding of product</td>
                    <td><p>
                        <input name="group4" type="radio" id="test16" value="1" />
                            <label for="test16"></label>
                    </p></td>
                    <td><p>
                        <input name="group4" type="radio" id="test17" value="2" />
                            <label for="test17"></label>
                    </p></td>
                    <td><p>
                        <input name="group4" type="radio" id="test18" value="3" />
                            <label for="test18"></label>
                    </p></td>
                    <td><p>
                        <input name="group4" type="radio" id="test19" value="4" />
                            <label for="test19"></label>
                    </p></td>
                    <td><p>
                        <input name="group4" type="radio" id="test20" value="5" />
                            <label for="test20"></label>
                    </p></td>
                    </tr>
                </tbody>
            
            </table>
        
        </div>
        </div>
    <input type="hidden" name="final" value="1"/>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

</form>

</div>





























<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-affect"><a href="survey.php">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

<?php include 'footer.php'; ?>