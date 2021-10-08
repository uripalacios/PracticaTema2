<h1>Ejercicio 1</h1>
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
echo date('y-m-d H:i:s', time());
echo "<p>";

//Muestra zona horaria y hora en Lisboa
//No aparecia Oporto en el listado de zonas horarias
date_default_timezone_set("Europe/Lisbon");
echo date('l d-m-y H:i:s',time());
echo date_default_timezone_get();
echo "<p>";
//Vuelvo a cambiar la hora del sistema
date_default_timezone_set("Europe/Madrid");

//Inicializa y muestra tu fecha de cumpleaños
$cumple = strtotime('04/30/96');
echo date('d/m/Y',$cumple);
echo "<p>";

//Calcular fecha y dia de la semana dentro de 60 dias
echo date('d/m/y l',strtotime("+ 60 days"));
echo "<p>";
echo "<br>";
?>
<a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>
