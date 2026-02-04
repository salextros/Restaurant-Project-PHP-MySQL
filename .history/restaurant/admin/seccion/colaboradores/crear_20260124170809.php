<?php
include('../../templates/header.php');
?>
<br/>
<div class="card">
    <div class="card-header">Colaboradores</div>
    <div class="card-body">
        
    </div>
    <div class="card-footer text-muted"></div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId"/>
        </div>

    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text"
            class="form-control" name="titulo" id="titulo" aria-describedby="titulo" placeholder="Titulo"/>
    </div>
    



    </form> 
        

    </div>
</div>

<?php 
include ("../../templates/footer.php");
?>
