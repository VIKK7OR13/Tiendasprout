<html>

<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
  <title>baja de producto </title>
</head>


<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo from mercaderia
                        where codigo='$_REQUEST[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from mercaderia where codigo='$_REQUEST[codigo]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del producto";
  } else {
    echo "No existe un producto con ese codigo.";
  }
  mysqli_close($conexion);
  ?>
  <br><br>
  <a href="baja.html">borrar otro producto </a><br><br>
   <a href="inicio.php">volver al inicio </a><br><br>
  
</body>

</html>