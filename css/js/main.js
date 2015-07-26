//$(document).ready(function() {
//    $("#form").on("hidden.bs.modal", function(ev) {
//        $("#form")[0].reset();
//    });
//    $("#form").validate({
//        rules: {
//            username: {
//                required: true
//            },
//            pass: {
//                required: true
//            }
//        },
//        messages: {
//            username: "Debe ingresar un usuario",
//            pass: {
//                required: "Ingrese una contraseña"
//            }
//        }
//    });
$(function() {
    $("#ingresar").on("click", function(ev) {
        var usu = $("#usuario").val();
        var pass = $("#contrasena").val();
        var area = $("#perfil").val();
        var url = 'procesar_login.php';
        var total = usu.length * pass.length * area.length;
//        ev.preventDefault();
        /* Act on the event */
//        if ($("#form").valid()) {
        if (total > 0) {
            $.ajax({
                url: url,
                type: 'post',
                data: 'usuario=' + usu + '&contrasena' + pass + '&perfil' + area,
                success: function(valor) {
                    if (valor == 'usuario') {
                        $("#mensaje").html('El usuario ingresado no existe').show(300).delay(3000).hide(300);
                        $("#usuario").focus();
                        return false;
                    } else if (valor == 'perfil') {
                        $("#mensaje").html('Usted no pertenece a ningun departamento').show(300).delay(3000).hide(300);
                        $("#perfil").focus();
                        return false;
                    } else if (valor == 'contrasena') {
                        $("#mensaje").html('Su contraseña es incorrecta').show(300).delay(3000).hide(300);
                        $("#contrasena").focus();
                        return false;
                    } else if (valor == 'Administrador') {
                        document.location.href = 'Administrador.php';
                    }
                    else if (valor == 'Usuario') {
                        document.location.href = 'Usuario.php';
                    }

                }
            });
            return false;


        } else {
            $("#mensaje").html('Complete todos los campos').show(300).delay(3000).hide(300);
        }
    });
});
