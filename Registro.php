<?php include("Vista/template/cabecera.php");?>
<div class="scroll">
    <div class="container mt-3 mb-5 col-6">
        <div class="form-control bg-info bg-opacity-10 p-5">
            <form  class=" needs-validation  " novalidate>
                <div class="mb-3">
                    <label for="txtNombre" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="txtNombres" aria-describedby="emailHelp" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    <div class="invalid-feedback">
                        Por favor escriba un nombre.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="txtApellido" class="form-label">Apelldios</label>
                    <input type="text" class="form-control " id="txtApellidos" required>
                    <div class="invalid-feedback">
                        Por favor escriba un apellido.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="txtDireccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="txtDireccion" required>
                    <div class="invalid-feedback">
                        Por favor escriba una direccion.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="txt" class="form-label">Genero</label>
                    <select class="form-select bg-primary bg-opacity-10 " required aria-label="Default select example"
                        id="slGenero" required>
                        <option selected disabled value="">--Seleccionar--</option>
                        <option >Hombre</option>
                        <option >Mujer</option>
                        <option >Robot espacial con motor de lancha apache de 300 caballos de fuerzas</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor escoja una opcion valida.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="txtEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="txtEmail" required>
                    <div class="invalid-feedback">
                        Por favor escriba un correo electronico valido.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="txtContraseña" class="form-label">Contraseña</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="txtContraseña" required>
                        <!-- <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button> -->
                        <button class="input-group-text btn btn-primary" type="button" id="btnMostrarContraseña"><span class="fa fa-eye-slash icon"></span></button>
                    </div>
                    <div class="invalid-feedback">
                        Por favor escoja una contraseña.
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="btnRegistro">Registrar</button>
            </form>
        </div>

    </div>
</div>
<?php include("Vista/template/pie.php");?>