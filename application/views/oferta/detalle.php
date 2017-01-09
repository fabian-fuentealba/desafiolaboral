<div class="row">
	<div class="col-md-3" >		
		<br><br>
		<img src="<?php echo base_url($meta['logo'])?>" class="img-responsive img-rounded img-thumsbnail">			

		<div class="page-header">
			<h4>  <b><?php echo $meta['nombre_empresa']?></b> <small> <?php echo $meta['lema']?> </small></h4>
		</div>
		
		<p> <b><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;<?php echo $meta['tipo_trabajo']?> <br>		
		<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; <?php echo $meta['ciudad']?>, <?php echo $meta['pais']?> <br>
		<i class="fa fa-usd" aria-hidden="true"></i> &nbsp; <?php echo $meta['salario']?></b>
		<br>
		<br>
		<b> 
		<span class="text-primary"><i class="fa fa-clone" aria-hidden="true"></i> <?php echo $meta['categoria']?></span><br>
		<i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp;<?php echo $meta['publicado']?><br>		
		<i class="fa fa-bar-chart" aria-hidden="true"></i> VISTO <?php echo $meta['visitas']?> VECES </b>
		</p>
		
		<br>
		<img src="http://qrcode.online/img/?type=url&size=4&data=<?php echo site_url(uri_string())?>" class="img-responsive ">
		
	</div>

	<div class="col-md-9">
		<div class="page-header">
			<h1>  <?php echo $meta['titulo']?> </h1>
		</div>
		<b><a href="<?php echo site_url()?>"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> ATRAS </a></b>
		<br><br>
		<?php echo nl2br($meta['descripcion'])?>		
		
	</div>
</div>

<div class="row">
	<div class="col-md-offset-3 col-md-9" >	

		<div class="page-header">
			<h2>  Como postular ? <small>  </small></h2>
		</div>

		<?php echo ( $meta['como_postular'] != '' ) ? nl2br($meta['como_postular']) . '<br><br>' : '';?>
		
		<p>Si usted siente que está calificado, adjunte su Curriculum Vitae haciendo referencia al nombre de esta oferta en el asunto al correo : <b><a href="mailto:<?php echo $meta['correo_postulacion']?>"><?php echo $meta['correo_postulacion']?></a></b> .</p>

	</div>
</div>