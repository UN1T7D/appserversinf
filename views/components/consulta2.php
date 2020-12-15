<?php
    require_once("intervalo.php");
    function ProductoMasVendido($database, $form){
        
        if ($form == "" || empty($form) || $form == NULL) {
            
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
        }else{
            
            $inicio = $form["inicio"];
            $fin = $form["fin"];

            echo intervalo($inicio, $fin);
            $inicial = intervaloInicio($inicio, $fin);
            $final = intervaloFin($inicio, $fin);
            
            $consulta = "SELECT  
                                count(v.id_ventas) as Cantidad_de_pedidos, 
                                p.nombre as Producto,
                                p.categoria as Categoria,
                                p.stock as Stock, 
                                p.lote as Lote, 
                                p.estiba as Estiba, 
                                    (p.costo*(SUM(v.unidades)))as Costo,
                                    (p.precio*(SUM(v.unidades)))as Venta_Mercado,
                                    ((p.precio*(SUM(v.unidades))) - (p.costo*(SUM(v.unidades)))) as Ganancia,
                                    v.fecha_de_compra
                        FROM ventas v
                            INNER JOIN tienda  t
                            ON
                                v.id_tienda = t.id_tienda
                            INNER JOIN producto p
                            ON
                                v.id_producto = p.id_producto
                        WHERE v.fecha_de_compra between :inicio AND :fin
                        Group by p.nombre
                        order by Cantidad_de_pedidos DESC
                        ";
            $prepare = $database->prepare($consulta);
            $prepare->bindParam(":inicio", $inicial, PDO::PARAM_STR);
            $prepare->bindParam(":fin", $final, PDO::PARAM_STR);
            $prepare->execute();
            return $prepare;
            
        }
        
    }
?>

<div class="container container-query p-5">
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
        <div class="row mt-3 mb-5">
            <div class="col-md-4">
                <button type="submit" class="btn btn-block btn-primary" name="verificar">Verificar</button>
            </div>
        </div>

    </form>
    <!--  -->

    <table class="table datatables table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Pedidos</th>
                <th scope="col">Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Lote</th>
                <th scope="col">Estiba</th>
                <th scope="col">Egresos</th>
                <th scope="col">Ventas</th>
                <th scope="col">Ingresos</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                            $array = ProductoMasVendido($db, $_POST);
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