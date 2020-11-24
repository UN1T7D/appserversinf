<?php
    function ProductoMasVendido($database){

            
            $consulta = "SELECT  
                                count(v.id_ventas) as Cantidad_de_pedidos, 
                                p.nombre as Producto,
                                p.categoria as Categoria,
                                p.stock as Stock, 
                                p.lote as Lote, 
                                p.estiba as Estiba, 
                                    (p.costo*(SUM(v.unidades)))as Costo,
                                    (p.precio*(SUM(v.unidades)))as Venta_Mercado,
                                    ((p.precio*(SUM(v.unidades))) - (p.costo*(SUM(v.unidades)))) as Ganancia
                        FROM ventas v
                            INNER JOIN tienda  t
                            ON
                                v.id_tienda = t.id_tienda
                            INNER JOIN producto p
                            ON
                                v.id_producto = p.id_producto
                        Group by p.nombre
                        order by Cantidad_de_pedidos DESC
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->execute();
            return $prepare;
        
    }
?>

<div class="container p-5">
    <h1>CONSULTA 2</h1>
    <div class="row my-3">
        <div class="col-md-6 m-auto">
            <p class="text-center">
                ¿Cantidad de pedidos según el tipo de producto que se encuentra en el stock
                por lotes y estibas que se reparten por los departamentos con sus ingresos y
                egresos? 
            </p>
        </div>
    </div>

    <table class="table datatables table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nº Pedidos</th>
                <th scope="col">Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Lote</th>
                <th scope="col">Estiba</th>
                <th scope="col">Egresos</th>
                <th scope="col">Venta Mercado</th>
                <th scope="col">Ingresos</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            $array = ProductoMasVendido($db);
                            $contador = 1;
                            while($row = $array->fetch(PDO::FETCH_ASSOC)){?>
            <tr class="text-center">
                <th scope="row"><?=$contador?></th>
                <td><?=$row["Cantidad_de_pedidos"]?></td>
                <td class="bg-info text-white"><?=$row["Producto"]?></td>
                <td><?=$row["Categoria"]?></td>
                <td><?=$row["Stock"]?></td>
                <td><?=$row["Lote"]?></td>
                <td><?=$row["Estiba"]?></td>
                <td class="bg-danger text-white"><?="$ ".$row["Costo"]?></td>
                <td class="bg-secondary text-white"><?="$ ".$row["Venta_Mercado"]?></td>
                <td class="bg-success text-white"><?="$ ".$row["Ganancia"]?></td>
            </tr>
            <?php $contador++; } ?>
        </tbody>
    </table>
</div>