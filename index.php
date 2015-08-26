<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>People Cloud</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="stylesheets/styles.css">
	
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid navbar-container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-cloud"></i></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active navbar-item"><a href="#">Datos del Recurso</a></li>
	        <li class="navbar-item"><a href="#">Planeación y Organización</a></li>
	        <li class="navbar-item"><a href="#">Atracción</a></li>
	        <li class="navbar-item"><a href="#">Administración</a></li>
	        <li class="navbar-item"><a href="#">Retención</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right hidden-xs">
	        <li><a class="nav-search" href="#"><i class="glyphicon glyphicon-search"></i></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="container-fluid profile">
		<div class="row">
			<div class="col-sm-3 col-md-2 profile-pic large hidden-xs">
			</div>
			<div class="col-sm-3 col-md-2 profile-pic small visible-xs-block" align="center">
				<img class="" src="assets/John_Doe.jpg" alt="">
			</div>
			<div class="col-sm-3 col-md-4 profile-info">
				<div class="container-fluid">
					<h1 class="profile-name">John Doe Largename</h1>
					<h2 class="profile-position">Back-End Developer en Nuvol Networks</h2>
					<a href="#" class="btn profile-enviar">Enviar Mensaje <i class="glyphicon glyphicon-envelope"></i></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 profile-main large hidden-xs">
				<ul>
					<li>
						<i class="glyphicon glyphicon-ice-lolly"></i>
						Ingeniero en Sistemas Computacionales/Desarrollo de Software
					</li>
				</ul>
				<div class="row">
					<div class="col-sm-6 profile-col-1">
						<ul>
							<li>
								<i class="glyphicon glyphicon-globe"></i>
								Monterrey, Nuevo León, México
							</li>
							<li>
								<i class="glyphicon glyphicon-pencil"></i>
								john@nuvolnetworks.com
							</li>
							<li>
								<i class="glyphicon glyphicon-phone"></i>
								888-888-888
							</li>
						</ul>
					</div>
					<div class="col-sm-6 profile-col-2">
						<ul>
							<li>
								<i class="glyphicon glyphicon-hourglass"></i>
								26 años
							</li>
							<li>
								<i class="glyphicon glyphicon-yen"></i>
								Masculino
							</li>
							<li>
								<i class="glyphicon glyphicon-object-align-vertical"></i>
								Desarrollo de Software
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 visible-xs-block profile-main small">
				<div class="container-fluid">
					<ul>
						<li>
							<i class="glyphicon glyphicon-ice-lolly"></i>
							Ingeniero en Sistemas Computacionales/Desarrollo de Software
						</li>
						<li>
							<i class="glyphicon glyphicon-globe"></i>
							Monterrey, Nuevo León, México
						</li>
						<li>
							<i class="glyphicon glyphicon-pencil"></i>
							john@nuvolnetworks.com
						</li>
						<li>
							<i class="glyphicon glyphicon-phone"></i>
							888-888-888
						</li>
						<li>
							<i class="glyphicon glyphicon-hourglass"></i>
							26 años
						</li>
						<li>
							<i class="glyphicon glyphicon-yen"></i>
							Masculino
						</li>
						<li>
							<i class="glyphicon glyphicon-object-align-vertical"></i>
							Desarrollo de Software
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	

	<div class="wrapper-main">
		<div class="main-overlay"></div>
		<div class="container-fluid main">
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li class="main-tab active"><a href="#">Generales</a></li>
			    <li class="main-tab"><a href="#">Académicos</a></li>
			    <li class="main-tab"><a href="#">Competencias</a></li>
			    <li class="main-tab"><a href="#">Experiencia</a></li>
			    <li class="main-tab"><a href="#">Familiar</a></li>
			    <li class="main-tab"><a href="#">Otros</a></li>
			    <li class="main-tab"><a href="#">Documentos</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div class="tab-pane active">
			    	<h1 class="tab-title">Generales</h1>
			    	<div class="container-fluid">
			    		<div class="row">
				    		<div class="col-xs-12 col-sm-3">
				    			<div class="general-card">
				    				<div class="card-wrapper small">
				    					<h2>E-mail personal</h2>
						    			<p>personal@gmail.com</p>

						    			<h2>Casado</h2>
						    			<p>25 Ago 2013</p>
				    				</div>
				    				<div class="card-sticker">
				    					<i class="glyphicon glyphicon-user"></i>
				    				</div>
				    			</div>
				    		</div>
				    		<div class="col-xs-12 col-sm-3">
				    			<div class="general-card">
				    				<div class="card-wrapper small">
				    					<h2>Estado Civil</h2>
						    			<p>Casado</p>

						    			<h2>Fecha de Matrimonio</h2>
						    			<p>25 Ago 2013</p>
				    				</div>
				    				
				    			</div>
				    		</div>
				    		<div class="col-xs-12 col-sm-3">
				    			<div class="general-card">
				    				<div class="card-wrapper small">
				    					<h2>Curp</h2>
						    			<p>BEML920313HCMLNS09</p>

						    			<h2>RFC</h2>
						    			<p>92032013HCMLNS09</p>

						    			<h2>IFE</h2>
						    			<p>100920934209234</p>
				    				</div>
				    				<div class="card-sticker">
				    					<i class="glyphicon glyphicon-lock"></i>
				    				</div>
				    			</div>
				    		</div>
				    		<div class="col-xs-12 col-sm-3">
				    			<div class="general-card">
				    				<div class="card-wrapper small">
				    					<h2>NSS</h2>
						    			<p>25253789983</p>

						    			<h2>INFONAVIT</h2>
						    			<p>25253789983</p>

						    			<h2>Perm. de trab/pasaporte</h2>
						    			<p>N/A</p>
				    				</div>
				    			</div>
				    		</div>
				    		<div class="col-xs-12 col-sm-6">
				    			<div class="general-card large">
				    				<div class="card-wrapper">
				    					<h2>Domicilio</h2>
						    			<p>
						    				Av. Paseo De los Leones #332. Colonia Cumbres 200 Sector.
						    				<br>
						    				C.P. 64460 Monterrey, Nuevo León, México
						    			</p>
				    				</div>
				    				<br class="visible-xs-block">
				    				<div id="map"></div>
				    			</div>
				    		</div>
				    		<div class="col-xs-12 col-sm-6">
				    			<div class="general-card large">
				    				<div class="card-wrapper quote-wrapper">
				    					<div class="container-fluid">
				    						<div class="comillas hidden-xs">"</div>
					    					<q class="quote">
					    						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque velit quasi 
					    						animi nulla perspiciatis laborum doloribus sit odio expedita fugiat maiores ullam aliquam facilis.
					    					</q>
				    					</div>
				    				</div>
				    				<div class="speaker">
				    					- John Doe Largename
				    				</div>
				    			</div>
				    		</div>
				    	</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	
	
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(25.697268, -100.349630),
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      draggable: false,
      scrollwheel: false,
      zoomControl: false,
      streetViewControl: false,
      overviewMapControl: false,
      mapTypeControl: false
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var myLatLng = {lat: 25.697268, lng: -100.349630};
    var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    title: 'Hello World!'
	  });

  }
  google.maps.event.addDomListener(window, 'load', initialize);
  marker.setMap(map);
</script>

</body>
</html>