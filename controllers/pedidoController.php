<?php

require_once("C:/xampp/htdocs/proyectoS6/models/pedido.php");

class PedidoController
{

    public $pedido;

    public function __construct()
    {
        $this->pedido = new Pedido();
    }

    public function listar()
    {
        $pedidos = $this->pedido->listar();
        include 'views/listado.php';
    }

    public function inicio()
    {
        include 'views/inicio.php';
    }

    public function agregar()
    {
        include 'views/pedidos.php';
    }

    public function agregarPedido($pedidoNuevo)
    {
      $this->pedido->agregar($pedidoNuevo);
      $pedidos = $this->pedido->listar();
      include 'views/pedidos.php';
      echo "<div style='color: green ;margin-top: 250px; line-height: 65%; font-family:Montserrat; text-align:center;'><h1>Pedido ingresado correctamente</h1><br>";   //Mensaje para avisar que todo es correcto
      
    }

    public function verPedido(){
        $pedidos = $this->pedido->listar();
        include 'views/listado';
    }

    public function verProduccion(){
        $pedidos = $this->pedido->listar();
        include 'views/produccion';
    }

    public function eliminar($mesa)
    {
        $this->pedido->eliminar($mesa);
        $pedidos = $this->pedido->listar();
        include 'views/listado.php';
    }

    // public function editar($mesa)
    // {
    //     $pedido = $this->pedido->buscar($rut);
    //     include 'views/editar.php';
    // }

    // public function editarPedido($pedido)
    // {
    //   $this->pedido->editar($pedido);
    //   $pedidos = $this->pedido->listar();
    //   include 'views/listado.php';
    // }

    // public function buscar()
    // {   $pedido = null;
    //     include 'views/buscar.php';
    // }

    // public function buscarApellido($apellido)
    // {
    //     $pedido = $this->pedido->buscarApellido($apellido);
    //     include 'views/buscar.php';
    // }

}
