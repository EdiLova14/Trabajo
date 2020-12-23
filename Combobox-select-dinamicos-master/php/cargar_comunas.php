<?php 
require_once 'conexion.php';

function getVideos(){
  $pgsql = getConnect();
  $id = $_POST['id'];
  $query = "SELECT * FROM Comunas WHERE id_lista = $id";
  $respuesta = $pgsql->prepare($query);
  $respuesta->execute();
  $Comunas = '';
  while($f = $respuesta->fetchObject())
  	{
    $Comunas .='<option value="'.$f->nombre.'">'.$f->nombre.'</option>';
  	}
  return $Comunas;
}

echo getVideos();
