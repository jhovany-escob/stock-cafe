<?php

include('conexion.php');

if (isset($_POST['guardar'])) {

  $nombre = $_POST['nombre'];
  $referencia = $_POST['referencia'];
  $precio = $_POST['precio'];
  $peso = $_POST['peso'];
  $categoria = $_POST['categoria'];
  $stock = $_POST['stock'];
  $query = "INSERT INTO producto(nombre, referencia,precio,peso,categoria,stock) 
  VALUES ('$nombre', '$referencia','$precio','$peso','$categoria','$stock')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }


  $_SESSION['message'] = 'Producto creado';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>