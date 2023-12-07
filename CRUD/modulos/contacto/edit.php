<?php
    include("conexion.php");
?>

<html>
<head>
    <title>Editar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){

            $Id=$_POST['Id'];
            $Nombre=$_POST['Nombre'];
            $Nomaterias=$_POST['Nomaterias'];

            $sql="update alumnos set nombre='".$Nombre."',Nomaterias='".$nomaterias."' where Id='".$Id."'";
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>alert('Los datos se actualizaron correctamente'); location.assign('index.php');</script>";
            }else{
                "<script language='JavaScript'>alert('ERROR:Los datos no se actualizaron correctamente a la base de datos'); location.assign('index.php');</script>";
                mysqli_close($conexion);
            }

        }else{
            $id=$_GET['id'];
            $sql="select * from alumnos where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $Nombre=$fila["Nombre"];
            $Nomaterias=$fila["Nomaterias"];

            mysqli_close($conexion);
    ?>
    <h1>Editar Alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="Nombre" value="<?php echo $Nombre; ?>"><br>

        <label>Nomaterias</label>
        <input type="text" name="Nomaterias" value="<?php echo $Nomaterias; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="Enviar" value="Actualizar">
        <a href="index.php">Regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>
