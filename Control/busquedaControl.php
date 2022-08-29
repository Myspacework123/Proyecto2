<?php

require_once "../Modelo/busquedaModelo.php";

class ctrBuscaqueda {
    public $busqueda;

    public function buscarUsuario(){
        $objRespuesta = mdlBusqueda::mtdBuscar($this->busqueda);
        echo json_encode($objRespuesta);
    } 
}

if (isset($_POST["busqueda"])){
    $objRespuesta = new ctrBuscaqueda();
    $objRespuesta->busqueda = $_POST["busqueda"];
    $objRespuesta->buscarUsuario();
}
