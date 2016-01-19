<?php
// Varios destinatarios
$para  = 'jpsollender@gmail.com' . ', ';
$para .= 'jpsollender@gmail.com';
$para1 = $para;//'jpsollender@gmail.com';
$subject = ' (desde HLV)';

$mensaje = '
<html><head><title>Consulta de  desde HLV</title></head><body>
<table>
<tr bgcolor="#FFf6dd"><td>Nombre:</td><td></td></tr>
<tr bgcolor="#eee"><td>E-Mail:</td><td> </td></tr>
<tr bgcolor="#FFf6dd">Mensaje:<td colspan=2>  </td></tr>
</table>
</body></html>
';

//$mensaje=convertir($mensaje);
// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'FROM: <'.$_POST["email"].'>'. "\r\n";

$mensaje1 = '
Nombre: 

E-Mail: 

Consulta:


';



if (mail($para1, $subject, $mensaje1)){echo'Mensaje 1 enviado';}else{echo'Mensaje 1 no enviado';}
echo '<br />';

if (mail($para, $subject, $mensaje, $cabeceras)){echo'Mensaje 2 enviado';}else{echo'Mensaje 2 no enviado';}
?>