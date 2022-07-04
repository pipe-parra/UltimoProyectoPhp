<?php
require_once("C:/xampp/htdocs/proyectoS6/models/pedido.php");
require_once("C:/xampp/htdocs/proyectoS6/controllers/pedidoController.php");
?>
<DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <title>Examen</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>

        <div class="card text-center">
            <div class="card-header">
                Pauta Ejercicio Semana 6
            </div>

      <br><br>

            <div class="card-body">
                <h5 class="card-title">PEDIDOS</h5>
                <br>
                <form class="row" action="/proyectoS6/index.php?op=agregarPedido" method="post">
       

                
<div class="row mb-3"><h3>Mesa</h3><select name="txtMesa" class="form-select">
            <option value="0">Combo Box</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            
            </select> </div> <br>
<div class="row mb-3"><h3>Descripcion</h3>
            <input type="text" name="txtDescripcion">

</div>
<div class="row d-flex ">
<a class="col-lg-6 col-sm-6 align-self-start" href="/proyectoS6/views/listado.php"><input class="btn btn-secondary" value="Ver Pedidos"></a>
<a class="col-lg-6 col-sm-6 align-self-end" href=""><input class="btn btn-primary" type="submit" value="Agregar"></a>
</div>



                </form>
            </div>

        </div>

        <div class="card-footer text-muted"> <a href="/proyectoS6/index.php?op=inicio">volver</a></div>
    </body>

    </html>