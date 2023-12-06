<?php

include("../../conexion.php");

$stm=$conexion->prepare("SELECT * FROM contactos");
$stm->execute();
$contactos=$stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['ID'])){
    $txtid-(isset($_GET['ID'])?$_GET['ID']:"");
    $stm-$conexion->prepare("DELETE FROM contactos WHERE: ID=:txid");
    $stm->bindParam(":ID",$txtid);
    $stm->execute();
    header("location:index.php");

}

?>

<?php include("../../template/header.php"); ?>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($contactos as $contacto){ ?>
            <tr class="">
                <td scope="row"><?php echo $contacto['ID'];?></td>
                <td scope="row"><?php echo $contacto['Nombre'];?></td>
                <td scope="row"><?php echo $contacto['Telefono'];?></td>
                <td scope="row"><?php echo $contacto['Fecha'];?></td>
                <td>
                <a href="editar.php?id=<?php echo $contacto['ID'];?>" class="btn btn-success">Editar</a>
                <a href="index.php?id=<?php echo $contacto['ID'];?>" class="btn btn-danger">Eliminar</a>


                </td>
            
            </tr>
    <?php } ?>
        </tbody>
    </table>
</div>

<?php include("create.php"); ?>

<?php include("../../template/footer.php"); ?>
