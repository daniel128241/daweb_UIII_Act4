<?php 

include("bd.php");

if (isset($_POST['cliente'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['email']) >= 1 
	&& strlen($_POST['years']) >= 1 && strlen($_POST['cel']) >= 1) {
		$name = $_POST['name'];
	    $lastname = $_POST['lastname'];
	    $correo = $_POST['email'];
	    $edad = $_POST['years'];
	    $cel = $_POST['cel'];
	    $fechareg = date("d/m/y");
		$query = "INSERT INTO cliente(nombre, apellido, correo, edad, telefono, fecha_reg) 
		VALUES ('$name','$lastname','$correo','$edad','$cel','$fechareg')";
		$result = mysqli_query($conex, $query);
		if($result){
			Header("Location: index.php");
			
		}else {
		}
	}
}
?>