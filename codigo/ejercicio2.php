<h1>Ejercicio 2</h1>
<?php
//Para verlo introducir una variable enla url
$recibida = $_GET["mivariable"];
//Muestro la variable
echo $recibida;
echo "<p>";
//Compruebo si es numerica
if(is_numeric($recibida)==1){
    echo "Es numérico";
    
    echo "<p>";
    if(is_integer($recibida)==1){
        echo "Es entero";
        
    }else{
        echo "Es float";
    }
}



echo "<br>";
?>
<a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>


