<?php

require_once "../Modelo/listaModelo.php";

class ctrLista {



    public function mostrarUsuarios(){
        $objRespuesta = MdlLista::mdlMostrarUsuarios();
        echo json_encode($objRespuesta);
    }
}

$objRespuesta = new ctrLista(); 
$objRespuesta->mostrarUsuarios();