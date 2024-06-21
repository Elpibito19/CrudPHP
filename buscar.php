<html>
<head>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <title>Crud php</title>
</head>

<body>
<div class="container">
			<h1>Crud PHP</h1>
			<div class="row">
				<div class="col-sm-4">
                    <form action="buscar.php" method="post">
						<label>Buscar</label>
						<input type="text" class="form-control input-sm" name="buscar" id="">
                        <input type="submit" class="btn" value="Buscar">
						<p></p>
						<a class="btn btn-primary" href="nuevo.php">Nuevo</a>
					</form>
				</div>
				
			</div>
		</div>

    <div class="container">
        <div class="row">
        <div class="col-sm-4">
        <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php 
            
            $buscar=$_POST['buscar'];
                require_once "Conexion.php";
                $c=new conectar();
                $conectar=$c->conexion();
                $sql="SELECT id,nombre,apellido FROM tablacrud WHERE nombre like '$buscar' '%' or apellido like '$buscar' '%'";
                $result=mysqli_query($conectar,$sql);

                while($mostrar=mysqli_fetch_row($result)):
            ?>
                    <tr>
                        <td><?php echo $mostrar['0']; ?></td>
                        <td><?php echo $mostrar['1']; ?></td>
                        <td><?php echo $mostrar['2']; ?></td>
                        <td><a href="editar.php?
                        id=<?php echo $mostrar['0']; ?> &
                        nombre=<?php echo $mostrar['1']; ?> &
                        apellido=<?php echo $mostrar['2']; ?> 
                        ">Editar</a></td>
                        <td><a href="eliminar.php ?
                        id=<?php echo $mostrar['0'];?> ">Eliminar</a></td>
                    </tr>

            <?php endwhile;?>
        </table>
    </div>
    </div>
    </div>









</body>
</html>