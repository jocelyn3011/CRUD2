<html>
<head>
    <title>Agregar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $Nombre=$_POST['Nombre'];
            $Nomaterias=$_POST['Nomaterias'];
            

            include("conexion.php");
            $sql="insert into alumnos(Nombre,Nomaterias) values('".$Nombre."','".$Nomaterias."')";
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>alert('Los datos fueron ingresados correctamente a la base de datos'); location.assign('index.php');</script>";
            } else{
                echo "<script language='JavaScript'>alert('ERROR:Los datos no fueron ingresados correctamente a la base de datos'); location.assign('index.php');</script>";
            }
            mysqli_close($conexion);

        }else{
      ?>

    <h1>Nuevo Alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="Nombre"><br>
        <br>
        <label>No.Materias:</label>
        <input type="text" name="No.Materias"><br>
        <br>
        <input type="submit" name="enviar" value="Agregar">
        <a href="index.php">Regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>
