<style type="text/css">
    body {
        font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
        background-color: #e9e9e9;
    }

    a. {
        color: #33a3dd;
    }

    .list-group-item {
        margin: 0;
        padding: 10px;
        border-bottom: #ccc 1px solid;
        font-size: 14px;
    }

    .logo a {
        font-size: 18px;
        color: #33a3dd;
    }

    .sign {
        font-family: 'Courier new', cursive;
        font-size: 18px;
    }
</style>

<ul style="background-color: #fff;
	list-style: none;
	margin: 10px;
	padding: 0;
	border: #ccc 1px 1px 0 1px solid;
	border-radius: 5px;
	box-shadow: 0 0 5px #666;">
    <li class="list-group-item logo"><a href="<?php echo site_url() ?>" style="color:#33a3dd;"> <i
                class="glyphicon glyphicon-trash"></i> <?php echo $this->site ?></a></li>
    <li style="margin: 0;
	padding: 10px;
	border-bottom: #ccc 1px solid;
	font-size: 14px;">Les damos la bienvenida a <strong><?php echo $this->site ?></strong></li>
    <li style="margin: 0;
	padding: 10px;
	border-bottom: #ccc 1px solid;
	font-size: 13px;">
        <p>Al igual que usted, muchos clientes de todo Chile confían en <strong><?php echo $this->site ?></strong>
            para publicar avisos de manera rápida y sencilla. Queremos que sepa que puede contar con nosotros en todo
            momento, gracias a nuestro servicio de asistencia ininterrumpida.</p>

        <p>Esperamos que disfrute de su cuenta de <strong><?php echo $this->site ?></strong> y haga un uso
            frecuente de ella.
            Mientras tanto, si considera que <strong><?php echo $this->site ?></strong> podría ser de gran utilidad
            para su empresa (tal y como nosotros creemos), contactenos a <a
                href="mailto:<?php echo $this->email_contacto ?>"
                style="color:#33a3dd;"><?php echo $this->email_contacto ?></a> . Únase a nuestras empresas, las cuales
            recurren a <strong><?php echo $this->site ?></strong> cada día para publicar avisos de manera rápida y
            sencilla. </p>

        <p>&nbsp;</p>

        <p class="sign">El equipo de <br><strong><?php echo $this->site ?></strong></p>
    </li>
</ul>
