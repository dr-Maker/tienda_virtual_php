<?php 

class Producto{

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = DataBase::connect(); 
   }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;    
    }

    function getCategoriaId(){
        return $this->categoria_id;
    }

    function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;    
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);    
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $this->db->real_escape_string($descripcion);    
    }

    function getPrecio(){
        return $this->precio;
    }
    
    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);    
    }

    function getStock(){
        return $this->stock;
    }
    
    function setStock($stock){
        $this->stock = $this->db->real_escape_string($stock);    
    }

    function getOferta(){
        return $this->oferta;
    }
    
    function setOferta($oferta){
        $this->oferta = $this->db->real_escape_string($oferta);    
    }

    function getFecha(){
        return $this->fecha;
    }
    
    function setFecha($fecha){
        $this->fecha = $fecha;    
    }
   
    function getImagen(){
        return $this->imagen;
    }
    
    function setImagen($imagen){
        $this->imagen = $imagen;    
    }
   
    function getRandom($limit){
        $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT $limit";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getAll(){
        $sql = "SELECT * FROM productos";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getAllCategory(){
        $sql = "SELECT p.* , c.nombre as c_nombre FROM productos p INNER JOIN categorias c ON  p.categoria_id = c.id WHERE categoria_id = {$this->getCategoriaId()}";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getOne(){
        $sql = "SELECT * FROM productos WHERE id = {$this->getId()}";
        $producto = $this->db->query($sql);
        return $producto->fetch_object();
    }

    public function save(){
        $sql = "INSERT INTO productos(categoria_id, nombre, descripcion, precio, stock, oferta, fecha, imagen) VALUES ({$this->getCategoriaId()} , '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()} , {$this->getStock()}, 'ninguna', now(), '{$this->getImagen()}' );";
        $save = $this->db->query($sql); 

        $result= false;
        if($save){
           $result= true;
        }

        return $result;
    }

    public function edit(){
        $sql =  "UPDATE productos SET nombre = '{$this->getNombre()}', categoria_id= '{$this->getCategoriaId()}' ,descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}";
       if($this->getImagen() != null){
        $sql .= ", imagen = '{$this->getImagen()}'";
       }
         $sql .= " WHERE id = {$this->getId()}";   
        
        
         $save = $this->db->query($sql); 


        $result= false;
        if($save){
           $result= true;
        }

        return $result;
    }

    public function delete(){
        $sql = "DELETE FROM productos Where id = {$this->id}";
        $delete = $this->db->query($sql);

        $result= false;
        if($delete){
           $result= true;
        }

        return $result;
    }

}