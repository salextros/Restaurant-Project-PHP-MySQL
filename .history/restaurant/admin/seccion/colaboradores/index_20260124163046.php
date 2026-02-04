<?php
include ("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `tbl_colaboradores`");
$sentencia->execute();
$lista_colaboradores = $sentencia->fetchAll(PDO::FETCH_ASSOC);


include('../../templates/header.php');
?>  
<br/>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
        </div>
        <div class="card-body">

        <div
            class="table-responsive-sm">
            <table class="table table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>

                        <th scope="col">Info</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Linkedin</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($lista_colaboradores as $key => $value){ ?>
                    <tr class="">
                        <td scope="row"><?php echo $value["ID"];?></td>
                        <td><?php echo $value["titulo"];?></td>
                        <td><?php echo $value["foto"];?></td>
                        <td><?php echo $value["descripcion"];?></td>
                        <td><?php echo $value["linkfacebook"];?></td>
                        <td><?php echo $value["linkinstagram"];?></td>
                        <td><?php echo $value["linklinkedin"];?></td>
                    </tr>
                <?php } ?>
                   
                </tbody>
            </table>
        </div>
        



    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include ("../../templates/footer.php");  
?>
