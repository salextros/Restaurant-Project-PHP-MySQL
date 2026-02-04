<?php

$servidor="localhost";
$baseDatos="restaurante";
$usuario="root";
$contraseña="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$contraseña);
    echo "Conexión exitosa TIME Codeman";

}catch(Exception $error){
    echo $error ->getMessage();
}

?>