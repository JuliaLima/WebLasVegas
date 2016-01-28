<?php
include ("variables.php");
//echo'Enviando.....<br />';
// Varios destinatarios
$para  = 'hotellasvegascba@gmail.com' . ', ';
$para .= 'jpsollender@gmail.com';
$para1 = $para;//'jpsollender@gmail.com';

$lugar= $hotel[$_POST["hot"]];
$subject = $_POST["asunto"].' (desde '.$lugar.')';
//echo $_POST["hot"].'---'.$_POST["nombre"].'---'.$_POST["email"].'<br />';
$mensaje = '
<html><head><title>Consulta de '.$_POST["nombre"].' desde '.$lugar.'</title></head><body>
<table>
<tr bgcolor="#FFf6dd"><td>Nombre:</td><td>'.$_POST["nombre"].'</td></tr>
<tr bgcolor="#eee"><td>E-Mail:</td><td> '.$_POST["email"]. '</td></tr>
<tr bgcolor="#FFf6dd">Mensaje:<td colspan=2> '.$_POST["mensaje"].' </td></tr>
</table>
</body></html>
';

//echo $mensaje;
// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'FROM: '.$_POST["nombre"].'<'.$_POST["email"].'>'. "\r\n";

$mensaje1 = '
Nombre: '.$_POST["nombre"].'

E-Mail: '.$_POST["email"]. '

Consulta:
'.$_POST["mensaje"].'

';
/*
echo $mensaje1.'<br />';


if (mail($para1, $subject, $mensaje1)){echo'Mensaje 1 enviado';}else{echo'Mensaje 1 no enviado';}
echo '<br />';

if (mail($para, $subject, $mensaje, $cabeceras)){echo'Mensaje 2 enviado';}else{echo'Mensaje 2 no enviado';}*/
mail($para1, $subject, $mensaje1);
mail($para, $subject, $mensaje, $cabeceras);
echo '<script type="text/javascript">		
		location.href="lv.php?hot='.$_POST["hot"].'";
		</script>';
/*		*/
?>