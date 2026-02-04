<?php include ("../../templates/header.php"); ?>
<br/>

<div class="card">
    <div class="card-header"> Banners </div>
    <div class="card-body">

    <form action="" method="post">

    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo:</label>
        <input type="text"
            class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Escriba el titulo del banner"/>
    </div>
    
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <input type="text"
            class="form-control" name=descripcion id="descripcion" aria-describedby="helpId" placeholder="Escriba la descripción del banner"/>
    </div>
    

    </form>
        
    </div>
    <div class="card-footer text-muted"></div>
</div>





<?php include ("../../templates/footer.php"); ?>