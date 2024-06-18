<?php

Class ProductosModel{
    private $db;
    private $productos;
    
    public function __construct() {
        $this->db =  Conectar::conexion();
        $this->productos = array();
    }

    public function obtenerProductos(){
        $sql = "SELECT * FROM productos";
        $resultado = $this->db->query($sql);
        while($row = $resultado-> fetch_assoc()){
            $this->productos[] = $row;
        }
        return $this -> productos;
    }

    public function agregarProducto($nombreProducto, $descripcion,$precio,$categoria,$stock){
        $resultado=$this->db->query("INSERT INTO productos (nombre_Producto,decripcion,
        precio,categoria,stock_Cantidad)VALUES('$nombreProducto','$descripcion','$precio','$categoria',
        '$stock')");
    }
}

?>