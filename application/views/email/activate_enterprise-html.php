<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Bienvenido a <?php echo $site_name; ?>!</title>
	</head>
	<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%"></td>
				<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
					<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Bienvenido(a) a <?php echo $site_name; ?>!</h2>
				Gracias por unirte a <strong><?php echo $site_name; ?></strong>, hemos listado tus credenciales en detalle abajo, procura de mantenerlos seguros.<br />
				Para verificar tu dirección de correo, porfavor sigue el siguiente link:<br />
				<br />
				<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('activate/business/' . $new_email_key); ?>" style="color: #3366cc;">Finaliza tu registro...</a></b></big><br />
				<br />
				El link no funciona? Copia el siguiente link a la barra de direcciones de tu navegador:<br />
				<nobr><a href="<?php echo site_url('activate/business/' . $new_email_key); ?>" style="color: #3366cc;"><?php echo site_url('activate/business/' . $new_email_key ); ?></a></nobr><br />
				<br />


				
				Tu usuario: <?php echo $to; ?><br />
				<br />
				te esperamos!<br />
				<strong><a href="<?php echo $page; ?>" ><?php echo $page; ?></a></strong>
				</td>
			</tr>
		</table>
		</div>
	</body>
</html>