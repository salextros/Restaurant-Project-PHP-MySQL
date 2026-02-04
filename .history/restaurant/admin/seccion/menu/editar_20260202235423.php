<?php
include("../../bd.php");

if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("SELECT * FROM tbl_menu WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    
// RECUPERAR DATOS (ASIGNAR AL FORUMULARIO)
    $nombre=$registro["nombre"];
    $ingredientes=$registro["ingredientes"];
    $foto=$registro["foto"];
    $precio=$registro["precio"];
}



include ("../../templates/header.php");
?>

<br/>
<div class="card">
    <div class="card-header">Menú de comida</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input type="text" 
                class="form-control" value="<?php echo $txtID;?>" name="txtID" id="txtID" aria-describedby="helpId" placeholder="" />
        </div>

           <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text"
                class="form-control" value="<?php echo $txtID;?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre"/>
           </div>

            <div class="mb-3">
                <label for="ingredientes" class="form-label">Ingredientes (Separados por comas):</label>
                <input type="text"
                    class="form-control" value="<?php echo $txtID;?>" name="ingredientes" id="ingredientes" aria-describedby="helpId" placeholder="Ingredientes" />
            </div>
             
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <img width="50" src="../../../images/menu/<?php echo $foto; ?>" />
                <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId" />
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text"
                    class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="precio" />
            </div>

                <button type="submit" class="btn btn-success">Agregar menú</button>
                <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include ("../../templates/footer.php");?>