<?php 
class ProductosController {
    public function __construct() {
        require_once "models/ProductosModel.php";
    }
    public function index() {
        require_once "models/ProductosModel.php";
        $productos = new ProductosModel();
        $data["titulo"] = "Productos";
        $data["productos"] = $productos->obtenerProductos();
        require_once "views/productos/productos.php";
    }

    public function nuevo() {
        $data["titulo"] = "Productos";
        require_once "views/productos/productosCreate.php";
    }

    public function create() {
        if (isset($_POST['nombre_Producto']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['categoria']) && isset($_POST['stock_Cantidad'])) {
            $nombreProducto = $_POST['nombre_Producto'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $stock = $_POST['stock_Cantidad'];
            $productosCreate = new ProductosModel();
            $productosCreate->agregarProducto($nombreProducto, $descripcion, $precio, $categoria, $stock);
            
            $data["titulo"] = "Productos";
            $this->index();
        } else {
            echo "Error: Todos los campos son obligatorios.";
        }
    }
}
?>