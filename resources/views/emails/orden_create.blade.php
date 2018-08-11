<!doctype html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>¡Hola buen dia {!! $cliente !!}!</h2>
        <div>
             {!! $cafeteria !!} te notifica que tu orden fue recibida con éxito.
        </div>
        <div>
            Los datos de tu orden son los siguientes:
        </div>
        <div>
          <ul>
            <li>Código de orden:  {!! $orden !!}</li>
            <li>Platillo o menú:  {!! $producto !!}</li>
            <li>Total descontado:$ {!! $total !!}</li>
            <li>Saldo actual:{!! $saldo !!}</li>
            <li>Fecha para recoger:{!! $fecha_solicitada !!}</li>
            <li>Hora para recoger:{!! $hora_solicitada !!}</li>
            <li><strong>Estatus de tu orden:{!! $estatus_orden !!}</strong></li>
          </ul>
        </div>
        <hr>
        Se le notificará cuando pueda pasar a recoger su orden.<br>
        Dudas o aclaraciones:<br>
        Tel:646 1901419<br>
        Email: greygarcia14.gg@gmail.com
    </body>
</html>
