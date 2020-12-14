<?php

    function ProductoPorMes($database, $form){

        if ($form == "" || empty($form) || $form == NULL) {
            
            $consulta = "SELECT 
                                    CONCAT(c.nombres,' ',c.apellidos) as Cliente,
                                    p.id_producto as Correlativos,
                                    p.nombre as Producto, 
                                    p.categoria as Categoria ,
                                    COUNT(p.id_producto) as Ventas_Realizadas,
                                    p.precio as Precio_Mercado,
                                    ROUND(SUM(v.unidades)) as Unidades,
                                    (p.precio*(SUM(v.unidades)))as Ventas_Total,
                                    v.fecha_de_compra
                            FROM ventas v
                            INNER JOIN tienda  t
                            ON
                                v.id_tienda = t.id_tienda
                            INNER JOIN cliente c
                            ON
                                v.id_cliente = c.id_cliente
                            INNER JOIN producto p
                            ON
                                v.id_producto = p.id_producto
                            WHERE v.fecha_de_compra between '2020-11-01' AND '2020-11-31' 
                            GROUP BY p.id_producto 
                            ORDER BY Unidades DESC
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->execute();
            return $prepare;
        }else{
            $inicio = $form["inicio"];
            $fin = $form["fin"];
            
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
            $consulta = "SELECT 
                                CONCAT(c.nombres,' ',c.apellidos) as Cliente,
                                p.id_producto as Correlativos,
                                p.nombre as Producto, 
                                p.categoria as Categoria ,
                                COUNT(p.id_producto) as Ventas_Realizadas,
                                p.precio as Precio_Mercado,
                                ROUND(SUM(v.unidades)) as Unidades,
                                (p.precio*(SUM(v.unidades)))as Ventas_Total,
                                    v.fecha_de_compra
                        FROM ventas v
                        INNER JOIN tienda  t
                        ON
                            v.id_tienda = t.id_tienda
                        INNER JOIN cliente c
                        ON
                            v.id_cliente = c.id_cliente
                        INNER JOIN producto p
                        ON
                            v.id_producto = p.id_producto
                        WHERE v.fecha_de_compra between :inicio AND :fin
                        GROUP BY p.id_producto 
                        ORDER BY Unidades DESC
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->bindParam(":inicio", $inicio, PDO::PARAM_STR);
            $prepare->bindParam(":fin", $fin, PDO::PARAM_STR);
            $prepare->execute();
            return $prepare;
        }

    }




?>

<div class="container container-query p-5">
    <h1>CONSULTA 1</h1>
    <!--  -->
    <div class="row my-3">
        <div class="col-md-6 m-auto">
            <p class="text-center">
                ¿Qué tipo de producto es más consumido según el mes, marca, tipo de bebida,
                cliente y precio de ellos?
            </p>
        </div>
    </div>
    <!--  -->
    <form method="POST">
        <div class="row mb-1">
            <div class="col-md-2">
                <label for="">Fecha de inicio</label>
                <!--  <input type="date" name="inicio" class="form-control" required id="" > -->
                <?php
                        $cont = date('Y');
                    ?>
                <select id="sel1" name="inicio" class="form-control" required>
                    <?php while ($cont >= 2019) { ?>
                    <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                    <?php $cont = ($cont-1); } ?>
                </select>
            </div>
            <div class="col-md-2">
                <label for="">Fecha de finalizacion</label>
                <!-- <input type="date" name="fin" class="form-control" required id=""> -->
                <select name="fin" class="form-control" required>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option selected value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col-md-4">
                <button class="btn btn-block btn-primary" name="verificar">Verificar</button>
            </div>
        </div>

    </form>

    <div class="row mt-1 mb-5">
        <div class="col-md-1">
            <button onclick="printDiv(tables)" class="btn btn-block btn-primary" name="verificar"><i class="fas fa-print"></i></button>
        </div>
    </div>

    <table class="table datatables table-sm text-center" id="tables">
        <thead class="thead-dark text-center"">
            <tr>
                <th scope=" col">#</th>
            <th scope="col">Corelativo</th>
            <th scope="col">Cliente</th>
            <th scope="col">Categoria</th>
            <th scope="col">Producto</th>
            <th scope="col">Ventas</th>
            <th scope="col">Precio </th>
            <th scope="col">Stock</th>
            <th scope="col">Total</th>
            <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            $array = ProductoPorMes($db,$_POST);
                            $contador = 1;
                            while($row = $array->fetch(PDO::FETCH_ASSOC)){
                            $fecha = $row["fecha_de_compra"];
                            $fecha_proporcional = substr($fecha, 0, -9);
                            if ($contador == 1) {
                                $bg = "bg-success text-white ";
                            }else {
                                 $bg = "";
                            }
                                ?>
            <tr class="<?=$bg?>">
                <th scope="row"><?=$contador?></th>
                <td><?=$row["Correlativos"]?></td>
                <td><?=$row["Cliente"]?></td>
                <td><?=$row["Categoria"]?></td>
                <td><?=$row["Producto"]?></td>
                <td><?=$row["Ventas_Realizadas"]?></td>
                <td><?="$ ".$row["Precio_Mercado"]?></td>
                <td><?=$row["Unidades"]?></td>
                <td><?="$ ".$row["Ventas_Total"]?></td>
                <td class="bg-secondary text-white"><?=$fecha_proporcional?></td>
            </tr>
            <?php $contador++; } ?>
        </tbody>
    </table>
    <!--  -->

    <!--  -->

</div>

<script>
    
 function printDiv(nombreDiv) {
    var contenido= document.getElementById(nombreDiv).innerHTML;
    var contenidoOriginal= document.body.innerHTML;

    document.body.innerHTML = contenido;

    window.print();

    document.body.innerHTML = contenidoOriginal;
};
</script>