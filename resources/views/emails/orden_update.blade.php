<!doctype html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>¡Hola {!! $cliente !!}!</h2>
        <hr>
        <div>
             {!! $cafeteria !!} te notifica que tu orden fue actualizada.
        </div>
        <div>
           Código: {!! $orden !!}<br>
           Fecha solicitada: {!! $fecha_solicitada !!}<br>
           Hora solicitada: {!! $hora_solicitada !!}<br>
           Platillo ordenado: {!! $producto !!}<br>
           <strong>Estatus de la orden: {!! $estatus_orden !!}</strong>
        </div>
        <hr>
        Gracias por su preferencia. <strong> Si el Estatus de la orden es PREPARADA, ¡Puede pasa a recoger su orden!</strong><br>
        Dudas o aclaraciones:<br>
        Tel:646 1901419<br>
        Email: greygarcia14.gg@gmail.com
    </body>
</html>
