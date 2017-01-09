<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title><?php echo $oferta['titulo'] ?></title>
</head>

<body style="background-color: #f4f4f4;padding: 20px;">
<div style="background-color: #fff;padding: 20px;border-radius: 0  0 10px 10px;box-shadow: 0 0 10px #666">
    <img src="<?php echo base_url('assets/img/logo_short.png') ?>" style="position: absolute;padding-left: -10px;" >
    <hr>
    <table width="100%" cellpadding="2" cellspacing="0" align="center"
           style="font-family: Tahoma,Arial;font-size: 12px;">
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tbody>
        <tr>
            <td colspan="2">Estimado(a)</td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $nombre ?> vió esta oferta y piensa que te puede interesar :</td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td width="120"><strong>Tipo</strong></td>
            <td><?php echo strtoupper($oferta['tipo']) ?> </td>
        </tr>
        <tr>
            <td><strong>Oferta</strong></td>
            <td><?php echo $oferta['titulo'] ?></td>
        </tr>
        <tr>
            <td><strong>Lugar</strong></td>
            <td><?php echo $oferta['comuna'] ?>, <?php echo $oferta['region'] ?>, <?php echo $oferta['pais'] ?></td>
        </tr>
        <tr>
            <td><strong>Finaliza</strong></td>
            <td><?php echo $oferta['quedan'] ?></td>
        </tr>
        <tr>
            <td><strong>Link</strong></td>
            <td><?php echo site_url($oferta['controlador'] . '/detalle') ?>/<?php echo $oferta['id_oferta'] ?></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">El equipo de...</td>
        </tr>
        <tr>
            <td colspan="2"><strong><?php echo $this->site_name;?></strong></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>