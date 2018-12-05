window.onload = function () {
    Cargar();    
}
function Registrar()
{
	var usuario = document.getElementById("asignarusuario").value;	
	 // Store
    localStorage.setItem("idusuario", usuario);

	

		
cargaDatos();
		

}

 
function Cargar()
{
    $('#datagrid').load('proyectos.php');   
}

function Limpiar()
{
    $("#asignarusuario").val(""); 

}