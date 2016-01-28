<?php
include ("variables.php");

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$titulo=$_POST["asunto"];
$mensaje=$_POST["mensaje"];

// Destinatario
$para  = 'hotellasvegascba@gmail.com, jpsollender@gmail.com';

$lugar= $hotel[$_POST["hot"]];
$subject = $_POST["asunto"].' desde '.$lugar;

// Mensaje sin formato para email sin cabeceras
$mensaje1 = '
Nombre: '.$_POST["nombre"].'

E-Mail: '.$_POST["email"]. '

Consulta:
'.$_POST["mensaje"].'

';
// Mensaje con formato para email con cabeceras
$mensaje = '
<html><head><title>Consulta de '.$nombre.' desde '.$lugar.'</title></head><body>
<table>
<tr bgcolor="#FFf6dd"><td>Nombre:</td><td>'.$nombre.'</td></tr>
<tr bgcolor="#eee"><td>E-Mail:</td><td> '.$email. '</td></tr>
<tr bgcolor="#FFf6dd">Mensaje:<td colspan=2> '.$mensaje.' </td></tr>
</table>
</body></html>
';

// Para enviar un correo HTML, cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: ' .$nombre. "\r\n";
$cabeceras .= 'Reply-To: ' .$email. "\r\n";
$cabeceras .= 'Bcc: jpsollender@gmail.com' . "\r\n";
$mensaje=wordwrap($mensaje, 70, "\r\n");
$mensaje1=wordwrap($mensaje1, 70, "\r\n");
// Enviarlo
$envio=0;
if (@mail($para, $titulo, $mensaje, $cabeceras)){$envio++;}
if (@mail($para, $titulo, $mensaje1)){$envio++;}
if ($envio>0){$resultado='Gracias '.$nombre.' el Mensaje se ha enviado...';}else{$resultado='Lo sentimos el Mensaje no se pudo enviar, intente mas tarde o escribanos directamente a hotellasvegascba@gmail.com';}
// Respuesta a la página de llamada
echo $resultado;
?>