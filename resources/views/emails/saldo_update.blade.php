<!doctype html>
<html lang="es-ES">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>¡Hola {!! $cliente !!}!</h2>
        <hr>
        <div>
             {!! $cafeteria !!} te notifica que tu <strong>saldo </strong>fue actualizado con éxito.
        </div>
        <div> 
          <ul>
            <li>Saldo anterior:${!! $saldo_viejo !!} pesos.</li>
            <li><strong>Saldo abonado:${!! $saldo_abonado !!} pesos.</strong> </li>
            <li>Saldo actual:${!! $saldo_actual !!} pesos.</li>
          </ul>
        </div>
        <hr>
         Gracias por usar el servicio en linea.<br>
         Dudas o aclaraciones:<br>
         Tel:646 1901419<br>
         Email: greygarcia14.gg@gmail.com
    </body>
</html>
