<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="El punto de encuentro donde empleadores y candidatos se reúnen en un mismo idioma, simple, rápido ... ven a conocernos somos <?php echo $this->page?>">
		<meta name="keywords" content="trabajo, empleo, portal de empleo, bolsa de trabajo"/>
		<title><?php echo $title ?></title>		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css" rel="stylesheet">
		<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700' type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/pink/pace-theme-minimal.css">
		<?php
		foreach($css as $file){
	        echo "\n\t\t";
	        ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	    } echo "\n\t";
	    ?>		
	</head>

	<body>	

		<?php echo $this->load->get_section('modal');?>
		<?php echo $this->load->get_section('menu');?>

		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="layout">
						<?php echo $output;?>

						<?php echo $this->load->get_section('footer');?>
					</div>
				</div>
			</div>		
		</div>		


		<input type="hidden" id="site" value="<?php echo site_url()?>">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
		<script type="text/javascript" src="https://use.fontawesome.com/e8dd7ac44a.js"></script>		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/i18n/defaults-es_CL.min.js"></script><?php
		foreach($js as $file){
	        echo "\n\t\t";
	        ?><script src="<?php echo $file; ?>" type="text/javascript" /></script><?php
	    } 	echo "\n\t";
	    ?>
	    <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-61675527-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>
