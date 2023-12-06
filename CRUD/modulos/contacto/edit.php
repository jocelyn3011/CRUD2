<?php

include("../../conexion.php");
if(isset($_GET['ID'])){
    $txtid-(isset($_GET['ID'])?$_GET['ID']:"");
    $stm-$conexion->prepare("SELECT * FROM contactos WHERE: id=:txid");
    $stm->bindparam(":txtid",$txtid);
    $stm->execute();
    $registro-$stm->fetch(PDO::FETCH_LAZY);
    $nombre=$registro['nombre'];
    $telefono=$registro['telefono'];
    $fecha=$registro['fecha'];
}

if($_POST){
    $txtid=(isset($_POST['txtid'])?$_POST['txtid']:"");
    $nombre=(isset($_POST['nombre'])?$_POST['nombre']:"");
    $nombre=(isset($_POST['telefono'])?$_POST['telefono']:"");
    $nombre=(isset($_POST['fecha'])?$_POST['fecha']:"");

    $stm=$conexion->prepare("UPDATE contactos SET(nombre=:nombre,telefono=:telefono,fecha=;fecha WHERE id=:txting)");
    $stm->bindParam(":nombre",$nombre);
    $stm->bindParam(":telefono",$telefono);
    $stm->bindParam(":fecha",$fecha);
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();

    header("location:index.php");
}


?>
<?php include("../../template/header.php"); ?>

<form action="" method="post">

      <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="Ingresa nombre">

      <input type="text" class="form-control" name="Nombre" value="<?php echo $nombre; ?>" placeholder="Ingresa nombre">
        <label for="Nombre"></label>

        <label for="Telefono"></label>
        <input type="text" class="form-control" name="Telefono" value="<?php echo $telefono; ?>" placeholder="Ingresa telefono">

        <label for="Fecha"></label>
        <input type="date" class="form-control" name="Fecha" value="<?php echo $fecha; ?>" placeholder="Ingresa la fecha">
      </div>
      <div class="modal-footer">
        <a href="index.php"> class="btn btn.danger">cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
</form>

<?php include("../../template/footer.php"); ?>

