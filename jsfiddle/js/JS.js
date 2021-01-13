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