$(document).ready(function(){

    $("#btnRegistro").click(function (){

        var nombres = $("#txtNombres").val();
        var apellidos = $("#txtApellidos").val();
        var direccion = $("#txtDireccion").val();

        var genero = document.getElementById("slGenero");
        var selected = genero.options[genero.selectedIndex].text;
        var email = $("#txtEmail").val();
        var contraseña = $("#txtContraseña").val();


        var $objDatos = new FormData();
        $objDatos.append("nombres",nombres); 
        $objDatos.append("apellidos",apellidos); 
        $objDatos.append("direccion",nombres); 
        $objDatos.append("genero",selected); 
        $objDatos.append("email",email); 
        $objDatos.append("contraseña",contraseña); 

        $.ajax({
            
            url: "../Control/usuarioControl.php",
            type: "post",
            dataType: "json",
            data : $objDatos,
            cache: false,
            contentType: false,
            processData: false 
        }).done(function(respuesta){
            alert(respuesta);
        })
    })

})