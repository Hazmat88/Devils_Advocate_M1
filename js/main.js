
clock();
input('ipaddA','subhda');
input('ipaddB','subhdb');
input('ipaddC','subhdc');
input('ipaddD','subhdd');


input('nameA','subhda');
input('nameB','subhdb');
input('nameC','subhdc');
input('nameD','subhdd');

//SHOW - HIDE THE 2ND ROW OF CAMERAS modules2



function input(inputi,buttoni) {

  var input = document.getElementById(inputi);
  input.addEventListener("keyup", function(event) {
  console.log(input);
          if (event.keyCode === 13) {

            //  event.preventDefault();
              document.getElementById(buttoni).click();
          }
  });
}

function clock() {

    function $(id){return document.getElementById(id)}

    function hms(){
        var today=new Date();
        var hrs=today.getHours(),mns=today.getMinutes(),scd=today.getSeconds();
        var str=(hrs<10?"0"+hrs:hrs)+":"+(mns<10?"0"+mns:mns)+":"+(scd<10?"0"+scd:scd);
        //var scdmini = ":"+(scd<10?"0"+scd:scd);// try custom Second
        $("clock_style").innerHTML=str;

        setTimeout(hms,1000);// réécriture toutes les 1000 millisecondes
    }

    hms();// lancement de la fonction
}


//FUNCTION IP ADRESS Abstration ex:paramater fot link titleA "link_titleA" Abstract in progress
// ADD variable for graphic iframe class than graphira
function ipadress(ipaddi,linktitle,nameI,cami,iframei) {
  //Variables
    var name = document.getElementById(nameI).value;

    var adressip =  document.getElementById(ipaddi).value;
    var fulladdressip = "192.168." + adressip + ":8080";
    var linktitleA = name +" - "+fulladdressip ;
  //Verification console.log
    console.log(fulladdressip);
    console.log(adressip);

  //Changement/Effects of transformations
    document.getElementsByClassName(cami)[0].src="http://192.168." + adressip + ":8080/video";
    //document.getElementsByClassName(cami)[0].setAttribute("class", "show");

  //iframe_area
    document.getElementsByClassName(iframei)[0].src="http://192.168." + adressip + ":8080";
    document.getElementsByClassName(cami)[0].style.display = "block";


  // Links Titles
    document.getElementById(linktitle).href="http://192.168." + adressip + ":8080";
    document.getElementById(linktitle).innerHTML = linktitleA;
    document.getElementById(linktitle).style.fontWeight = "900";
  //  if (typeof graphid === 'undefined' || graphid === null) {

  //  }else{
  //    document.getElementById(graphid).remove();
  //  }

    //document.getElementById("audio").src="http://192.168.1." + adressip + ":8080/video";
}
function debug(cardx){
  elem = document.querySelector("#"+cardx);
  return elem.childNodes.length;
}

function removegraph(graphid){
  document.getElementById(graphid).remove();
}

// FUNCTION TO ADD AN GRAPHIC IFRAME Need ABSTRACTION***
// ADD variable for graphic iframe class than graphira
function btn_gr(cardY,ipaddY,camY,graphid){

  var adressip =  document.getElementById(ipaddY).value;
  var fulladdressip = "192.168." + adressip + ":8080";

  var ifra = "<iframe id='"+graphid+"' name='Framename1' src='http://" + fulladdressip + "/sensors.html' width='100%'  height:'500px' class='framecs1'  scrolling ='auto'></iframe>";

  console.log(ifra);
  document.getElementsByClassName(camY)[0].style.display = "none";

  if( debug(cardY) != 0 ){
    console.log("retire");
      document.getElementById(graphid).remove();
      document.getElementsByClassName(camY)[0].style.display = "block";
      //console.log(document.querySelector("#"+cardY).firstElementChild);
      //document.querySelector("#"+cardY).firstElementChild.remove();
    //document.querySelector("#"+cardY).childNodes.remove();
    //document.querySelector("#"+cardY).remove();
  //  $("#"+ cardY).remove();
  }else{
    console.log("ajoute");
    $("#"+ cardY).append(ifra);
  }
  //document.getElementById('bra').innerHTML = ifra;

//  document.getElementById('bra').innerHTML = ifra;
   //document.getElementsByClassName(camY)[0].setAttribute("class", "show");
//console.log(document.getElementById('bra').getAttribute );

//  if( document.getElementById('bra').className != 'activator')
//  {
//
  //  document.getElementsByClassName(camY)[0].setAttribute("class", "show");
//  }

}



function btn_hide(inputi)
{
  document.getElementById(inputi).setAttribute("class", "row hide");
}

function btn_show(inputi)
{
  document.getElementById(inputi).setAttribute("class", inputi);
}

//BASIC FUNCTION FOR THE 2ND ROW OF TWO OTHER CAMERAS
function btn_show_fab(inputi)
{
  document.getElementById(inputi).setAttribute("class", "row show");
}
