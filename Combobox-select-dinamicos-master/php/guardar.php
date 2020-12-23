<?php

$Nombre = $_POST["Nombre"];
$Alias = $_POST["Alias"];
$Rut = $_POST["Rut"];
$Email = $_POST["Email"];
$Regiones = $_POST["Regiones"];
$Comunas = $_POST["Comunas"];
$Candidato = $_POST["Candidato"];
$Web = $_POST["Web"];
$Tv = $_POST["Tv"];
$Redes = $_POST["Redes"];
$Amigos = $_POST["Amigos"];


require_once 'conexion.php';

$pgsql = getConnect();


$query="insert into datos values ('$Nombre','$Alias','$Rut','$Email','$Regiones','$Comunas','$Candidato','$Web','$Tv','$Redes','$Amigos')";

$respuesta = $pgsql->prepare($query);
$respuesta->execute();






?>




