<?php
include ("../../bd.php");
include ("../../templates/header.php");
?>
<br/>

<div class="card">
    <div class="card-header">Usuarios</div>
    <div class="card-body">

    <form action="" method="post">

        <div class="mb-3">
            <label for="usuario" class="form-label">Nombre de suario:</label>
            <input type="text"
              class="form-control" name="usuario" id="usuario" placeholder="Escribe el usuario"/>
        </div>

        
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password"
              class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escribe la contraseña">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email"
              class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escribe el correo">
        </div>

        <button type="submit" class="btn btn-success">Agregar usuario</button>
    </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>



<?php
include ("../../templates/footer.php"); 
?>
