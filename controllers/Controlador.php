<?php
#------- LLAMADA A LA PLANTILLA -----
class MVCControlador{
    public function Templete(){
        include "views/plantilla.php";
    }

#------- INTERACCION USURARIO ----


    
    public function EnlacesPaginasControl(){
        if(isset($_GET ["action"]))
        {
            $enlacecontrol = $_GET ["action"];
        }
        else{
            $enlacecontrol = "inicio";

        }
        $Respuesta = EnlacesPaginas::EnlacesPaginasModel( $enlacecontrol);
        include $Respuesta;
    }

}
?>