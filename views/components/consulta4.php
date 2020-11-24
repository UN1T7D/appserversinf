<?php
    function Rutas($database){

            
            $consulta = "SELECT 
                                c.direccion as Direccion, 
                                p.nombre as Producto,
                                c.frecuencia as Frecuencia FROM ventas v
                            INNER JOIN cliente c
                            ON v.id_cliente = c.id_cliente
                            INNER JOIN producto p 
                            ON v.id_producto = p.id_producto
                        ORDER BY Producto
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
    <h1>CONSULTA 4</h1>
    <div class="row my-3">
        <div class="col-md-6 m-auto">
            <p class="text-center">
                ¿Qué rutas puede proporcionar la empresa para solventar la demanda de los
                clientes, surtidores, empresas, hacia un producto estipulado, y con cuanta
                frecuencia surtirá dicha solicitud?
            </p>
        </div>
    </div>

    <table class="table datatables table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Correlativo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Producto</th>
                <th scope="col">Frecuencia</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $array = Rutas($db);
            $contador = 1;
            while($row = $array->fetch(PDO::FETCH_ASSOC)){
                
                
        ?>
            <tr class="text-center">
                <td><?=$contador?></td>
                <td><?=$row["Direccion"]?></td>
                <td><?=$row["Producto"]?></td>
                <td><?=$row["Frecuencia"]?></td>
            </tr>
        <?php $contador++; } ?>
        </tbody>
    </table>
</div>