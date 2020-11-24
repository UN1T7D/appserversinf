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
                                    (p.precio*(SUM(v.unidades)))as Ventas_Total
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
                            WHERE v.fecha_de_compra between '2019-01-01' AND '2020-12-31' 
                            GROUP BY p.id_producto 
                            ORDER BY Ventas_Realizadas DESC
                        /* WHERE v.fecha_de_compra between '2019-01-01' AND '2020-12-31' */
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->execute();
            return $prepare;
        }else{
            $inicio = $form["inicio"];
            $fin = $form["fin"];
            $consulta = "SELECT 
                                CONCAT(c.nombres,' ',c.apellidos) as Cliente,
                                p.id_producto as Correlativos,
                                p.nombre as Producto, 
                                p.categoria as Categoria ,
                                COUNT(p.id_producto) as Ventas_Realizadas,
                                p.precio as Precio_Mercado,
                                ROUND(SUM(v.unidades)) as Unidades,
                                (p.precio*(SUM(v.unidades)))as Ventas_Total
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
                        ORDER BY Ventas_Realizadas DESC
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->bindParam(":inicio", $inicio, PDO::PARAM_STR);
            $prepare->bindParam(":fin", $fin, PDO::PARAM_STR);
            $prepare->execute();
            return $prepare;
        }

    }




?>

<div class="container p-5">
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
            <div class="col-md-3">
                <label for="">Fecha de inicio</label>
                <input type="date" name="inicio" class="form-control" required id="">
            </div>
            <div class="col-md-3">
                <label for="">Fecha de finalizacion</label>
                <input type="date" name="fin" class="form-control" required id="">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-primary" name="verificar">Verificar</button>
            </div>
        </div>
    </form>
    <!--  -->

    <!--  -->
    <table class="table datatables table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Correlativo</th>
                <th scope="col">Cliente</th>
                <th scope="col">Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Ventas</th>
                <th scope="col">Precio </th>
                <th scope="col">Unidades</th>
                <th scope="col">Ventas_Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            $array = ProductoPorMes($db,$_POST);
                            $contador = 1;
                            while($row = $array->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <th scope="row"><?=$contador?></th>
                <td><?=$row["Correlativos"]?></td>
                <td><?=$row["Cliente"]?></td>
                <td><?=$row["Categoria"]?></td>
                <td><?=$row["Producto"]?></td>
                <td><?=$row["Ventas_Realizadas"]?></td>
                <td><?="$ ".$row["Precio_Mercado"]?></td>
                <td><?=$row["Unidades"]?></td>
                <td><?="$ ".$row["Ventas_Total"]?></td>
            </tr>
            <?php $contador++; } ?>
        </tbody>
    </table>
    <!--  -->

</div>
</div>
</div>
</div>
<!--  -->

</div>