<?php
include ("../../templates/header.php");?>

<br/>
<div class="card">
    <div class="card-header">Menú de comida</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

           <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre"/>
           </div>

            <div class="mb-3">
                <label for="ingredientes" class="form-label">Ingredientes (Separados por comas):</label>
                <input type="text"
                    class="form-control" name="ingredientes" id="ingredientes" aria-describedby="helpId" placeholder="Ingredientes" />
            </div>
             
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
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