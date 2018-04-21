<?php session_start();
include 'connect_db.php';


    //if (basename($_SERVER['PHP_SELF']) != "verify.php") {
      //  session_destroy();
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
    //}
    if(isset($_SESSION["user"])&& $_SESSION['previous']=="verify.php"){
            
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

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
      
  </head>

  <body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/jj_logo1.png" alt="" width="90" height="90">
        <h2>Survey</h2>
        <p  >I am from SpectrumR, an International Marketing Research Consultancy. We are doing a Survey about your expectations when buying Private Medical/Health Insurance for your employees. Please if you can take some time to answer this survey and help us launch better products and services for your needs.
<br> 
<strong>Please be assured that your opinions will not be revealed with your name and will be kept strictly confidential. Your responses will be aggregated with other respondents to present an overall feedback.</strong>
</p>
          <p dir="rtl"><strong>أنا من SpectrumR ، وهي شركة استشارات تسويقية دولية. نحن نقوم بعمل مسح حول توقعاتك عند شراء تأمين طبي / صحي خاص لموظفيك. من فضلكم ، إذا استطعتم قضاء بعض الوقت للإجابة على هذا الاستطلاع ومساعدتنا على إطلاق منتجات وخدمات أفضل لتلبية احتياجاتكم.
 <br>
يرجى التأكد من أن آرائك لن يتم الكشف عنها باسمك وسيتم الاحتفاظ بسرية تامة. سيتم تجميع إجاباتك مع المستجيبين الآخرين لتقديم تعليقات عامة.ام جوبتك مع المجيبين الاخرين كمرجع عام</strong></p>
      </div>
        
        
      <div class="row justify-content-md-center">
        <!---->
        <div class="col-md-auto">
          
          <form class="needs-validation" id="form_screen" action="input_process.php" method="GET" novalidate>
              <?php include 'screener_survey.php' ?>
            <hr>
              <h4 class="mb-3">Personal Details</h4>
            <hr>  
           <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name (الاسم الاول)</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                    (مطلوب الاسم الأول صالح)
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name (الكنية)</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                    (مطلوب اسم العائلة صحيح)
                </div>
              </div>
            </div>

            
              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Mobile (رقم الاتصال)</label>
                <input type="text" class="form-control" id="firstName" name="tel_mobile" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid number is required.
                    (مطلوب رقم صالح)
                </div>
              </div>
                <div class="col-md-6 mb-3">
                <label for="firstName">Landline (رقم الاتصال)</label>
                <input type="text" class="form-control" id="firstName" name="tel_landline" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid number is required.
                    (مطلوب رقم صالح)
                </div>
              </div>
                    
              </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

    <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" id="sub_btn" type="submit">Continue to Segmentation study</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 JJ Market Research</p>
        <!--<ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>-->
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script>
      /*/window.onload = function(){
    document.getElementById("subm").onclick=function(){
        alert("Hello WOrld");
    }
}*/
      
      </script>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        console.log("hello"); 
       document.getElementById("excess").style.visibility = "hidden";  
        document.getElementById("customRadio43").onclick = function() { document.getElementById("excess").style.visibility = "visible";  
            };
        (function() {
        'use strict';
          
   window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if(document.getElementById('customRadio6').checked||document.getElementById('customRadio13').checked||document.getElementById('customRadio20').checked||document.getElementById('customRadio27').checked){
                event.preventDefault();
                event.stopPropagation();
                alert("please insert appropriate values otherwise the interview is terminated");
                return;
            }        
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
<?php 
}
else{
    echo 'Please login sorry for the inconvineince...';
    sleep(3);
     header("Location:login.php");
}
?>


