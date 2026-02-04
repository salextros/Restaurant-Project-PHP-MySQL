<?php
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM  `tbl_menu`");
$sentencia->execute();
$lista_menu = $sentencia->fetchAll(PDO::FETCH_ASSOC);

include ("../../templates/header.php");?>
<br/>

<div class="card">
    <div class="card-header">Menú de comida</div>
    <div class="card-body">

    <div
        class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col">foto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <tr class="">
                    
                    <?php foreach($lista_menu as $registro){ ?>

                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td> <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $value["ID"];?>" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $value["ID"];?>" role="button">Borrar</a>
                        </td>
                <?php } ?>        
                </tr>

            </tbody>
        </table>
    </div>
    
       
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include ("../../templates/footer.php");?>