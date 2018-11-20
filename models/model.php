<?php

class EnlacesPaginas{

    public function EnlacesPaginasModel($enlacesmodel){


        if( $enlacesmodel == "inicio"    || $enlacesmodel == "nosotros" || 
            $enlacesmodel == "servicios" || $enlacesmodel == "contactenos" ){

            $module = "views/modules/".$enlacesmodel.".php";
        }
        return $module;

    }
}

?>