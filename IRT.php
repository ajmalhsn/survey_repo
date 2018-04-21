<?php include 'connect_db.php'; ?>

<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
        <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="img/logo_JJ.png">
    JJ Market Research
  </a>
</nav>
<style>

</style>

    </head>
    <body>
        <div class="container">

        <div class=" row justify-content-center">
            <img src="img/bupa_logo.png" />

        </div>
        <div class="row justify-content-center">
        <div class="cert"></div>
      </div>
        <div class=" row justify-content-center">

      <div class="btn-group" data-toggle="buttons">
      <div class="col">
        <button type="button" id="1" class="btn btn-success btn-lg">Yes</button>
      </div>
      <div class="col">
            <button type="button" id="2" class="btn btn-danger btn-lg">No</button>
      </div>
      <div class="col">
            <button type="button" id="3" class="btn btn-warning btn-lg">Not sure</button>
      </div>
    </div>
</div>



</div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    var time_begin = new Date().getTime();
    var attribute_id=1;
    var company_id=1;
                   $(document).ready(function(){


                     console.log(attribute_id);
                     $.ajax({
                       //type: "GET", //with response body
                       type: "GET", //only headers
                       async: true,
                       data: {'id':attribute_id},
                       url: "irt_attribute.php",
                       success: function(data,status){
                          console.log(data,status);
                        $(".cert").html(data);
                        console.log("did anything happen");

                      },
                      error: function(jqxhr, status, exception) {
                          alert('Exception:', exception);
                      }
                     });

                   });
                   $('button').click(function(e){
                      var idClicked = e.target.id;
                      var hours = new Date().getHours();
                      var minutes=new Date().getMinutes();
                      var seconds=new Date().getSeconds();
                      var time_end=new Date().getTime()/1000;
                      var last_time=hours+":"+minutes+":"+seconds;
                    //  var response=time_end-time_begin;
                      attribute_id+=1;
                      console.log(idClicked,hours,minutes,seconds,time_end,last_time);

                      $.ajax({
                        type:"POST",
                        async: true,
                        data:{'value':idClicked,'id':attribute_id,'company_id':company_id},
                        url: "irt_input_data.php",
                        success:function(data,status){
                          //console.log(data,status);
                        }
                      });
                      $.ajax({
                        //type: "GET", //with response body
                        type: "GET", //only headers
                        async: true,
                        data: "id="+attribute_id,

                        url: "irt_attribute.php",
                        success: function(data,status){

                         $(".cert").html(data);
                         //console.log("did anything happen");

                       },
                       error: function(jqxhr, status, exception) {
                           alert('Exception:', exception);
                       }
                      });

                   });

           </script>

</html>
