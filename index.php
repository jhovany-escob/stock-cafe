<?php include("conexion.php")?>
<?php include("<includes/header.php")?>

<div class="conteiner p-4">
    <div class="row">
        <div class="col-md-4">

        <!--MENSAJE-->
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control"
                        placeholder="Nombre producto" autofocus required>
                        
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="referencia" class="form-control"
                        placeholder="Referencia" autofocus required>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="precio" class="form-control"
                        placeholder="Precio" autofocus required>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="peso" class="form-control"
                        placeholder="Peso" autofocus required>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="categoria" class="form-control"
                        placeholder="Categoria" autofocus required>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="stock" class="form-control"
                        placeholder="Stock" autofocus required>
                    </div><br>
                    
                    
                    
                    <input type="submit" class="btn btn-success btn-block" name="guardar"
                    value="Guardar">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha Creación</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

    <?php include("<includes/footer.php")?>