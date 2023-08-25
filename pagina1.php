<html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
  <title>consulta de productos</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

$venci = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];

$costo= $_REQUEST['costo'] ;
$venta = $_REQUEST['venta'] ;




if ($venta <  $costo)


{

echo "El precio de costo es menor o igual al precio de venta" ;
}
else{
	
	  mysqli_query($conexion, "insert into mercaderia(codigo,producto,vencimiento,costo,venta,stock) values 
                       ($_REQUEST[codigo],'$_REQUEST[producto]','$venci',$_REQUEST[costo],$_REQUEST[venta],$_REQUEST[stock])")
    or die("Problemas en el select" . mysqli_error($conexion));
	
	
	
	
	
	
	 echo "El producto fue cargado perfectamente."; ;

}


  mysqli_close($conexion);
  

  
  ?>
  <br>
  <br>
  <br>
  
  <a href="pagina1.html">cargar otro producto</a><br><br>
  <a href="inicio.php">volver al inicio</a><br><br>
</body>

</html>