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
                    Produccion
                </div>

           

                <div class="card-body">
                  
                    <p class="card-text"></p>

                </div>
                <div class="card-footer text-muted">

                </div>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mesa</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Accion</th>
                       
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($pedidos as $pedido) { ?>
                            <td><?php echo $pedido->getMesa() ?></td>
                            <td><?php echo $pedido->getDescripcion() ?></td>
                            <td><a href="index.php?op=eliminar&mesa=<?php echo $pedido->getMesa() ?>">Finalizar</a></td>
                    </tr>
                <?php    } ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="location='index.php?op=agregar'">Agregar registro</button>
        </body>

        </html>