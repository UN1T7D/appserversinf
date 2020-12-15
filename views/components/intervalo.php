<?php

function intervalo($inicio, $fin){
    switch ($fin) {
        case 1:
                $anio = $inicio;
                $inicio = $anio."-01-01";
                $fin = $anio."-01-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 2:
                $anio = $inicio;
                $inicio = $anio."-02-01";
                $fin = $anio."-02-29";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
                
            break;
        case 3:
                $anio = $inicio;
                $inicio = $anio."-03-01";
                $fin = $anio."-03-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 4:
                $anio = $inicio;
                $inicio = $anio."-04-01";
                $fin = $anio."-04-30";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 5:
                $anio = $inicio;
                $inicio = $anio."-05-01";
                $fin = $anio."-05-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 6:
                $anio = $inicio;
                $inicio = $anio."-06-01";
                $fin = $anio."-06-30";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 7:
                $anio = $inicio;
                $inicio = $anio."-07-01";
                $fin = $anio."-07-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 8:
                $anio = $inicio;
                $inicio = $anio."-08-01";
                $fin = $anio."-08-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 9:
                $anio = $inicio;
                $inicio = $anio."-09-01";
                $fin = $anio."-09-30";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 10:
                $anio = $inicio;
                $inicio = $anio."-10-01";
                $fin = $anio."-10-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 11:
                $anio = $inicio;
                $inicio = $anio."-11-01";
                $fin = $anio."-11-30";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;
        case 12:
                $anio = $inicio;
                $inicio = $anio."-12-01";
                $fin = $anio."-12-31";
                echo "
                    <div class='row mt-3 mb-3'>
                        <div class='col-md-4 bg-success text-white p-3'>
                            <span>Margen del ".$inicio.", hasta el ".$fin."</span>
                        </div>
                    </div>";
            break;

        
        default:
            # code...
            break;
        
        }
        /* return $inicio." ".$fin; */
}


function intervaloInicio($inicio, $fin){
    switch ($fin) {
        case 1:
                $anio = $inicio;
                $inicio = $anio."-01-01";
                return $inicio;
            break;
        case 2:
                $anio = $inicio;
                $inicio = $anio."-02-01";
                return $inicio;
                
            break;
        case 3:
                $anio = $inicio;
                $inicio = $anio."-03-01";
                return $inicio;
            break;
        case 4:
                $anio = $inicio;
                $inicio = $anio."-04-01";
                return $inicio;
            break;
        case 5:
                $anio = $inicio;
                $inicio = $anio."-05-01";
                return $inicio;
        case 6:
            break;
                $anio = $inicio;
                $inicio = $anio."-06-01";
                return $inicio;
            break;
        case 7:
                $anio = $inicio;
                $inicio = $anio."-07-01";
                return $inicio;
            break;
        case 8:
                $anio = $inicio;
                $inicio = $anio."-12-01";
                return $inicio;
            break;
        case 9:
                $anio = $inicio;
                $inicio = $anio."-09-01";
                return $inicio;
            break;
        case 10:
                $anio = $inicio;
                $inicio = $anio."-10-01";
                return $inicio;
                break;
        case 11:
                $anio = $inicio;
                $inicio = $anio."-11-01";
                return $inicio;
            break;
        case 12:
                $anio = $inicio;
                $inicio = $anio."-12-01";
                return $inicio;
            break;

        
        default:
            # code...
            break;
        
        }
        /* return $inicio." ".$fin; */
}


function intervaloFin($inicio, $fin){
    switch ($fin) {
        case 1:
                $anio = $inicio;
                $fin = $anio."-01-31"; 
                return $fin;
            break;
        case 2:
                $anio = $inicio;
                $fin = $anio."-02-29"; 
                return $fin;
                
            break;
        case 3:
                $anio = $inicio;
                $fin = $anio."-03-31"; 
                return $fin;
            break;
        case 4:
                $anio = $inicio;
                $fin = $anio."-04-30"; 
                return $fin;
            break;
        case 5:
                $anio = $inicio;
                $fin = $anio."-05-31"; 
                return $fin;
            break;
        case 6:
                $anio = $inicio;
                $fin = $anio."-06-30"; 
                return $fin;
            break;
        case 7:
                $anio = $inicio;
                $fin = $anio."-07-31"; 
                return $fin;
            break;
        case 8:
                $anio = $inicio;
                $fin = $anio."-08-31"; 
                return $fin;
            break;
        case 9:
                $anio = $inicio;
                $fin = $anio."-09-30"; 
                return $fin;
            break;
        case 10:
                $anio = $inicio;
                $fin = $anio."-10-31"; 
                return $fin;
            break;
        case 11:
                $anio = $inicio;
                $fin = $anio."-11-30"; 
                return $fin;
            break;
        case 12:
                $anio = $inicio;
                $fin = $anio."-12-31"; 
                return $fin;
            break;

        
        default:
            # code...
            break;
        
        }
        /* return $inicio." ".$fin; */
}

?>