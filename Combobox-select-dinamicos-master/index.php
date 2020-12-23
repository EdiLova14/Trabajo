<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario de votacion</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="page-header text-left">
      <h1>FORMULARIO DE VOTACION</small></h1>
    </div>
 <form action="php/guardar.php" method="post">
  <div class="form-group row">
    <label for="Nombre" class="col-sm-2 col-form-label">Nombre y Apellido</label>
    <div class="col-sm-10">
      <input type="Nombre_Apellido" class="form-control" id="Nombre" placeholder="Nombre y Apellido" name=Nombre required="">
    </div>
    <label for="Alias" class="col-sm-2 col-form-label">Alias</label>
    <div class="col-sm-10">
      <input type="Alias" class="form-control" id="Alias" placeholder="Alias" name=Alias pattern="^[A-Za-z0-9]+$" minlength="5">
    </div>
    <label for="Rut" class="col-sm-2 col-form-label">Rut</label>
    <div class="col-sm-10">
      <input type="Rut" class="form-control" id="Rut" placeholder="Rut" name=Rut required oninput="checkRut(this)">
    </div>
     <label for="Alias" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="Alias" placeholder="Email" name=Email required="">
    </div>
    <label for="Regiones" class="col-sm-2 col-form-label">Region</label>
    <div class="col-sm-10">
      <select id="Regiones" name="Regiones" class="form-control" required=""></select>
    </div>
    <label for="Comunas" class="col-sm-2 col-form-label">Comunas</label>
    <div class="col-sm-10">
      <select id="Comunas" name="Comunas" class="form-control" required=""></select>
    </div>
    <label for="Candidato" class="col-sm-2 col-form-label">Candidato</label>
    <div class="col-sm-10">
      <select class="form-control form-control-lg"name=Candidato required="">
      <option>Edinson Brito</option>
       <option>Luis Pastenes</option>
      </select>
    </div>
    <label for="Comunas" class="col-sm-2 col-form-label">Como se entero de Nosotros</label>
    <div class="col-sm-10">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name=Web>
      <label class="form-check-label" for="inlineCheckbox1">WEB</label>
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name=Tv>
      <label class="form-check-label" for="inlineCheckbox1">TV</label>
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name=Redes>
      <label class="form-check-label" for="inlineCheckbox1">Redes Sociales</label>
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"name=Amigos>
      <label class="form-check-label" for="inlineCheckbox1">Amigos</label>
    </div>

    <div class="col-md-4">
        <p><br><button id="enviar" type="submit" class="btn btn-default btn-block">Enviar</button></p>
      </div>
  </div>


</form>
  
   
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="js/index.js"></script>
  <script src="js/validarRUT.js"></script>
  <script src="js/checkbox.js"></script>
</body>
</html>