<?php
require_once("models/Producto.php");

class CarritoController{
    public function index(){
        var_dump($_SESSION["carrito"]);
        echo "Controlador carrito, Accion Index";
    }

    public function add(){
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        }else{
            header("Location:".base_url);
        }

       if(isset($_SESSION['carrito'])){

       }else{
            $producto = new Producto();
            $producto->setId($producto_id);
            $pdto = $producto->getOne();

            if(is_object($pdto)){
                $_SESSION['carrito'][] = array(
                    "id_producto" => $pdto->id,
                    "precio" => $pdto->precio,
                    "unidades" => 1,
                    "producto" =>  $pdto
                );
            }   
       }
       header("Location:".base_url."carrito/index");
    }

    public function remove(){
        
    }

    public function delete_all(){
        unset($_SESSION["carrito"]);
        
    }


}