<!-- SECC 5 -->
<?php 
$query = new WP_Query( 'pagename=se-parte-del-futuro-de-nuestros-beneficiarios' );
 // The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) 
$query->the_post(); { ?>
<div id="count_c" class="container-fluid fond_az_i">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br/><br/><br/><br/><br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 class="h2_bl text-center"><?php the_title(); ?></h2>
				<br/>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br/><br/>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="formNum">$<span class="counter"><?php echo  get_post_meta($post->ID, 'data_recaudacion', true); ?></span></h2>
					</div>
					<div class="col-md-12">
						<br/>
						<p class="desNum"><?php echo  get_post_meta($post->ID, 'Recaudación', true); ?></p>
					</div>
				</div>
			</div>
			<!--<div class="col-md-5 text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="formNum">$<span class="counter"><?php echo  get_post_meta($post->ID, 'recaudacion_acumulada_data', true); ?></span></h2>
					</div>
					<div class="col-md-12">
						<br/>
						<p class="desNum"><?php echo  get_post_meta($post->ID, 'recaudacion_acumulada', true); ?></p>
					</div>
				</div>
			</div>-->
			<div class="col-md-6 text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="formNum"><span class="counter"><?php echo  get_post_meta($post->ID, 'graduados_data', true); ?></span></h2>
					</div>
					<div class="col-md-12">
						<br/>
						<p class="desNum"><?php echo  get_post_meta($post->ID, 'graduados', true); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br/><br/><br/><br/><br/>
			</div>
		</div>
	</div>
</div>
<!-- SECC 5 -->
<?php }
 }
  /* Restore original Post Data */
   wp_reset_postdata();
?>