<?php

class EnlacesPaginas{

    public function EnlacesPaginasModel($enlacesmodel){


        if( $enlacesmodel == "inicio"    || $enlacesmodel == "nosotros" || 
            $enlacesmodel == "servicios" || $enlacesmodel == "contactenos" ){

            $module = "views/modules/".$enlacesmodel.".php";
        }
        else if($enlacesmodel == "inicio" )
        {
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php";
        }
        return $module;

    }
}

?>