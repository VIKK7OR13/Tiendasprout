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
$sactual = $_REQUEST['stockactual'];
$resta= $_REQUEST['stockdescontar'];
$total= $sactual - $resta;
$cod= $_REQUEST['codprod'];



  $registros = mysqli_query($conexion, "select codigo,producto,vencimiento,costo, venta, stock 
										from mercaderia");
  	
  if ($reg = mysqli_fetch_array($registros)) 
  {  
    mysqli_query($conexion, "update mercaderia
                            	set stock= $total
								where codigo='$_REQUEST[codprod]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó la baja de stock del producto";
  } else {
    echo "No hay productos para descontar.";
  }
  mysqli_close($conexion);
  
  
   
  
  
  ?>
  <br><br>
  <a href="bajastock.html">descontar stock de otro producto </a><br><br>
   <a href="inicio.php">volver al inicio </a><br><br>
  
</body>

</html>