<html>


  <head>
  <title>solo productos vencidos</title>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
 
</head>


<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,producto,vencimiento,costo,venta
                from mercaderia") or
    die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg = mysqli_fetch_array($registros)) {
	  
	


    
	
	
	
	
	
    $datetime1 = date_create(date('Y-m-d')); //fecha actual  
    $datetime2 = date_create($reg['vencimiento']); //fecha de db  
    $interval = date_diff($datetime1, $datetime2,false);  
    $dias = intval($interval->format('%R%a'));  

  
   	
    echo "<br>";
    
   

   if ($datetime1 > $datetime2)
   {
	       echo "<br>";
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Producto:" . $reg['producto'] . "<br>";
    echo "Vencimiento:" . $reg['vencimiento'] . "<br>";
    echo "Precio de Costo:" . $reg['costo'] . "<br>";
    echo "Precio de Venta:" . $reg['venta'] . "<br>";
    echo "<font color=\"red\">EL PRODUCTO ESTA VENCIDO - PELIGRO </font>";
	  
	   echo "<hr>";}
   else
	   {
	   echo "";  
    
	
  }}
  mysqli_close($conexion);
  ?>
  
  <a href="inicio.php">volver al inicio</a><br><br>
</body>

</html>