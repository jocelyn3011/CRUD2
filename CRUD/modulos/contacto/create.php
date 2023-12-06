<?php 

if($_POST){
    $nombre=(isset($_POST['nombre'])?$_POST['nombre']:"");
    $nombre=(isset($_POST['telefono'])?$_POST['telefono']:"");
    $nombre=(isset($_POST['fecha'])?$_POST['fecha']:"");

    $stm=$conexion->prepare("INSERT INTO contactos(,id,nombre,telefono,fecha VALUES(NULL,:nombre,:telefono,:fecha)");
    $stm->bindParam(":nombre",$nombre);
    $stm->bindParam(":telefono",$telefono);
    $stm->bindParam(":fecha",$fecha);
    $stm->execute();

    header("location:index.php");
}

?>


<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR CONTACTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post"></form>
      <div class="modal-body">
        <label for="Nombre"></label>
        <input type="text" class="form-control" name="Nombre" value="" placeholder="Ingresa nombre">

        <label for="Telefono"></label>
        <input type="text" class="form-control" name="Telefono" value="" placeholder="Ingresa telefono">

        <label for="Fecha"></label>
        <input type="date" class="form-control" name="Fecha" value="" placeholder="Ingresa la fecha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>