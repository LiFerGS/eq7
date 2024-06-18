<?php 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2><?php echo $data["titulo"];?></h2>
    <a href="index.php?c=productos&a=nuevo">Agregar</a>
    <br/>
    <br/>

    <table border="1" width ="80%">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Nombre del Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data["productos"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["id_Producto"]."</td>";
                    echo "<td>".$dato["nombre_Producto"]."</td>";
                    echo "<td>".$dato["decripcion"]."</td>";
                    echo "<td> $ ".$dato["precio"]."</td>";
                    echo "<td>".$dato["categoria"]."</td>";
                    echo "<td>".$dato["stock_Cantidad"]."</td>";
                    echo "<td><a href='index.php?c=productos&a=update&id=".$dato["id_Producto"]."'>Modificar<a/></td>";
                    echo "<td><a href='index.php?c=productos&a=delete&id=".$dato["id_Producto"]."'>Eliminar<a/></td>";
                    echo "</tr>";
                }
             ?>
        </tbody>
    </table>
</body>
</html>