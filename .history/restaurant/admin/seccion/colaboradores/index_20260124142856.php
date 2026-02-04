<?php
include ("../../bd.php");
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
                        <th scope="col">linkinstagram</th>
                        <th scope="col">linklinkedin</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        



    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include ("../../templates/footer.php");  
?>
