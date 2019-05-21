
clock();
input('ipaddA','subhda');
input('ipaddB','subhdb');
input('nameA','subhda');
input('nameB','subhdb');


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

    //iframe_area
    document.getElementsByClassName(iframei)[0].src="http://192.168." + adressip + ":8080";

  // Links Titles
    document.getElementById(linktitle).href="http://192.168." + adressip + ":8080";
    document.getElementById(linktitle).innerHTML = linktitleA;
    document.getElementById(linktitle).style.fontWeight = "900";

    //document.getElementById("audio").src="http://192.168.1." + adressip + ":8080/video";
}

function btn_hide(inputi)
{
  document.getElementById(inputi).setAttribute("class", "hide");
}

function btn_show(inputi)
{
  document.getElementById(inputi).setAttribute("class", "show");
}
