<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <title>Nuevo</title>
</head>

<body>
    
    <div class="container">
		<h1>Crud PHP</h1>
			<div class="row">
				<div class="col-sm-4">
        <form action="agregar.php" method="post">
            <table>
                <tr>
                    <td><h4>Ingresa sus datos</h4></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido" id="apellido"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Guardar"></td>
                    <td><a class="btn btn-danger" href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
    </div>
</body>
</html>