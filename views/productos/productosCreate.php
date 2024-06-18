<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <form id="create" name="create" method="POST" action="index.php?c=productos&a=create" autocomplete="off">
        Nombre del producto: <input type="text" id="nombre_Producto" name="nombre_Producto" required/> <br/>
        Descripción: <input type="text" id="descripcion" name="descripcion" required/> <br/>
        Precio $MXN: <input type="number" id="precio" name="precio" min="0" step="0.01" required/> <br/>
        Categoria: <input type="text" id="categoria" name="categoria" required/> <br/>
        Stock: <input type="number" id="stock_Cantidad" name="stock_Cantidad" min="0" required/> <br/>
        <button id="guardar" name="guardar" type="submit">Guardar producto</button>
    </form>
</body>
</html>