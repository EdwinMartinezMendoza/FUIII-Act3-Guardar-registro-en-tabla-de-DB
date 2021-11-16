<?php 

include("con_db.php");

if (isset($_POST['articulos'])) {
    if (strlen($_POST['nombre_articulo']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['proveedor']) >= 1 && strlen($_POST['nombre_productos']) >= 1 && strlen($_POST['numero_de_serie']) >= 1) {
	    $name = trim($_POST['nombre_articulo']);
	    $price = trim($_POST['precio']);
	    $supplier = trim($_POST["proveedor"]);
		$product = trim($_POST["nombre_productos"]);
		$serie = trim($_POST["numero_de_serie"]);


	    $consulta = "INSERT INTO articulo(nombre_articulo, precio, proveedor, nombre_productos, numero_de_serie) VALUES ('$name','$price','$supplier','$product','$serie')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>