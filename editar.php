<?php
include("conexion.php");
$nombre = '';
$referencia = '';
$precio = '';
$peso = '';
$categoria = '';
$stock = '';

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

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $referencia = $_POST['referencia'];
  $precio = $_POST['precio'];
  $peso = $_POST['peso'];
  $categoria = $_POST['categoria'];
  $stock = $_POST['stock'];

  $query = "UPDATE producto set nombre = '$nombre', referencia = '$referencia',
  precio = '$precio',
  peso = '$peso',
  categoria = '$categoria',
  stock = '$stock'
   WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Producto actualizado';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre" required>
        </div><br>
        <div class="form-group">
          <input name="referencia" type="text" class="form-control" value="<?php echo $referencia; ?>" placeholder="Referencia" required>
        </div><br>
        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Precio" required>
        </div><br>
        <div class="form-group">
          <input name="peso" type="text" class="form-control" value="<?php echo $peso; ?>" placeholder="Peso" required>
        </div><br>
        <div class="form-group">
          <input name="categoria" type="text" class="form-control" value="<?php echo $categoria; ?>" placeholder="Categoria" required>
        </div><br>
        <div class="form-group">
          <input name="stock" type="text" class="form-control" value="<?php echo $stock; ?>" placeholder="Stock" required>
        </div><br>
        
        <button class="btn-success" name="update">
          Actualizar
      </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>