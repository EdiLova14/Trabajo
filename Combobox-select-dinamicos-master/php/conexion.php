<?php

function getConnect()
{
    //PREVINIENDO ERRORES
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    /*DEFINIENDO PARAMETROS DE CONEXION*/

    $arg = 'pgsql:dbname=Trabajo;host=localhost;port=5432';

    $usuario = 'postgres';
    $pass = 'root';

    //Estableciendo la conexion
    
    $mbd = new PDO($arg, $usuario, $pass) or die('Falló la conexion');
    //Retorno del objeto de la conexion
    return $mbd;
}
?>