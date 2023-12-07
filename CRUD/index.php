<html>
<head>
    <title>Registro de Alumnos</title>
</head>
<body> 

<?php 
    include("conexion.php");
    $sql="select * from alumnos ";
    $resultado=mysqli_query($conexion,$sql);
?>
<center>
    <h1 class="text-center" style="background-color:black; color:white">Registro de Alumnos</h1>
</center>
    <a href="agregar.php">Nuevo Alumno</a><br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nomaterias</th>
                <th>Acciones</th>
            </tr>
        </thead>
    <tbody>
        <?php
            while($filas=mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo $filas['id']?></td>
            <td><?php echo $filas['Nombre']?></td>
            <td><?php echo $filas['Nomaterias']?></td>
            <td>
                <?php echo "<a href='editar.php?Id=".$filas['id']."'>Editar</a>"; ?>
                <?php echo "<a href='eliminar.php?Id=".$filas['id']."'>Eliminar</a>"; ?>
            </td>
        </tr>
        <?php
         }
        ?>
    </tbody>
    </table>
    <?php
        mysqli_close($conexion);
    ?>

</body>
</html>
