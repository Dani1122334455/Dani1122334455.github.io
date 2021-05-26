var contador = 0;
function Saludar() {
	var nombre = document.getElementById("texto").value;
   document.getElementById("texto2").innerHTML = "Saludos a Mundo y a "+nombre;
   contador++;
   document.getElementById("saludos").innerHTML = "Se ha saludado: "+contador+" veces";
   
   
}
function cambiar(){
   document.querySelector("tr").style.backgroundColor = "red";

   document.querySelector("#td1").textContent = "Adios";

   document.querySelector(".tr1").createElement("td");
   document.createElement("button").addEventListener("click", Eliminar())
}
function Eliminar(){
   document.getElementById("Tabla2").removeChild("tbody");
}
function Info(){
   var li = document.getElementById("marvel-1");
   var atributos = li.getAttribute("data-comics");
   alert("Data Comic: "+atributos);

}
var restaurante={
   menu1:{
      plato1: "Macarrones",
      plato2: "Canelones",
      plato3: "Pizza"
   },
   menu2:{
      plato1: "Tofu",
      plato2: "Empanadas",
      plato3: "Patatas"
   },
   menu3:{
      plato1: "Sopa",
      plato2: "Entrecot",
      plato3: "Lomo"
   }
}
function EnmagatzemaCookie(cookie_name,cookie_value,exdays){
   var c = new Date();
   c.setTime(c.getTime()+ (exdays *24*60*60*1000));
   var expiracion= "expiracion" + c.toUTCString();
   document.cookie = cookie_name + "=" + cookie_value + ";" + expiracion + ";path=/";
}
function RecuperaCookie(cookie_name){
   var nombre = cookie_name + "=";
   var decodedCookie = decodeURIComponent(document.cookie);
   var co = decodedCookie.split(';');
   for(var y = 0; y <co.length; y++){
      var c = co[i];
      while(c.charAt(0)==''){
         c = c.substring(1);
      }
      if(c.indexOf(nombre)==0){
         return c.substring(nombre.length, c.length);
      }
   }
}
document.cookie ="Nombre1=Arnau, 2000, Barcelona";
document.cookie ="Nombre1=Illya, 2000, Russia";
document.cookie ="Nombre1=Dani, 2000 , Caldes";

document.write("Lista de personas"+document.cookie);
