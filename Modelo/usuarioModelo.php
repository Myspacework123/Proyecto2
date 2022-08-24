<?php

require_once "conexion.php";

class MdlUsuarios {

    public static function mdlRegistrarUsuarios($nombres,$apellidos,$direccion,$genero,$email,$contraseña){
        $mensaje = "";

        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO usuario (nombres, apellidos, direccion, email, contraseña, genero) values(:nombres,:apellidos	,:direccion,:email,:contraseña,:genero)");
            $objRespuesta->bindParam(":nombres",$nombres);
            $objRespuesta->bindParam(":apellidos",$apellidos);
            $objRespuesta->bindParam(":direccion",$direccion);
            $objRespuesta->bindParam(":email",$genero);
            $objRespuesta->bindParam(":contraseña",$email);
            $objRespuesta->bindParam(":genero",$contraseña);

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