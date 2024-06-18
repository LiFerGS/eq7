<?php
 Class Conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost","root","","eq7");
        return $conexion;
    }
 }
?>