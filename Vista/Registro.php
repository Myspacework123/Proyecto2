<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='Css/main.css'>
    <script src='Js/main.js'></script>
</head>
<body>
    
    <div class="container mt-3">
        <div class="form-control ">
        <form action="">
            <div class="mb-3">
              <label for="txtNombre" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="txtNombres" aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apelldios</label>
                <input type="text" class="form-control" id="txtApellidos">
            </div>

            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="txtDireccion">
            </div>

            <div class="mb-3">
                <label for="txt" class="form-label">Genero</label>
                <select class="form-select" aria-label="Default select example" id="slGenero">
                    <option selected>--Seleccionar--</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    <option value="3">Robot espacial con motor de lancha apache de 300 caballos de fuerzas</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="txtEmail">
            </div>

            <div class="mb-3">
              <label for="txtContraseña" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="txtContraseña" required>
            </div>
            <button type="button" class="btn btn-primary" id="btnRegistro">Registrar</button>
          </form>
        </div>
        
    </div>


</body>
</html>