<html>
<head>
  <title>Problema</title>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
  <title>programa para sprout</title>
</head>

<body>
<H1>"BIENVENIDO A SPROUT"</H1>

 <?php
 

 
 date_default_timezone_set('America/Argentina/Cordoba');
  echo "La fecha de hoy es: ";
  
  $fecha = date("d/m/y");
  echo $fecha;
  echo "<br>";
  echo "La hora actual es: ";
  $hora = date("H:i:s");
  echo $hora;
  echo "<br>";
  
  
 
  ?>
    
<br>
<br>
<br>

  <a href="pagina1.html">ALTA DE PRODUCTOS</a><br><br>
   <a href="pagina2.php">LISTADO</a><br><br>
    <a href="solovenci.php">SOLO LOS PRODUCTOS VENCIDOS</a><br><br>
     <a href="bajastock.html">BAJA DEL STOCK </a><br><br>
	<a href="consulta.html">BUSCAR PRECIO</a><br><br>
	 <a href="baja.html">BAJA DEL PRODUCTO</a><br><br>
	 
	 
	
  
</body>

</html>