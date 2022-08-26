<?php

require_once "conexion.php";

class MdlUsuarios {

    public static function mdlRegistrarUsuarios($nombres,$apellidos,$direccion,$genero,$email,$contraseña){
        $mensaje = "";

        try {
            $objRespuesta = conexion::conectar()->prepare("Insert into usuario (nombres, apellidos, direccion, email, contraseña, genero, fechaRegistro) values(:nombres,:apellidos,:direccion,:email,:contra,:genero,:fechaRegistro)");

            $objRespuesta->bindParam(":nombres",$nombres);
            $objRespuesta->bindParam(":apellidos",$apellidos);
            $objRespuesta->bindParam(":direccion",$direccion);
            $objRespuesta->bindParam(":email",$email);
            $objRespuesta->bindParam(":contra",$contraseña);
            $objRespuesta->bindParam(":genero",$genero);
            $objRespuesta->bindParam(":fechaRegistro",date('y-m-d'));



            if ($objRespuesta->execute()){
                $mensaje = "Se ha guardado correctamente";
            } else {
                $mensaje = "Error No se ha guardado";
            }
    
        }catch(Exception $th){
            $mensaje = $th;
        }
    return $mensaje;
    }

}