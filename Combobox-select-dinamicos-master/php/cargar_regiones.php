<?php 
require_once 'conexion.php';

function getListasRep(){
  $pgsql = getConnect();
  $query = "SELECT * FROM Regiones";
  $respuesta = $pgsql->prepare($query);
  $respuesta->execute();
  $listas = '';
  while($f = $respuesta->fetchObject())
        {
            $listas .='<option value="'.$f->id.'"name="'.$f->nombre.'">'.$f->nombre.'</option>';
        }  return $listas;
}

echo getListasRep();