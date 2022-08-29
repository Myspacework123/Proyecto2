<?php

require_once "conexion.php";

class MdlLista {

    public static function mdlMostrarUsuarios(){

        try {

            $objRespuesta = conexion::conectar()->prepare("Select * from usuario");
            $mysqli = new mysqli("localhost", "root", "", "proyecto");
            $query = "select * from usuario";
            $result = $mysqli->query($query);

            if($result){
                $json = array();
                while ($row = mysqli_fetch_array($result)){
                    $json[] = array(
                        
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
            }else {
                $json = "Error No se ha guardado";
            }

        } catch(Exception $th) {
            $json = $th;
        }
        return $json;
    }
}