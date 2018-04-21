<?php include 'header.php'; ?>
<style>
     #map {
       height: 400px;
       width: 100%;
      }
      #wrapper { position: relative; }
      #over_map { position: absolute; top: 10px; left: 10px; z-index: 99; }

   </style>
<br>
<br>
<br>
   <div class="progress">
         <div class="indeterminate"></div>
     </div>
     <div id="wrapper">
  <div class="col s12 m12" id="map">

  </div>

  <div id="over_map">
    <br>
    <br>
    <br>
        <div class="col s12 m3 ">
          <div class="card #d7ccc8 brown lighten-4 hoverable">
            <div class="card-content black-text">
              <span class="card-title">Address</span>
              <p>JJ Market Research<br>
                  Al Meera Buildings 4/1<br>
                    Medina Road<br>
                    Jeddah  65124<br> </p>
            </div>
          </div>
      </div>
  </div>
</div>
<br>
<br>
<div class="container">
<h4 class="black-text">Submit any Query </h4>
<div class="row">
    <form class="col s12 m6" action="feedback_entry.php" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" name="first_name" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="last_name" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <div class="input-field inline">
            <input id="email" type="email" name="Email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" name="msg" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
    </form>
  </div>
</div>

    <br><br>

    <footer class="page-footer orange">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Company Bio</h5>
            <p class="grey-text text-lighten-4">We are a team of professionals working in this company, Our goal is to acheive success in the field of market research.</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">SiteMap</h5>
            <ul>
              <li><a class="white-text" href="#!">About Us</a></li>
              <li><a class="white-text" href="#!">Our Products</a></li>
              <li><a class="white-text" href="#!">Contact Us</a></li>
              <li><a class="white-text" href="#!">Home</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Contact details</h5>
            <ul>
              <li><a class="white-text" href="#!">JJ Market Research</a></li>
              <li><a class="white-text" href="#!">Al Meera Buildings 4/1</a></li>
              <li><a class="white-text" href="#!">Medina Road</a></li>
              <li><a class="white-text" href="#!">Jeddah  65124</a></li>
                <li><a class="white-text" href="#!">Phone No: 00 966  506096091</a></li>
  <li><a class="white-text" href="#!"> 00 966  535300763</a></li>
  <li><a class="white-text" href="#!">E-mail : jjmrksa@gmail.com</a></li>

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
  <script>$(window).load(function(){
    $(".progress").hide();
  });
  </script>
    <script>
      function initMap() {
        var riyadh = {lat: 24.713608, lng: 46.674844};
        var makkah = {lat: 21.395046, lng: 39.858894 };
        var jeddah = {lat: 21.286589, lng: 39.243911};
        var taif = {lat: 21.446708, lng: 40.512637};
        var home = {lat: 21.514438, lng: 39.182128}
        var dammam = {lat: 26.398740, lng: 49.976171};
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: home
        });
        var marker = new google.maps.Marker({
          position: riyadh,
          map: map
        });
        var marker = new google.maps.Marker({
          position:home,
          map: map,
          icon :'images/home_confnl.png'
        });
        var marker2 = new google.maps.Marker({
          position: makkah,
          map: map
        });
        //var marker3 = new google.maps.Marker({
        //  position: jeddah,
          //map: map
        //});
        var marker4 = new google.maps.Marker({
          position: taif,
          map: map
        });
        var marker5 = new google.maps.Marker({
          position: dammam,
          map: map
        });



      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqdaL0-QL7kAVo3DeLIgyuTvoI_VGfCDg&callback=initMap">
       </script>
  <script src="js/init.js"></script>

  </body>
</html>
