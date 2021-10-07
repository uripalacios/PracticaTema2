<?php
//mostrar fichero
//buscar $_SERVER en el manual
$nombrepagina = $_SERVER['SCRIPT_NAME'];
echo basename($nombrepagina);
echo "<p>";

//mostrar la IP del equipo
$ipEquipo = $_SERVER['SERVER_NAME'];
echo $ipEquipo;
echo "<p>";

//Muestra el Path donde se esta ejecutando
$pathActual = $_SERVER['ORIG_PATH_INFO'];
echo $pathActual;
echo "<p>";

// Muestra la hora actual
$horaActual = date();
echo $horaActual;


echo "<br>";
?>
<a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>
