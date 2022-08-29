<?php 
require_once "conexion.php";
class mdlBusqueda{

    public static function mtdBuscar($busqueda){
        $mensaje = "";

            $objRespuesta = conexion::conectar()->prepare("SELECT * from usuario WHERE nombres LIKE :busqueda");
            $objRespuesta->bindParam(":busqueda",$busqueda);
            if ($objRespuesta->execute()){
                $mensaje = array();
                while($row = $objRespuesta->fetch()) {
                    $mensaje[] = array(
                        'nombres' => $row['nombres'],
                        'apellidos' => $row['apellidos'],
                        'direccion' => $row['direccion'],
                        'email' => $row['email'],
                        'contraseña' => $row['contraseña'],
                        'genero' => $row['genero'],
                        'fechaRegistro' => $row['fechaRegistro'],
                        'idRol' => $row['idRol'],
                        'idUsuario' => $row['idUsuario']
                    );
                }
            } else {
                $mensaje = "Busqueda no encontrada";
            }


        return $mensaje;

    }

}