<footer class="page-footer grey lighten-2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5>Company Bio</h5>
        <p class="black-text text-lighten-4">We are a team of professionals working in this company, Our goal is to acheive success in the field of market research.</p>


      </div>
      <div class="col l3 s12">
        <h5   >SiteMap</h5>
        <ul>
          <li><a    href="#!">About Us</a></li>
          <li><a    href="#!">Our Products</a></li>
          <li><a    href="#!">Contact Us</a></li>
          <li><a    href="#!">Home</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5   >Contact details</h5>
        <ul>
          <li><a    href="#!">JJ Market Research</a></li>
          <li><a    href="#!">Al Meera Buildings 4/1</a></li>
          <li><a    href="#!">Medina Road</a></li>
          <li><a    href="#!">Jeddah  65124</a></li>
            <li><a    href="#!">Phone No: 00 966  506096091</a></li>
<li><a    href="#!"> 00 966  535300763</a></li>
<li><a    href="#!">E-mail : jjmrksa@4dmn.net</a></li>

        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Made by <a class="orange-text text-lighten-3" href="#">JJ Market Research</a>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
$(document).ready(function(){
    $("#prev").hide();  
     $("#tab2").hide();
    $("#sub").hide();
    $("#tab3").hide();
    $("#next").click(function(){
        var count=1;  
        console.log("hello");
        if($("#tab1").is(':visible')&&count==1){
            //console.log($("#first_q").is('checked'));
            
            if($("#first_q").prop('checked')==true){
                console.log("is checked");
            }
            else{
                window.alert("please press yes otherwie the interview gets terminated");
                return;
            }
            $("#tab2").show();
            $("#tab1").hide();
            $("#prev").show();
            
            count=0;
            
    
        }
        if($("#tab2").is(":visible")&&count==1){
            var ans=$("#question2").val();
            
            
            
            if(ans==5){
            $("#tab2").hide();
            $("#tab3").show();
            count=0;
            }else{
                var x=confirm("if you press Ok interview will terminate");
                if(x==true){
                $("#sub").show();
                $("#next").hide();    
                }
                else{
                   $("#tab2").hide();
                   $("#tab3").show();
                   count=0; 
                }
            }
            
    
        }
        if($("#tab3").is(":visible")&&count==1){
            var ans3=$('input[name=q3]:checked').val();
            var ans4=$('input[name=q4]:checked').val();
            var ans5=$('input[name=q5]:checked').val();
            if(ans3==0 && ans4=="others" && (ans5=="2"||ans5=="3")){
            $("#sub").show();
            $("#next").hide();
            }
        }
    });   
  ///$('#staggeredList').fadeIn(3000);
        $('select').material_select();
    //$('select').material_select('destroy');

    $('.slider').slider();
    $('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
$('.slider').height(500);
  });
  /*  new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});*/
    
</script>

</body>
</html>
