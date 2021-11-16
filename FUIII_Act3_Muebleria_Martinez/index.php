<!DOCTYPE html>
<html>
<head>
	<title>Registrar Articulo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Articulos</h1>
    	<input type="text" name="nombre_articulo" placeholder="Nombre del articulo">
    	<input type="text" name="precio" placeholder="Precio">
		<input type="text" name="proveedor" placeholder="Nombre del proveedor">
		<input type="text" name="nombre_productos" placeholder="Nombre del producto">
		<input type="text" name="numero_de_serie" placeholder="Numero de serie">
    	<input type="submit" name="articulos">
    </form>
        <?php 
        include("articulo.php");
        ?>
</body>
</html>