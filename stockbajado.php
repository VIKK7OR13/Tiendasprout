<html>

<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
  <title>baja de stock </title>
</head>


<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");


  $registros = mysqli_query($conexion, "select codigo,producto,vencimiento, costo, venta, stock
                        from mercaderia where codigo='$_REQUEST[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
  
	echo "<br>";
	echo "Producto:  " . $reg['producto'] . "<br>";
	echo "Stock:  " . $reg['stock'] . "<br>";
	echo "codigo del producto:  " . $reg['codigo'] . "<br>";
   
    }
   else {
    echo "No existe el producto ingresado con ese codigo."; 
	echo "<br>";
	echo "PELIGRO";
	echo "<br>";
	echo "regrese atras, no cargue el formulario.";
  }
  mysqli_close($conexion);
  

    ?>

    <form action="bajastock.php" method="post">
	 Ingrese el codigo del producto:
      <input type="text" name="codprod" value="<?php echo $reg['codigo'] ?>">
	  <br>
      Ingrese el stock actual:
      <input type="text" name="stockactual" value="<?php echo $reg['stock'] ?>">
      <br>
	  Ingrese el stock a descontar:
      <input type="text" name="stockdescontar">
      <input type="submit" value="Modificar">
    </form>


	
  <br><br>
  <a href="bajastock.html">descontar stock de otro producto </a><br><br>
   <a href="inicio.php">volver al inicio </a><br><br>
  
</body>

</html>