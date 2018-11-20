<?php
#------- LLAMADA A LA PLANTILLA -----
class MVCControlador{
    public function Templete(){
        include "views/plantilla.php";
    }

#------- INTERACCION USURARIO ----


    
    public function EnlacesPaginasControl(){
        $enlacecontrol = $_GET["action"];
        $Respuesta = EnlacesPaginas::EnlacesPaginasModel( $enlacecontrol);
        include $Respuesta;
    }

}
?>