<?php

$servidor="localhost";
$baseDatos="restaurante";
$usuario="root";
$contraseña="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$contraseña);
    echo "Conexión exitosa";

}catch(Exception $error){
    echo $error ->getMessage();
}

?>