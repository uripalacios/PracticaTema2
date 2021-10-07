<?php
//mostrar fichero
//buscar $_SERVER en el manual
$nombrepagina = $_GET;
echo $nombrepagina;
echo basename($_SERVER);

//mostrar la IP del equipo



// calcula la fecha


echo "<br>";
?>
<a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>
