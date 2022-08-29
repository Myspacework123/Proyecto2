<?php include("Vista/template/cabecera.php");?>

<div class="container mb-5 ">

    <div class="col-md-12">
        <form class="form-inline my-2 my-lg-0">
            <input id="txtBusqueda" class="form-control mr-sm-2" type="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="button" id="btnBuscar">Search</button>
        </form>
        <div class="card my-4" id="task-result">
            <div class="card-body">
                <!-- SEARCH -->
                <ul id="container"></ul>
            </div>
        </div>

        <table class="table table-bordered table-hover table-striped bg-light">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Direccion</td>
                    <td>Email</td>
                    <td>Contraseña</td>
                    <td>Gerno</td>
                    <td>FechaRegistro</td>
                    <td>idRol</td>
                    <td></td>

                </tr>
            </thead>
            <tbody id="usuarios"></tbody>
        </table>
    </div>
</div>
</div>
</div>
<?php include("Vista/template/pie.php");?>