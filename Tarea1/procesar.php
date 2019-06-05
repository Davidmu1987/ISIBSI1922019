<?php

//texto simple
$ts = $_GET['textosimple'];
echo"texto simple: ".$ts;

//texto largo
$tl = $_GET['textolargo'];
echo "texto largo:".$tl;

//campos radiales
$r = $_GET['radial'];
echo "campos radiales:".$r;

//seleccion
$s = $_GET['seleccion'];
echo "campo seleccion:".$s"<br/>";

//rango
$rango = $_GET['rango'];
echo "campo rango:".$rango"<br/>";

//casillas
$casilla = $_GET['casilla'];
echo "casilla de verificacion:".$casilla "<br/>";

?>