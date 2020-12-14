<?php


$vista = $_GET["view"];
$accion = $_GET["action"];
if (isset($vista)) {
    
    if ($vista == "menu") {
        require_once("views/components/menu.php");
        if (isset($accion)) {
            
            if ($accion == 1) {
                
                require_once("views/components/consulta1.php");
                
            }elseif ($accion == 2) {

                require_once("views/components/consulta2.php");
                
            }elseif ($accion == 3) {
                
                require_once("views/components/consulta3.php");
                
            }elseif ($accion == 4) {
                
                require_once("views/components/consulta4.php");
                
            }/* else{
                
                require_once("views/components/menu.php");
            } */

        }else{
            
            require_once("views/components/menu.php");
        }
    }else {
        require_once("views/components/inicio.php");
        
    }

}else {
    
    require_once("views/components/inicio.php");
    
}