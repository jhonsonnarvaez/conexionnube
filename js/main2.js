$(document).ready(function() {
    $("#form").on("hidden.bs.modal", function(ev) {
        $("#form")[0].reset();
    });
    $("#form").validate({
        rules: {
            nombre: "required",
            apellido: "required", 
            direccion: "required",     
            telefono: {
                required: true,
                maxlength: 10,
                minlength: 6
            },
            correo: {
                required: true,
                hotmail: true
            }
        },
        messages: {
            nombre: "Debe ingresar un nombre",
            apellido: "Debe ingresar un apellido", 
            direccion: "Debe ingresar una direccion", 
            telefono: {
                required: "Debe ingresar su numero de telefono",
                maxlength: "El numero ingresado debe tener 10 numeros",
                minlength: "Debe ingresar un numero correcto"
            },
            correo: {
                required: "Debe ingresar su correo",
                email: "Ingrese un correo valido"
            }
        }
        
    });
    jQuery.validator.addMethod("hotmail", function(value, element) {
        return this.optional(element) || /^.+@hotmail.com$/.test(value);
    }, "Solo correos de hotmail.com");
    $("#ingresar").on("click", function(ev) {
        ev.preventDefault();
        /* Act on the event */
        if ($("#form").valid()) {
            $.ajax({
                url: 'ingresar.php',
                type: 'post',
                data: {
                    'nombre_cliente': $('#nombre').val(),
                    'apellido_cliente': $('#apellido').val(),
                    'direccion_cliente': $('#direccion').val(),
                    'telefono_cliente': $('#telefono').val(),
                    'correo': $('#correo').val()
                }
            })
                    .done(function(msg) {
                $("#mensaje").html(msg);
            })
                    .fail(function(jHttp, textStatus, errorThrown) {
                $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
            })
                    .always(function() {
                $("#form")[0].reset();
                console.log("complete");
            });
        }
    });
});