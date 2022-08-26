$(document).ready(function(){



    $("#btnMostrarContraseña").click(function (){
        var input = document.getElementById("txtContraseña");
        if(input.type =="password"){
            input.type = "text";           
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            input.type = "password"; 
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    })



    $("#btnRegistro").click(function (){

        var validacion = false;

        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
        .forEach(function (form) {

              if (!form.checkValidity()) {
                // form.preventDefault()
                // form.stopPropagation()
                form.classList.add('was-validated')             
              } else {
                validacion = true;
              }

            if(validacion == true){
                var nombre = $("#txtNombres").val();
                var apellido = $("#txtApellidos").val();
                var direccion = $("#txtDireccion").val();

                var genero = document.getElementById("slGenero");
                var selected = genero.options[genero.selectedIndex].text;
                var email = $("#txtEmail").val();
                var contraseña = $("#txtContraseña").val();


                var objDatos = new FormData();
                objDatos.append("nombres",nombre); 
                objDatos.append("apellidos",apellido); 
                objDatos.append("direccion",direccion); 
                objDatos.append("genero",selected); 
                objDatos.append("email",email); 
                objDatos.append("contraseña",contraseña); 

                $.ajax({
            
                    url: "Control/usuarioControl.php",
                    type: "post",
                    dataType: "json",
                    data: objDatos,
                    cache: false,
                    contentType: false,
                    processData: false 
                }).done(function(respuesta) {
                    debugger;
                    alert(respuesta);
                })
            }
          })


        
    })






	
    // $(document).ready(function () {
    //     //CheckBox mostrar contraseña
    //     $('#ShowPassword').click(function () {
    //         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    //     });
    // });

    
}) 