<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
     <!--Import materialize.js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body class="grey darken-4">


     <div class="row">

<!-- ******************** DATE *****************************-->
    <div class="col s12 m12">


          <div class="col s12 m6 grey darken-2 head0 valign center-block">

            <?php
              $date = strftime('%A %d %B %Y');
              $date_short = strftime('%d/%m/%y' );
              $heure = date("H:i:s");

              echo "<h3 class='date_style center-align'>$date</h3>";
              //echo "<h2 class='short_date'>$date_short</h2>";
             ?>
          </div>
<!-- ******************** CLOCK *****************************-->

          <div class="col s12 m6 grey darken-3 head0 valign center-block">
            <div class="clock center-align">
              <h2 id="clock_style" class="valign"></h2>
           </div>
         </div>

</div>
</div>
<!-- ******************** FAB Floating button action *****************************-->
          <div class="fixed-action-btn toolbar menu0">
           <a class="btn-floating btn-large red">
             <i class="large material-icons">mode_edit</i>
           </a>
           <ul>
             <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
             <li><a class="btn-floating "><i class="material-icons">format_quote</i></a></li>
             <li><a class="btn-floating "><i class="material-icons">publish</i></a></li>
             <li><a class="btn-floating"><i class="material-icons">attach_file</i></a></li>
           </ul>
         </div>


<!-- ******************** Script_FAB *****************************-->
      <script>
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn');
      var instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: true
      });
    });
    </script>


<!-- ********************************************************-->
<!-- ******************** MODULES CAMS *****************************-->
<!-- *******************************************************-->

  <div class="row">

<!-- ******************** CARD01 *****************************-->
  <div class="col s12 m6">

    <div class="card grey darken-2" >

        <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam01 activator" alt="video" src="http://192.168.1.36:8080/video" onclick="closeNav2()" alt="touch to view">
        </div>

        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">

            <div class="input_">

                <input type="text" id="dropdown_BD" placeholder="Data Base">

                <input type="text" id="nameA" placeholder="Device Name">

                <input type="text" id="ipaddA" placeholder="Just Device Number IP" >

                <button id="subhda" onclick="hud_switch('huda','hudA','titleA','link_titleA','ipaddA','nameA','cam01','frame-area_c1')">DONE</button>
            </div>

            <i class="material-icons right">more_vert</i>
          </span>

            <p><a href="#">This is a link</a></p>
        </div>


        <div class="card-reveal grey darken-2">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <iframe name="Framename1" src="http://192.168.1.36:8080/" width="100%" height="100%"  class="frame-area_c1" scrolling ="auto">
          </iframe>
        </div>
    </div>
</div>

<!-- ******************** CARD02 *****************************-->

<div class="col s12 m6">
    <div class="card grey darken-2">
          <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam01 activator" alt="video" src="http://192.168.1.36:8080/video" onclick="closeNav2()" alt="touch to view">
            <!--<img class="activator" src="images/office.jpg"> -->
          </div>

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">

              <div class="input_">

                  <input type="text" id="dropdown_BD" placeholder="Data Base">

                  <input type="text" id="nameA" placeholder="Device Name">

                  <input type="text" id="ipaddA" placeholder="Just Device Number IP" >

                  <button id="subhda" onclick="hud_switch('huda','hudA','titleA','link_titleA','ipaddA','nameA','cam01','frame-area_c1')">DONE</button>
              </div>

              <i class="material-icons right">more_vert</i>
            </span>
            <p><a href="#">This is a link</a></p>
          </div>


          <div class="card-reveal grey darken-2">
            <span class="card-title grey-text text-darken-4">Card Title
              <i class="material-icons right">close</i>
            </span>

            <iframe name="Framename1" src="http://192.168.1.36:8080/" width="100%" height="100%"  class="frame-area_c1" scrolling ="auto">
            </iframe>
          </div>
        </div>
    </div>

</div>

     <JavaScript at end of body for optimized loading></JavaScript>
     <script type="text/javascript" src="js/bin/materialize.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
     <script src="js/main.js"></script>

   </body>
 </html>
