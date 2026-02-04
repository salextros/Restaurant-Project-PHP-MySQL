<?php 

include ("../../bd.php"); 

$sentencia=$conexion->prepare("SELECT * FROM `tbl_banners`");
$sentencia->execute();
$lista_Banners= $sentencia->fetchAll(PDO::FETCH_ASSOC);

include ("../../templates/header.php"); 

?>

<br/>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>

    </div>
    <div class="card-body">
    
    <div
        class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Enlace</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>


            <?php 
            foreach($lista_Banners as $key => $value){ ?>
                    <tr class="">
                    <td scope="row">1</td>
                    <td><php print_r($value); ?></td>
                    <td>Restaurante del mejor sabor casero</td>
                    <td>#menu</td>
                    <td>
                        <a name="" id="" class="btn btn-info" href="editar.php" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Borrar</a>
                    </td>

            <?php } ?>   

                </tr>
            </tbody>
        </table>
    </div>

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include ("../../templates/footer.php"); ?>