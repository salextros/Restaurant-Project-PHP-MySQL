<?php

if($_POST){

    print_r($_POST);
    //include("../../bd.php");
    //INSERT INTO `tbl_testimonios` (`ID`, `opinion`, `nombre`) VALUES (NULL, 'Muy rico', 'TIME Codeman');
    $sentencia=$conexion->prepare("INSERT INTO `tbl_testimonios` (`ID`, `opinion`, `nombre`) VALUES (NULL, 'Muy rico', 'TIME Codeman');");

    $sentencia->execute();
}




include ("../../templates/header.php"); ?>

<br/>
<div class="card">
    <div class="card-header">
    Testimonios
    </div>
    <div class="card-body">
     <form action="" method="post">

     <div class="mb-3">
        <label for="" class="form-label">Opinión:</label>
        <input type="text" class="form-control" name="opinion" id="opinion" aria-describedby="helpId" placeholder="opinion"/>
     </div>

     <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre"/>

     </div>
       <button type="submit" class="btn btn-success">Agregar testimonios</button>
       <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

     </form>


    </div>
    <div class="card-footer text-muted">

    </div>
</div>



<?php include ("../../templates/footer.php"); ?>