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
        include 'views/agregar.php';
    }

    public function agregarPedido($pedidoNuevo)
    {
      $this->pedido->agregar($pedidoNuevo);
      $pedidos = $this->pedido->listar();
      include 'views/listado.php';
    }

    public function eliminar($rut)
    {
        $this->pedido->eliminar($rut);
        $pedidos = $this->pedido->listar();
        include 'views/listado.php';
    }

    public function editar($rut)
    {
        $pedido = $this->pedido->buscar($rut);
        include 'views/editar.php';
    }

    public function editarPedido($pedido)
    {
      $this->pedido->editar($pedido);
      $pedidos = $this->pedido->listar();
      include 'views/listado.php';
    }

    public function buscar()
    {   $pedido = null;
        include 'views/buscar.php';
    }

    public function buscarApellido($apellido)
    {
        $pedido = $this->pedido->buscarApellido($apellido);
        include 'views/buscar.php';
    }

}
