<html>

  <head>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
  <title>consulta de productos </title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,producto,vencimiento, costo, venta, stock
                        from mercaderia where producto='$_REQUEST[producto]' or codigo='$_REQUEST[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
  
	echo "<br>";
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Producto:" . $reg['producto'] . "<br>";
    echo "Vencimiento:" . $reg['vencimiento'] . "<br>";
    echo "Precio de Costo: $ " . $reg['costo'] . "<br>";
    echo "Precio de Venta: $ " . $reg['venta'] . "<br>";
	echo "Stock:  " . $reg['stock'] . "<br>";
    
    }
   else {
    echo "No existe el producto ingresado con esa denominacion.";
  }
  mysqli_close($conexion);
  
    echo "<br>";
  echo "<br>";
  ?>
   <a href="consulta.html">volver al buscar </a><br><br>
   <a href="inicio.php">volver al inicio </a><br><br>
</body>

</html>