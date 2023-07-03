<?php
/*
* Template name: Informes
*/
?>

<?php get_header(); ?>

<?php include('btnDonar.php'); ?>


	<!-- INFORMES -->
	<main>
		
		<div class="container-fluid">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/><br/>
					</div>
				</div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Inicio Introducción -->
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2_gris text-center"><?php the_title(); ?></h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 tex_bas_sec">
						<?php the_content(); ?>
					</div>
				</div>
				<!-- Fin Introducción -->

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>
				<?php endwhile; else: ?><?php endif; ?>

				<?php 
					$query = new WP_Query( 'pagename=retos-educativos-en-mexico' );
					 // The Loop
					  if ( $query->have_posts() ) {
					  	while ( $query->have_posts() ) 
					 $query->the_post(); { 
				?>

				<!-- Inicio RETOS -->
				<div id="contenido2" class="row">
					<div class="col-md-12">
						<p class="text_retos"><?php the_title(); ?></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p class="sub_retos" style="padding-left: 1em;">De cada <?php echo get_post_meta($post->ID, 'total_ninos', true); ?> niños y niñas:</p>
					</div>
				</div>

				<!-- BARRA 1 -->
				<div class="row">
					<div class="col-md-12">
						<div class="barra_1" id="attrText1" data-textval1="<?php echo get_post_meta($post->ID, 'total_ninos', true); ?>%"></div>
					</div>
				</div>
				<!-- BARRA 1 -->

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<!-- BARRA 2 -->
				<div class="row">
					<div class="col-md-12">
						<p style="padding-left: 1em;"><span class="text_barra_az"><?php echo get_post_meta($post->ID, 'primaria_ninos', true); ?></span> <span class="text_barra_regu">empiezan la</span> <span class="text_barra_bold">primaria</span></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="barra_2"  id="attrText2" data-textval2="<?php echo get_post_meta($post->ID, 'primaria_ninos', true); ?>%"></div>
					</div>
				</div>
				<!-- BARRA 2 -->

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<!-- BARRA 3 -->
				<div class="row">
					<div class="col-md-12">
						<p style="padding-left: 1em;"><span class="text_barra_az"><?php echo get_post_meta($post->ID, 'secundaria_ninos', true); ?></span> <span class="text_barra_regu">inician la</span> <span class="text_barra_bold">secundaria</span></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="barra_3" id="attrText3" data-textval3="<?php echo get_post_meta($post->ID, 'secundaria_ninos', true); ?>%"></div>
					</div>
				</div>
				<!-- BARRA 3 -->

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<!-- BARRA 4 -->
				<div class="row">
					<div class="col-md-12">
						<p style="padding-left: 1em;"><span class="text_barra_az"><?php echo get_post_meta($post->ID, 'mediasuperior_ninos', true); ?></span> <span class="text_barra_regu">ingresan a la educación</span> <span class="text_barra_bold">media superior</span></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="barra_4"  id="attrText4" data-textval4="<?php echo get_post_meta($post->ID, 'mediasuperior_ninos', true); ?>%"></div>
					</div>
				</div>
				<!-- BARRA 4 -->

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<!-- BARRA 5 -->
				<div class="row">
					<div class="col-md-12">
						<p style="padding-left: 1em;"><span class="text_barra_az"><?php echo get_post_meta($post->ID, 'superior_ninos', true); ?></span> <span class="text_barra_regu">comienzan la</span> <span class="text_barra_bold">educación superior</span></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="barra_5" id="attrText5" data-textval5="<?php echo get_post_meta($post->ID, 'superior_ninos', true); ?>%"></div>
					</div>
				</div>
				<!-- BARRA 5 -->

				<div class="row">
					<div class="col-md-12">
						<br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div style="width: 60%;" class="text_pie">
							<?php the_content(); ?>
						</div>
					</div>
				</div>		

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>
				<?php } } /* Restore original Post Data */  wp_reset_postdata(); ?>
				<!--  RETOS -->
			</div>
		</div>
		




			<!--  Inicia "INFO. RELEVANTE"  -->
			<div class="container-fluid fondo_nos millones-de-jovenes">
				<?php 
					$query = new WP_Query( 'pagename=millones-de-jovenes' );
					 // The Loop
					  if ( $query->have_posts() ) {
					  	while ( $query->have_posts() ) 
					 $query->the_post(); { 
				?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/>
						</div>
					</div>
					<div class="row acom_elem">
						<div class="col-md-1"></div>
						<div class="col-md-3 text_relv_1 text-center wow fadeIn">
							<?php echo get_post_meta($post->ID, 'millones de jovenes', true); ?>
						</div>

						<div class="col-md-1"></div>

						<div class="col-md-6 wow fadeIn">
							<?php the_content(); ?>
						</div>
						<div class="col-md-1"></div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<br/><br/>
						</div>
					</div>
				</div>
				<?php } } /* Restore original Post Data */  wp_reset_postdata(); ?>
			</div>
			<!--  Fin "INFO. RELEVANTE"  -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/>
					</div>
				</div>
			</div>

			<!-- PRUEBA -->
			<div class="container wow fadeIn">
				<div class="row">
					<div class="col-md-4">
						<div class="container_esp">
						   <div style="max-width: 10em; text-align: center; margin: auto -28% auto 30%;"><p class="t_cir">Becas de Excelencia</p></div>
							
							<svg style="margin: auto auto auto -30%;" class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
								 <circle cx="170" cy="170" r="150" stroke="#AA00FF"/>
								 <circle cx="170" cy="170" r="135" stroke="#2E9DCD"/>
							</svg>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container_esp">
						    <div style="max-width: 10em; text-align: center; margin: auto -28% auto 30%;"><p class="t_cir">Becas de Desarrollo,<br/> Competencias y Talento</p></div>
							
							<svg style="margin: auto auto auto -30%;" class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
								 <circle cx="170" cy="170" r="150" stroke="#AA00FF"/>
								 <circle cx="170" cy="170" r="135" stroke="#2E9DCD"/>
							</svg>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container_esp">
						    <div style="max-width: 10em; text-align: center; margin: auto -28% auto 30%;"><p class="t_cir">Becas de Inglés y Movilidad</p></div>
							
							<svg style="margin: auto auto auto -30%;" class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
								 <circle cx="170" cy="170" r="150" stroke="#AA00FF"/>
								 <circle cx="170" cy="170" r="135" stroke="#2E9DCD"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<!-- PRUEBA -->

			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/>
				</div>
			</div>
			</div>



			<?php 
			$query = new WP_Query( 'pagename=grandes-resultados' );
			 // The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) 
					$query->the_post(); { 

			?>



			<!--	Inicio GRANDES RESULTADOS	-->
			<!-- SECC 5 -->
			<div id="count_c" class="container-fluid fond_az_i wow fadeIn">
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
									<h2 class="formNum">$<span class="counter"><span class="counter"><?php echo  get_post_meta($post->ID, 'data_recaudacion', true); ?></span></h2>
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
									<h2 class="formNum">$<span class="counter"><span class="counter"><?php echo  get_post_meta($post->ID, 'recaudacion_acumulada_data', true); ?></span></h2>
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
									<h2 class="formNum"><span class="counter"><span class="counter"><?php echo  get_post_meta($post->ID, 'graduados_data', true); ?></span></h2>
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
			<!--	Fin GRANDES RESULTADOS	-->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/>
					</div>
				</div>
			</div>

			<!--	Inicio DESCARGA INFORME ANUAL	-->
			<div class="container">
				<!--<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<select id="sel_fe_inf" class="inf_sel">
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
						</select>
					</div>
					<div class="col-md-5"></div>
				</div>-->
				<!--<div class="row">
					<div class="col-md-12"><br/></div>
				</div>-->
				<div class="row acom_elem">
					<div class="col-md-4"></div>
					<div class="col-md-4">

						<!-- <p class="text-center"><a href="<?php echo  get_post_meta($post->ID, 'descarga_informe_anual', true); ?>" target="_blank"><span class="icon_desc"><i class="fas fa-file-download"></i></span> <span class="text_desc_info_a">Descarga el informe anual.</span></a></p> -->
						
						<!--<p class="text-center"><a onclick="javascript:fncDesInf();"><span class="icon_desc"><i class="fas fa-file-download"></i></span> <span class="text_desc_info_a">Descarga el informe anual.</span></a></p>-->
						<p class="text-center"><a href="https://becalos.mx/informeanual/" target="_blank"><span class="icon_desc"><i class="fas fa-file-download"></i></span> <span class="text_desc_info_a">Descarga el informe anual.</span></a></p>
					</div>
					<div class="col-md-4"></div>
				</div>
				
			</div>
			<!--	Fin DESCARGA INFORME ANUAL	-->
			<?php } } /* Restore original Post Data */  wp_reset_postdata(); ?>


			<div class="container">
				<div class="row">
				<div class="col-md-12">
					<br/><br/><br/>
				</div>
				</div>
			</div>
	</main>
	<!-- INFORMES -->


<?php get_footer(); ?>

<script type="text/javascript">
	var urlPDFS = '<?php bloginfo('template_url'); ?>/';
</script>