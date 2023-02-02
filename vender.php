<?php include("conexion.php")?>
<?php include("<includes/header.php")?>

<div class="conteiner p-4">
    <div class="row">
        
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

                <?php
                $query = "SELECT * FROM invent";
                $result_tasks = mysqli_query($conn, $query);    

                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['referencia']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['peso']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['fecha_crea']; ?></td>
                    <td>
                    <a href="venta.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                        <i class="fa-regular fa-hand-heart"></i>
                    </a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <?php include("<includes/footer.php")?>