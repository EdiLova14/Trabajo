$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_regiones.php'
  })
  .done(function(listas_rep){
    $('#Regiones').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las Regiones')
  })

  $('#Regiones').on('change', function(){
    var id = $('#Regiones').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_comunas.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#Comunas').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar Las comunas')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Region: ' + $('#Regiones option:selected').text() +
    ' Comuna: ' + $('#Comunas option:selected').text()

    $('#resultado1').html(resultado)
  })

})