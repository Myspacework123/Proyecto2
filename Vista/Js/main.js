$(document).ready(function(){

    console.log('jquery is working!');
    mostrarUsuarios();
    $('#task-result').hide();

// Mostrar contraseña

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


// Registro de Usuarios 

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

// Listado de usuarios
    function mostrarUsuarios() {

        $.ajax({          
            url: "Control/listaControl.php",
            type: "GET",
            dataType: "json"

        }).done(function(respuesta) {
            const q = JSON.stringify(respuesta);
            const tasks = JSON.parse(q);
            
            let template = '';
            
            tasks.forEach(task => {
                template += `
                        <tr taskId="${task.id}">
                            <td>${task.idUsuario}</td>
                            <td>${task.nombres}</td>
                            <td>${task.apellidos}</td>
                            <td>${task.direccion}</td>
                            <td>${task.email}</td>
                            <td>${task.contraseña}</td>
                            <td>${task.genero}</td>
                            <td>${task.fechaRegistro}</td>
                            <td>${task.idRol}</td>
                            <td>
                            <button class="btn btn-warning text-light ">
                            <i class="fa fa-eraser"></i> 
                            </button>
                            </td>
                        </tr>
                      `
              });
              $('#usuarios').html(template);
        })
      }

    //busquedas

    $("#btnBuscar").click(function(){
        alert("dxa");
        var busqueda = $("#txtBusqueda").val();
        var objDato = new FormData();
        objDato.append("busqueda",busqueda); 

        $.ajax({
                    url: "Control/busquedaControl.php",
                    type: "post",
                    dataType: "json",
                    data: objDato,
                    cache: false,
                    contentType: false,
                    processData: false 

        }).done(function(respuesta) {
            const q = JSON.stringify(respuesta);
            const tasks = JSON.parse(q);
            
            let template = '';
            tasks.forEach(task => {
                template += `
                        <tr taskId="${task.id}">
                            <td>${task.idUsuario}</td>
                            <td>${task.nombres}</td>
                            <td>${task.apellidos}</td>
                            <td>${task.direccion}</td>
                            <td>${task.email}</td>
                            <td>${task.contraseña}</td>
                            <td>${task.genero}</td>
                            <td>${task.fechaRegistro}</td>
                            <td>${task.idRol}</td>
                            <td>
                            <button class="btn btn-warning text-light ">
                            <i class="fa fa-eraser"></i> 
                            </button>
                            </td>
                        </tr>
                      `
              });
              $('#usuarios').html(template);
        })
    })

    // $('#search').keyup(function() {
    //     if($('#search').val()) {
    //       let search = $('#search').val();
    //       $.ajax({
    //         url: 'task-search.php',
    //         data: {search},
    //         type: 'POST',
    //         success: function (response) {
    //           if(!response.error) {
    //             let tasks = JSON.parse(response);
    //             let template = '';
    //             tasks.forEach(task => {
    //               template += `
    //                      <li><a href="#" class="task-item">${task.name}</a></li>
    //                     ` 
    //             });
    //             $('#task-result').show();
    //             $('#container').html(template);
    //           }
    //         } 
    //       })
    //     }
    //   });
    
    //   $('#task-form').submit(e => {
    //     e.preventDefault();
    //     const postData = {
    //       name: $('#name').val(),
    //       description: $('#description').val(),
    //       id: $('#taskId').val()
    //     };
    //     const url = edit === false ? 'task-add.php' : 'task-edit.php';
    //     console.log(postData, url);
    //     $.post(url, postData, (response) => {
    //       console.log(response);
    //       $('#task-form').trigger('reset');
    //       fetchTasks();
    //     });
    //   });
    



}) 