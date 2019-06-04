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

   <body>

     <div class="row">

<!-- ******************** DATE *****************************-->
    <div class="col s12 m12">


          <div class="col s12 m6 grey darken-4 head0 valign center-block">

            <?php
              $date = strftime('%A %d %B %Y');
              $date_short = strftime('%d/%m/%y' );
              $heure = date("H:i:s");

              echo "<h3 class='date_style flow-text center-align'>$date</h3>";
              //echo "<h2 class='short_date'>$date_short</h2>";
             ?>

          </div>
<!-- ******************** CLOCK *****************************-->

          <div class="col s12 m6 grey darken-4 head0 valign center-wrapper ">
            <div class="clock valign center-block">
              <h2 id="clock_style" class="center-align flow-text"></h2>
           </div>

             <div class="fixed-action-btn menu0 ">
              <a class="btn-floating btn-large purme">
                <i class="large material-icons ">menu</i>
              </a>
              <ul>
                <li><a class="btn-floating"><i class="material-icons">insert_chart</i></a></li>
                <li><a onclick="btn_show_fab('modules2')" class="btn-floating "><i class="material-icons">add</i></a></li>
                <li><a onclick="btn_hide('modules2')" class="btn-floating "><i class="material-icons">remove</i></a></li>
                <li><a class="btn-floating"><i class="material-icons">file_download</i></a></li>
              </ul>
            </div>

          </div>
      </div>
</div>
<!-- ******************** FAB Floating button action *****************************
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
-->

<!-- ******************** Script_FAB *****************************-->
      <script>
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn');
      //Behaviour For Mobile & Tablette
      if(window.innerWidth <= 600 || window.innerWidth <= 900 ) {
        console.log("top");
        var instances = M.FloatingActionButton.init(elems, {
          direction: 'top',
        hoverEnabled: false
        });
      }//Behaviour For Desktop
      else {
        console.log("buttom");
      var instances = M.FloatingActionButton.init(elems, {
        direction: 'left',
      hoverEnabled: false
    });}

  });
</script>


<!-- ********************************************************-->
<!-- ******************** MODULES CAMS 1ST *****************************-->
<!-- *******************************************************-->

  <div class="row">

<!-- ******************** CARD01 *****************************-->
  <div class="col s12 m6">


    <div class="card grey darken-4" >

<!-- +++++******************* BUILD ABSTRACTION GRAPHIC IFRAME id=bra, function hide cam01, Insert Graphic Iframe onclick Button into Iframe place of the img cards so place of camera, details the iframe as not same dimension of camera so need to fix it too
IMPORTANT NEED FUNCTION TO CALLBACK ***********************-->
        <div id="bra" class="card-image waves-effect waves-block waves-light">
          <img id="browser_video" class="cam01 activator" alt="video" src="images/pamera.jpg" onclick="" alt="touch to view">
      <!--    <iframe name="Framename1" src="http://192.168.1.36:8080/" width="100%" height="100%"  class="frame-area_c2" scrolling ="auto">
          </iframe>
           <iframe name='Framename1' src='http://192.168.1.36:8080/sensors.html' width='100%' height='100%'   scrolling ='auto'></iframe>-->
        </div>


        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">


        <div class="input_A" id="inputA">
          <div class="row">

                <div class="input-field col m2 s12">
                    <textarea id="dropdown_BDA" class="materialize-textarea"></textarea>
                    <label for="dropdown_BDA">BD</label>
                </div>

                <div class="input-field col m4 s12">
                    <input  id="nameA" type="text" class="validate">
                    <label for="nameA">Name</label>
                </div>

                <div class="input-field col m4 s12">
                      <input  id="ipaddA" type="text" class="validate">
                      <label for="ipaddA" >IP</label>
                </div>

                <button id="subhda" class="waves-effect waves-teal btn-flat col m2 s12" onclick="ipadress('ipaddA','linktitleA','nameA','cam01','frame-area_c1');btn_hide('inputA')">
                  DONE
                </button>
          </div>
        </div>

        <i class="material-icons right whitecross">more_vert</i>
      </span>

      <p class="center-align "><a class="element_second btn"  id="linktitleA" href="#" target="_blank">This is a link</a></p>
  </div>


        <div class="card-reveal grey darken-4">
            <a class="element_second btn align-ce "   href="#" onclick="btn_show('inputA')">Back</a>

<!-- ++++++******************* BUILD BUTTON ABSTRACTION GRAPHIC IFRAME ***********************-->
            <a class="element_second btn align-ce "   href="#" onclick="btn_gr('cam01')">Graph</a>

          <span class="card-title whitecross">Card Title
            <i class="material-icons right whitecross">close</i></span>

        <!--  <iframe name='Framename1' src='http://192.168.1.36:8080/sensors.html' width='100%' height='100%'   scrolling ='auto'></iframe>-->
           <iframe name="Framename1" src="http://192.168.1.36:8080/" width="100%" height="100%"  class="frame-area_c1" scrolling ="auto">
          </iframe>
        </div>

    </div>
</div>

<!-- ******************** CARD02 *****************************-->

<div class="col s12 m6">
    <div class="card grey darken-4">
          <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam02 activator" alt="video" src="images/bumera.jpg" onclick="" alt="touch to view">
                        <!--<img class="activator" src="images/office.jpg"> -->
          </div>

          <div class="card-content">

            <span class="card-title activator grey-text text-darken-4">

              <div class="input_B" id="inputB">
                <div class="row">

                  <div class="input-field col m2 s12">
                    <textarea id="bdB" class="materialize-textarea"></textarea>
                    <label for="bdB">BD</label>
            <!--        <select>
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
  <label>BD</label>-->
                 </div>

                 <div class="input-field col m4 s12">
                     <input  id="nameB" type="text" class="validate">
                     <label for="nameB">Name</label>
                 </div>

                 <div class="input-field col m4 s12">
                       <input  id="ipaddB" type="text" class="validate">
                       <label for="ipaddB" >IP</label>
                 </div>

                  <button id="subhdb" class="waves-effect waves-teal btn-flat col m2 s12" onclick="ipadress('ipaddB','linktitleB','nameB','cam02','frame-area_c2');btn_hide('inputB')">DONE</button>
            </div>
          </div>
              <i class="material-icons right whitecross">more_vert</i>
            </span>

              <p class="center-align ">
                <a class="element_second btn align-ce "  id="linktitleB" href="#" target="_blank">This is a link</a>
              </p>
          </div>


          <div class="card-reveal grey darken-4">
            <a class="element_second btn align-ce "   href="#" onclick="btn_show('inputB')">Back</a>
            <span class="card-title whitecross">Card Title
              <i class="material-icons right whitecross">close</i>
            </span>

            <iframe name="Framename1" src="http://192.168.1.31:8080/" width="100%" height="100%"  class="frame-area_c2" scrolling ="auto">
            </iframe>
          </div>
        </div>
    </div>

</div>


<!-- ********************************************************-->
<!-- ******************** MODULES CAMS 2ND ROW *****************************-->
<!-- *******************************************************-->

  <div id="modules2" class="row hide">

<!-- ******************** CARD03 *****************************-->
  <div id="m2_C3" class="col s12 m6">


    <div class="card grey darken-4" >

        <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam03 activator" alt="video" src="images/bumera.jpg" alt="touch to view">
        </div>

        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">


        <div class="input_C" id="inputC">
          <div class="row">

                <div class="input-field col m2 s12">
                    <textarea id="dropdown_BDC" class="materialize-textarea"></textarea>
                    <label for="dropdown_BDC">BD</label>
                </div>

                <div class="input-field col m4 s12">
                    <input  id="nameC" type="text" class="validate">
                    <label for="nameC">Name</label>
                </div>

                <div class="input-field col m4 s12">
                      <input  id="ipaddC" type="text" class="validate">
                      <label for="ipaddC" >IP</label>
                </div>

                <button id="subhdc" class="waves-effect waves-teal btn-flat col m2 s12" onclick="ipadress('ipaddC','linktitleC','nameC','cam03','frame-area_c3');btn_hide('inputC')">
                  DONE
                </button>
          </div>
        </div>

        <i class="material-icons right whitecross">more_vert</i>
      </span>

      <p class="center-align "><a class="element_second btn"  id="linktitleC" href="#" target="_blank">This is a link</a></p>
  </div>


        <div class="card-reveal grey darken-4">
            <a class="element_second btn align-ce "   href="#" onclick="btn_show('inputC')">Back</a>
          <span class="card-title whitecross">Card Title
            <i class="material-icons right whitecross">close</i></span>

          <iframe name="Framename3" src="http://192.168.1.32:8080/" width="100%" height="100%"  class="frame-area_c3" scrolling ="auto">
          </iframe>
        </div>

    </div>
</div>

<!-- ******************** CARD04 *****************************-->

<div id="m2_C4" class="col s12 m6">
    <div class="card grey darken-4">
          <div class="card-image waves-effect waves-block waves-light">
            <img id="browser_video" class="cam04 activator" alt="video" src="images/pamera.jpg" onclick="" alt="touch to view">
                        <!--<img class="activator" src="images/office.jpg"> -->
          </div>

          <div class="card-content">

            <span class="card-title activator grey-text text-darken-4">

              <div class="input_D" id="inputD">
                <div class="row">

                  <div class="input-field col m2 s12">
                    <textarea id="bdD" class="materialize-textarea"></textarea>
                    <label for="bdD">BD</label>
                 </div>

                 <div class="input-field col m4 s12">
                     <input  id="nameD" type="text" class="validate">
                     <label for="nameD">Name</label>
                 </div>

                 <div class="input-field col m4 s12">
                       <input  id="ipaddD" type="text" class="validate">
                       <label for="ipaddD" >IP</label>
                 </div>

                  <button id="subhdd" class="waves-effect waves-teal btn-flat col m2 s12" onclick="ipadress('ipaddD','linktitleD','nameD','cam04','frame-area_c4');btn_hide('inputD')">DONE</button>
            </div>
          </div>
              <i class="material-icons right whitecross">more_vert</i>
            </span>

              <p class="center-align ">
                <a class="element_second btn align-ce "  id="linktitleD" href="#" target="_blank">This is a link</a>
              </p>
          </div>


          <div class="card-reveal grey darken-4">
            <a class="element_second btn align-ce "   href="#" onclick="btn_show('inputD')">Back</a>
            <span class="card-title whitecross">Card Title
              <i class="material-icons right whitecross">close</i>
            </span>

            <iframe name="Framename4" src="http://192.168.1.31:8080/" width="100%" height="100%"  class="frame-area_c4" scrolling ="auto">
            </iframe>
          </div>
        </div>
    </div>

</div>


     <JavaScript at end of body for optimized loading></JavaScript>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
     <script type="text/javascript" src="js/bin/materialize.min.js"></script>
     <script src="js/main.js"></script>
     <script>
     $( document ).ready(function() {
console.log( "document loaded" );
});
     </script>

   </body>
 </html>
