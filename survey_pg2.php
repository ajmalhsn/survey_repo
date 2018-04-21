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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo.svg" width="50" height="50" class="d-inline-block align-top" alt="">
        JJ Market Research</a>
  </nav>
  <link rel="shortcut icon" href="favicon.ico">
    <title>JJ Market Research</title>

    <!-- Bootstrap core CSS -->

  </head>
<body>
    <div class"container">

    <div class="row">
        <div class="col">
        <?php include 'table_randomize.php' ?>
        </div>
     </div>



    <div class="row">
            <p>Q2. Please can you tell me the distribution of employees in your company for the following? SINGLE ANSWER POSSIBLE</p>
        <table class="table table-striped" border="3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">attributes</th>
                    <th scope="col">input</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Blue Collar Employees</td>
                    <td><input type="text" name="Q2_1"> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>White Collar Employees</td>
                    <td><input type="text" name="Q2_2"> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Locals</td>
                    <td><input type="text" name="Q2_3"> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Westerners</td>
                    <td><input type="text" name="Q2_4"> </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Asians</td>
                    <td><input type="text" name="Q2_5"> </td>
                </tr>
            </tbody>
        </table>
        </div>

        <div class="row">
        <div class="form-group">
          <form class="needs-validation" id="form_screen" action="input_process.php" method="GET" novalidate>
                  <p>Q3. Is your company part of a bigger group of companies or is this an individual business entity? SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
                <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Part of bigger group of companies </label>
        </div>
            <br>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio2" name="customRadio1" value="2" class="custom-control-input" required >
        <label class="custom-control-label" for="customRadio2">Individual business entity</label>
    </div>
            <br>
          </div>
            </form>
            </div>
        </div>

       <div class="row">
        <p>Q4. How many branches does your company have? SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
                <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">This is the only branch</label>
        </div>
            <br>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio2" name="customRadio1" value="2" class="custom-control-input" required >
        <label class="custom-control-label" for="customRadio2">2</label>
    </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio2" name="customRadio1" value="3" class="custom-control-input" required >
        <label class="custom-control-label" for="customRadio2">3</label>
    </div>
    <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio2" name="customRadio1" value="4" class="custom-control-input" required >
        <label class="custom-control-label" for="customRadio2">More than 3</label>
    </div>
              </div>  </div>
        <p>Q5. How many branches does your company have? SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Yes</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">No</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Not Sure</label>
        </div>
            <br>
          </div>
        <p>Q6. How would you define the general decision-making structure in your company? SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">All decisions are made centrally</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Most decisions are made centrally</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Strategic decisions are made centrally; rest have been delegated to Managers/Directors</label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Most decisions are delegated to Managers/Directors except some major decisions which are made centrally</label>
        </div>
              </div>
        <p>Q7. How would you describe the current state of the business? SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We are in an excellent position in the market to achieve our goals and ambitions</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We are in a very good position however there are some challenges to overcome</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We are currently facing some business challenges and would like to overcome these as soon as possible
</label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">The current business environment is quite challenging, and we are impacted by it</label>
        </div>
            <br>
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
              <p>Q10. How do you usually promote the business/your products & services? MTULIPLE ANSWERS POSSIBLE     </p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">TV</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Newspapers/ Magazines</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Brochures/Leaflets/Mailers</label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Billboards</label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Exhibitions/Events/Professional gathering</label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Face to face with your potential clients </label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Media marketing like SMS, Snapchat </label>
        </div>
        <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Do not promote business at this moment </label>
        </div>


            <br>
          </div>
        <p>Q12. For how long have you been providing Private Medical/Health insurance to your employees? SHOW CARD. SINGLE ANSWER POSSIBLE</p>
            <div class="form-check">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">Less than 1 year</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">1-3 years</label>
        </div>
                <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">3-5 years</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">More than 5 years</label>
        </div>
            <br>
          </div>
        <div class="row">
        <p>Q13. In the past two years, what changes have you noticed in the Private Medical/Health Insurance market? E.g., Flexibility, Features, Benefits, Service, Regulations, Prices etc. OPEN ENDED QUESTION. PROBE AND CLARIFY</p>
            <textarea  class="form-control" rows="5" name="Q13"></textarea>
        </div>
        <br>
      </div>


            <div class="row">
        <p>Q14. And how have you adjusted your company’s Medical/Health insurance requirements/needs to manage this change? E.g., Flexibility, Features, Benefits, Service etc. SHOW CARD. MULTIPLE ANSWERS POSSIBLE</p>
            <div class="form">
                <br>
             <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We have downsized the scheme </label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="2" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We have compromised on hospital network</label>
        </div>
            <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="3" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We have accepted more contribution from employees to reduce costs</label>
        </div>
                <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="4" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We have thoroughly reviewed our policy coverage to ensure these are in line with regulations</label>
        </div>
                <div class="custom-control custom-radio ">
        <input type="radio" id="customRadio1" name="customRadio1" value="5" class="custom-control-input" required >
            <label class="custom-control-label" for="customRadio1">We have compromised on annual limit</label>
        </div>
            <br>
                 <label class="custom-control-label" for="customRadio1">Others (Specify)</label>
                <input type="text" name="Q14">


        </div>


            <div class="row">
            <p>Q15. Please can you tell me how many employees (and their dependents) in your company have Medical/Health Insurance cover? SINGLE ANSWER POSSIBLE</p>
        <table class="table table-striped" border="3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">attributes</th>
                    <th scope="col">input</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row">

                    <td>Total Number of Employees Covered
                    </td>
                    <td><input type="text" name="Q2_1"> </td>
                </tr>
                <tr>

                    <td>Total Number of Dependents Covered</td>
                    <td><input type="text" name="Q2_2"> </td>
                </tr>
                <tr>

                    <td>Total Covered/Total Lives Insured</td>
                    <td><input type="text" name="Q2_3"> </td>
                </tr>
                <input type="text" name="Q2_5"> </td>
                </tr>
            </tbody>
        </table>
        </div>

        </div>

</div>


</html>
