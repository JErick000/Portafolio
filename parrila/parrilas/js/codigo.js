var arr_parrilla = ["p1", "p2", "p3"];

var arr_descripcion = ["Parrilla carbón", "Parrillas portables", "Parrillas a gas"];



//Método para cambiar las imágenes del elemento banner

var n = 0;



function Carrusel() {

    var parrillas = document.getElementById("parrillas");

    parrillas.src = "img/portatil/" + arr_parrilla[n] + ".jpg";

    n++;

    if (n >= arr_parrilla.length) n = 0;

    window.setTimeout("Carrusel()", 3000);

}

function Cambio1(prod){
    prod.style.borderRadius="0px";
    prod.style.borderColor="#ff0000"; //#ff0000
    prod.childNodes[0].style.transform="scale(0.8,0.8)";
    prod.childNodes[0].style.transition="all 0.5s ease";
    prod.childNodes[1].style.color="red";
}

function Cambio2(prod){
    prod.style.borderRadius="5px";
    prod.style.borderColor="#4B8B93"; //#4B8B93
    prod.childNodes[0].style.transform="scale(1,1)";
    prod.childNodes[0].style.transition="all 0.5s ease";
    prod.childNodes[1].style.color="blue"; //#4B8B93
}




window.onload=function(){
    Carrusel();

    var producto=document.getElementsByClassName("producto");  //imágenes de article
    for(let i=0; i<producto.length; i++){
        producto[i].onmouseover=function(){
            Cambio1(this);
        }

        producto[i].onmouseout=function(){
            Cambio2(this);
        }
    }

}
