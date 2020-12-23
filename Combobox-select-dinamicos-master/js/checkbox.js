$('form').submit(function(e){
    // si la cantidad de checkboxes "chequeados" es cero o uno,
    // entonces se evita que se envíe el formulario y se
    // muestra una alerta al usuario
    if ($('input[type=checkbox]:checked').length <=1) {
        e.preventDefault();
        alert('Selecciona almenos dos valores en el checkbox');
    }
});