<?php
include('../../templates/header.php');
?>
<br/>
<div class="card">
    <div class="card-header">Colaboradores</div>
    <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId">
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId"  placeholder="Titulo">
            </div>
            
            <div class="mb-3">
                <label for="descripción" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder=""/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder=""/>
            </div>
            
            

            













        </form> 
    </div>
    <div class="card-footer text-muted"></div>

    </div>
</div>

<?php 
include ("../../templates/footer.php");
?>
