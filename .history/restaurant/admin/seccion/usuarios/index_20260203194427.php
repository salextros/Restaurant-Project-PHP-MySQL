<?php
include ("../../bd.php");

$sentencia = $conexion->prepare("SELECT * FROM `tbl_usuarios`");
$sentencia->execute();
$lista_usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include ("../../templates/header.php"); 
?>
<br/>

<div class="card">
    <div class="card-header"><a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a></div>
    <div class="card-body">
       <div
        class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Pass</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($lista_usuarios as $registro){ ?>
                <tr class="">
                    <td>R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                    <td>R1C4</td>
                </tr>
                <?php} ?>

            </tbody>
        </table>
       </div>
       

    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php
include ("../../templates/footer.php"); 
?>