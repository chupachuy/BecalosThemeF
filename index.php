<?php  get_header(); ?>

<?php
require('btnDonar.php');
?>
<?php include('mainSlider.php'); ?>
<!--Main layout-->
<main>
	
	<?php include('vidasInspiran.php'); ?>
	<?php include('nuestroTrabajo.php'); ?>
	
	<!-- SECC 3  ACERCATE A BECALOS-->
<?php 
	$query = new WP_Query( 'pagename=acercate-a-becalos' );
	 // The Loop
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) 
	$query->the_post(); { ?>
	<div class="sin_padd container-fluid">
		<div class="sin_padd row">
			<div class="sin_padd col-md-6 iz_cont">
				<?php the_post_thumbnail('full', ['class' => '', 'title' => 'full']); ?>
			</div>
			<div class="col-md-6 de_cont">
				<div class="container">
					<br/><br/><br/><br/>
					<h2 class="h2_bl"><?php the_title(); ?></h2>
					<br/>
					<?php the_content(); ?>
					<br/><br/>
					<a href="<?php bloginfo('url'); ?>/<?php echo  get_post_meta($post->ID, 'acerca_de_nosotros', true); ?>"><div class="btn_base">Leer más</div></a>
					<br/><br/><br/><br/>
				</div>
			</div>
		</div>
	</div>
<?php }
}
	/* Restore original Post Data */
	wp_reset_postdata();
?>
	<!-- SECC 3 -->


	<!-- SECC 4 -->
	<?php include('sliderNoticias.php'); ?>
	<!-- SECC 4 -->


	<?php include('futuroBeneficiario.php'); ?>


	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
					<!-- Accordion card -->
					<div class="card sin_sombra">
						<!-- Card header -->
						<div class="card-header text-center" role="tab" id="headingOne1" style="display: flex; justify-content: center; padding: 1em auto;">
							<div style="margin: 1em auto;" class="btn_base centra_btn_base" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">Contacto</div>
						</div>
						<!-- Card body -->
						<div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
							<form action="envia.php" method="post">
								<div class="card-body">
									<div class="btn_cerrar_c" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><i class="fas fa-times"></i></div>
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="nombre" class="inp_contacto" placeholder="Nombre">
										</div>
										<div class="col-md-6">
											<input type="text" name="email" class="inp_contacto" placeholder="Corroe electrónico">
										</div>
										<div class="col-md-12"><br/></div>
										<div class="col-md-12">
											<textarea style="min-height: 300px;" type="text" name="consulta" class="inp_contacto" placeholder="Comentarios"></textarea>
										</div>
										<div class="col-md-12"><br/></div>
										<div class="col-md-12">
											<!--<div class="btn_contacto">ENVIAR</div>-->
											<input type="submit" value="Enviar" class="btn_contacto">
										</div>
										<div class="col-md-12">
											<br/><br/><br/>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
			</div>
		</div>
	</div>
</main>
<!--Main layout-->
<?php get_footer(); ?>