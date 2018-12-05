
$(document).ready(function () {
    
    $('#formularioAltaIssue').validate({ // initialize the plugin
        rules: {
            proyecto_seleccionado: {
                required: true
               
            },

            tipo: {
                required: true
               
            },
            prioridad: {
                required: true
               
            },
            nombre_build: {
                required: true,
               minlength: 5
            },
            coordina: {
                required: true,
            },
             asignada: {
                required: true,
            },
             fecha_prevista: {
                required: true,
            },
             fecha_inicio: {
                required: true,
            },
             fecha_final: {
                required: true,
            },
            descripcion_build: {
                required: true,
                minlength: 20
            }
        }
    });

});