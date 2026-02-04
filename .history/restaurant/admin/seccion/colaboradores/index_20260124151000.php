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
                        <th scope="col">titulo</th>
                        <th scope="col">foto</th>

                        <th scope="col">descripcion</th>
                        <th scope="col">linkfacebook</th>
                        <th scope="col">linkinstagram</th>
                        <th scope="col">linklinkedin</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($lista_colaboradores as $key => $value){ ?>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>EL_CHEF</td>
                        <td>FOTO.jpg</td>
                        <td>cheft comida picante</td>
                        <td>www.pedro.com</td>
                        <td>hhtpp:</td>
                        <td>hhtpp:_1</td>
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
