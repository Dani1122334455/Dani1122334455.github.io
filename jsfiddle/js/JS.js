var contador = 0;
function Saludar() {
	var nombre = document.getElementById("texto").value;
   document.getElementById("texto2").innerHTML = "Saludos a Mundo y a "+nombre;
   contador++;
   document.getElementById("saludos").innerHTML = "Se ha saludado: "+contador+" veces";
   
   
}
function cambiar(){
   document.querySelector("tr").style.backgroundColor = "red";
}