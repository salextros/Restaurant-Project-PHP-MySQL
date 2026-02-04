<?php 

include ("../../bd.php");

$sentencia = $conexion->prepare("SELECT * FROM comentarios");
$sentencia->execute();
$lista_comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include ("../../templates/header.php"); ?>


<br/>
<div class="card">
    <div class="card-header">Bandeja de Comentarios</div>
    <div class="card-body">

    <div
        class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($lista_comentarios as $comentario) { ?>
                <tr class="">
                    <td> <?php echo $registro["ID"];?> </td>
                    <td><?php echo $registro["nombre"];?></td>
                    <td><?php echo $registro["correo"];?></td>
                    <td><?php echo $registro["mensaje"];?></td>
                    <td>
                        <a name="" id="" class="btn btn-danger" 
                        href="index.php?txtID=<?php echo $registro["ID"];?>" 
                        role="button">Borrar</a>
                    </td>
                    
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
       
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include ("../../templates/footer.php"); ?>