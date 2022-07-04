<?php
require_once("db.php");

class Pedido {

    //Declaración de Atributos
    private $mesa;
    private $descripcion;

   
    //Declaración de constructor

    public function __construct(){

    }

    //Declaración de accesadores y mutadores
    public function getMesa(){
        return  $this->mesa;
    }

    public function setMesa($mesa){
        $this->mesa = $mesa;
    }

    public function getDescripcion(){
        return  $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    

    //método de Mantenedor
    public function agregar($pedido){

        $mesa= $pedido->getMesa();
        $descripcion= $pedido->getDescripcion(); 
 

        $db= new DB();
        $stmt =  $db->getConexion()->prepare("INSERT INTO pedido (mesa, descripcion) VALUES (?,?)");
        $stmt->bindParam(1,  $mesa);
        $stmt->bindParam(2,  $descripcion);
  

        $stmt->execute();
    }

    // public function buscar($mesa){
    //     $db= new DB();
    //     $stmt =  $db->getConexion()->prepare("SELECT * FROM pedido WHERE mesa = ?");
    //     $stmt->bindParam(1, $mesa);
    //     $stmt->execute();
    //     $resultado = $stmt -> fetch();
    
    //     $mesa = $resultado['mesa'];
    //     $descripcion = $resultado['descripcion'];
  
    
    //     $pedido = new Pedido();
        
    //     $pedido->setMesa($mesa);
    //     $pedido->setDescripcion($descripcion); 
      

    //     return $pedido;

    // }
    // public function editar($pedido){
    //     $mesa= $pedido->getMesa();
    //     $descripcion= $pedido->getDescripcion(); 
     

    //     $db= new DB();
    //     $stmt =  $db->getConexion()->prepare("UPDATE pedido set  descripcion =?,  WHERE mesa=?");
    //     $stmt->bindParam(1,  $descripcion);
    //     $stmt->bindParam(2,  $apellido);
  

    //     $stmt->execute();
    // }

    public function eliminar($mesa){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("DELETE FROM pedido WHERE mesa = ?");
        $stmt->bindParam(1, $mesa);
        $stmt->execute();
    }

    public function listar(){
        $db= new DB();
        $sql = "SELECT * FROM pedido";
        $stmt = $db->getConexion()->prepare($sql);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        foreach ($rs as $fila) { 
           $pedido= new Pedido();
           $pedido->setMesa($fila["mesa"]);
           $pedido->setDescripcion($fila["descripcion"]); 
                  
           $pedidos[]=$pedido;
        }
        return $pedidos;
    
    }


}
   
?>