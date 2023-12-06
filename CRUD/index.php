
<?php include("template/header.php"); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nuevo
</button>

       <div class="p-5 mb-4 bg-light rounded-3">
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
        <tr class="">
                <td scope="row">29833</td>
                <td scope="row">Jos</td>
                <td scope="row">2102</td>
                <td scope="row">1312|1</td>
                <td>
                <a href="editar.php?id=<?php echo $contacto['ID'];?>" class="btn btn-success">Editar</a>
                <a href="index.php?id=<?php echo $contacto['ID'];?>" class="btn btn-danger">Eliminar</a>


                </td>
            
            </tr>
         
        </div>
       </div>

<?php include("template/footer.php"); ?>
   
