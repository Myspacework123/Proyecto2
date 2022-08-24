<?php

class  conexion{

    public static function conectar(){
        $server = "localhost";
        $usuario = "root";
        $password = "";
        $db = "proyecto";

        try {

            $objConexion = new PDO('mysql:host='.$server.';dbname='.$db.';',$usuario,$password);
            $objConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $th){
            $objConexion = $th;
        }

        return $objConexion;
    }

}