<?php
    function Aprobacion($database){

            
            $consulta = "SELECT
                            v.id_ventas as Correlativo,
                            t.nombre as Tienda,
                            CONCAT(c.nombres,' ',c.apellidos) as Cliente,
                            p.nombre as Producto,
                            p.tarima as Tarima,
                            p.estiba as Estiba,
                            p.lote as Lote,
                            v.comentario as Comentario,
                            v.calificacion as Calificacion
                        FROM ventas v
                                INNER JOIN cliente c
                                ON v.id_cliente = c.id_cliente
                                INNER JOIN tienda t 
                                ON v.id_tienda = t.id_tienda
                                INNER JOIN producto p
                                ON v.id_producto = p.id_producto
                        ORDER BY Correlativo ASC LIMIT 100
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->execute();
            return $prepare;
        
    }

    function AprobacionPoblacion($database){

            
        $consulta = "SELECT SUM(Calificacion) as Total FROM ventas";
        $prepare = $database->prepare($consulta);
        $prepare->execute();
        $array = $prepare->fetch(PDO::FETCH_ASSOC);
        return $array["Total"];
    
}
?>

<div class="container p-5">
    <h1>CONSULTA 3</h1>
    <div class="row my-3">
        <div class="col-md-6 m-auto">
            <p class="text-center">
                ¿Cuál es la aprobación de la empresa por medio de nuestros servicios,
                comentarios de los pedidos que se hacen hacia los productos, tarimas y estibas
                de la ubicación del lote de dicho producto?
            </p>
        </div>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-md-4">
            <?php 
                $valor = AprobacionPoblacion($db);
                if($valor > 0 && $valor < 500){

                    $aceptacion = "bg-danger";

                }elseif ($valor > 400 && $valor < 700) {
                    
                    $aceptacion = "bg-warning";

                }elseif ($valor > 600 && $valor < 1001) {
                    
                    $aceptacion = "bg-success";

                }

                $procentaje = ($valor / 1000) * 100;
            ?>
            <span class="<?=$aceptacion?> p-3 text-white font-weight-bold">Aprobacion de la apoblacion del :
                <?=$procentaje."%"?></span>
        </div>
    </div>

    <table class="table datatables table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Correlativo</th>
                <th scope="col">Tienda</th>
                <th scope="col">Cliente</th>
                <th scope="col">Producto</th>
                <th scope="col">Tarima</th>
                <th scope="col">Estiba</th>
                <th scope="col">Lote</th>
                <th scope="col">Comentario</th>
                <th scope="col">Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            $array = Aprobacion($db);
                            $contador = 1;
                            while($row = $array->fetch(PDO::FETCH_ASSOC)){
                                
                                if ($row["Calificacion"] > 0 && $row["Calificacion"] < 5) {
                                    
                                    $aprobacion = "bg-danger";
                                }
                                elseif ($row["Calificacion"] > 4 && $row["Calificacion"] < 7) {
                                    
                                    $aprobacion = "bg-warning";
                                }elseif ($row["Calificacion"] > 6) {
                                    
                                    $aprobacion = "bg-success";
                                }else {
                                    
                                    $aprobacion = "bg-dark";
                                    
                                }

                                ?>
            <tr class="text-center">
                <td><?=$row["Correlativo"]?></td>
                <td><?=$row["Tienda"]?></td>
                <td><?=$row["Cliente"]?></td>
                <td><?=$row["Producto"]?></td>
                <td><?=$row["Tarima"]?></td>
                <td><?=$row["Estiba"]?></td>
                <td><?=$row["Lote"]?></td>
                <td><small><?=$row["Comentario"]?></small></td>
                <td class="<?=$aprobacion?> text-white"><?=$row["Calificacion"]?></td>
            </tr>
            <?php $contador++; } ?>
        </tbody>
    </table>
</div>