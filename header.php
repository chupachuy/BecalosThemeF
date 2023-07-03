<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BÉCALOS</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php bloginfo('template_url'); ?>/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php bloginfo('template_url'); ?>/css/style.min.css" rel="stylesheet">
  <!-- OWL COROUSEL -->
  <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" rel="stylesheet">
  <!-- OWL COROUSEL -->
  <link href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.css" rel="stylesheet">
  <!-- ESTILOS -->
  <link href="<?php bloginfo('template_url'); ?>/css/estilos.css" rel="stylesheet">


  <!-- HISTORIAS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/pixelfabric-clothes/style.css" />
  <!-- General demo styles & header -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/demo.css" />
   <!-- Flickity gallery styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flickity.css" />
  <!-- Component styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/component.css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #FFF !important;
      }
    }
  </style>
  <?php wp_head(); ?>

</head>

<body>



<!--Navbar-->
<nav class="navbar navbar-expand-md mr-auto navbar-light fixed-top white">
	<div class="container">

		<!-- Navbar brand -->
		<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo_prin" src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>

		<!-- Collapse button -->
		<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="dark-blue-text">
				<i class="fas fa-bars fa-1x"></i>
			</span>
		</button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent1">

      <!-- Links -->
      <ul class="lis_men">
        <li>
          <a class="nav-link" href="https://becalos.mx/donar/">Donar</a>
        </li>
        <li>
          <a class="nav-link" href="<?php bloginfo('url'); ?>/historias/">Historias</a>
        </li>
        <li>
          <a class="nav-link" href="<?php bloginfo('url'); ?>/programas/">Programas</a>
        </li>
        <li>
          <a class="nav-link" href="<?php bloginfo('url'); ?>/noticias/">Noticias</a>
        </li>
        <li>
          <a class="nav-link" href="<?php bloginfo('url'); ?>/informes/">Informe</a>
        </li>
        <li>
          <a class="nav-link" href="<?php bloginfo('url'); ?>/acerca-de-nosotros/">Acerca de nosotros</a>
        </li>
        <li class="mar_men_iz_esp">
          <a class="nav-link" target="_blank" href="https://www.facebook.com/becalos/"><i class="fab fa-facebook-f"></i></a>
          <a class="nav-link" target="_blank" href="https://www.instagram.com/becalos_mx/?hl=es-la"><i class="fab fa-instagram"></i></a>
          <a class="nav-link" target="_blank" href="https://twitter.com/becalosmx"><i class="fab fa-twitter"></i></a>
          <a class="nav-link" data-toggle="modal" data-target="#contactoModal"><i class="fas fa-envelope"></i></a>
          <a href="<?php bloginfo('url'); ?>/en" class="nav-link"><img src="<?php bloginfo('template_url'); ?>/img/united-states-of-america-flag-round-icon-32.png"></a>
        </li>
      </ul>
      <!-- Links -->

    </div>

    
	</div>

</nav>
<!--/.Navbar-->

<!-- Modal CONTACTO -->
<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-labelledby="contactoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactoModalLabel">CONTACTO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form action="envia.php" method="post">
            <div class="modal-body">
                <div class="container">
                    <br /><br /><br />
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nombre" class="inp_contacto" placeholder="Nombre">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" class="inp_contacto" placeholder="Correo electrónico">
                        </div>
                        <div class="col-md-12"><br /></div>
                        <div class="col-md-12">
                            <textarea style="min-height: 200px;" type="text" name="consulta" class="inp_contacto" placeholder="Comentarios"></textarea>
                        </div>
                        <div class="col-md-12"><br /></div>
                        <div class="col-md-12">
                            <!--<div class="btn_contacto">ENVIAR</div>-->
                            <input type="submit" value="Enviar" class="btn_contacto">
                        </div>
                        <div class="col-md-12">
                            <br /><br /><br />
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
<!-- Modal CONTACTO -->