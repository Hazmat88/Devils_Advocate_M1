<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body class="grey darken-4">


     <div class="row">


          <div class="col s12 m6 teal #616161 grey darken-2 head0  center-align">


            <?php
        $date = strftime('%A %d %B %Y');
        $date_short = strftime('%d/%m/%y' );
        $heure = date("H:i:s");

        echo "<h2 class='date_style '>$date</h2>";
        //echo "<h2 class='short_date'>$date_short</h2>";
       ?>

          </div>
          <!--
         <div class="row s2">

           <div class="grid-example col s12 teal lighten-2">grdgdrgdrg</div>
           <div class="col s12 teal lighten-2"><span class="flow-text">6-columns (offset-by-6)</span></div>
         </div>-->

          <div class="col s12 m6 grey darken-3 head0 center-align"><div class="clock">
              <h1 id="clock_style"></h1>
            <!--  <h2 id="clock_scdmini"></h2> !--->
           </div>
         </div>

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
 </div>



      <script>



      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn');
      var instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: true
      });
    });
        </script>
        <div class="row">




          <div class="card col m6 s12 grey darken-2" >
        <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam01" alt="video" src="images/office.jpg" onclick="closeNav2()" alt="touch to view">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><div class="input_">


                <input type="text" id="dropdown_BD" placeholder="Data Base">

                <input type="text" id="nameA" placeholder="Device Name">

                <input type="text" id="ipaddA" placeholder="Just Device Number IP" >

                <button id="subhda" onclick="hud_switch('huda','hudA','titleA','link_titleA','ipaddA','nameA','cam01','frame-area_c1')">DONE</button>
            </div><i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal grey darken-2">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <iframe name="Framename1" src="http://192.168.1.31:8080/" width="100%" height="60vw"  class="frame-area_c1" scrolling ="auto">
      </iframe>
        </div>
      </div>

      <div class="card col m6 s12 grey darken-2">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/office.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
    </div>



     <JavaScript at end of body for optimized loading
     <script type="text/javascript" src="js/bin/materialize.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
     <script src="js/main.js"></script>
   </body>
 </html>
