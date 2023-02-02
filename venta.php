<?php
include("conexion.php");

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM producto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $referencia = $row['referencia'];
    $precio = $row['precio'];
    $peso = $row['peso'];
    $categoria = $row['categoria'];
    $stock = $row['stock'];
  }else{
      echo "error dato no encontrado";
      
  }
}

if (isset($_POST['vent'])) {
  $id = $_GET['id'];
  $nombre = $_GET['nombre'];
  $stock= $_GET['stock'];
  $cantidad=$_POST['cantidad'];
  $resultado= $stock-$cantidad;
  $query = "UPDATE producto set 
  stock = '$resultado'
   WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Producto actualizado';
  $_SESSION['message_type'] = 'warning';
  header('Location: vender.php');
}



?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="venta.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre" required>
        </div><br>

        <div class="form-group">
          <input name="stock" type="text" class="form-control" value="<?php echo $stock; ?>" placeholder="Stock" disabled>
        </div><br>
       
        <div class="form-group">
          <input name="cantidad" type="text" class="form-control" placeholder="Cantidad" required>
        </div><br>
        
        <button class="btn-success" name="vent">
          Aceptar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>