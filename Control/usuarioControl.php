<?php

require_once "../Modelo/usuarioModelo.php";

class ctrUsuarios {

    public $nombre;
    public $apellido;
    public $direccion;
    public $genero;
    public $email;
    public $contraseña;

    public function registrarUsuarios(){
        $objRespuesta = MdlUsuarios::mdlRegistrarUsuarios($this->nombre,$this->apellido,$this->direccion,$this->genero,$this->email,$this->contraseña);
        echo json_encode($objRespuesta);
    }
}

if (isset($_POST["nombres"],$_POST["apellidos"],$_POST["direccion"],$_POST["genero"],$_POST["email"],$_POST["contraseña"])) {

    $objUsuarios = new ctrUsuarios();
    $objUsuarios->nombre = $_POST["nombres"];
    $objUsuarios->apellido = $_POST["apellidos"];
    $objUsuarios->direccion = $_POST["direccion"];
    $objUsuarios->genero = $_POST["genero"];
    $objUsuarios->email = $_POST["email"];
    $objUsuarios->contraseña = $_POST["contraseña"];

    $objUsuarios->registrarUsuarios();

}

