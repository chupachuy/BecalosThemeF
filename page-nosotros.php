<?php
/*
* Template name: Acerca de nosotros
*/
?>
<?php get_header(); ?>
<?php include('btnDonar.php'); ?>


<!-- NOSOTROS -->
	<main>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container-fluid">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center titu_sec"><?php the_title(); ?></h1>
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
						<br/>
					</div>

					<div class="col-md-12">
						<!--<img src="img/nos/card_2.jpg" class="img_nos" />-->
						<?php the_post_thumbnail('full', ['class' => 'img_nos', 'title' => 'full']); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/>
					</div>
				</div>

				
			</div>


			<!--  Inicia "FRASE"  -->
			<div class="container-fluid sin_padd fondo_nos">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3 class="text_res_nos text-right"><?php echo  get_post_meta($post->ID, 'cita', true); ?></h3>
							
							<p class="text_res_az text-right"><?php echo  get_post_meta($post->ID, 'autor_cita', true); ?></p>
							
							<p class="text_res_min text-right"><?php echo  get_post_meta($post->ID, 'cita_2', true); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/>
						</div>
					</div>
				</div>
			</div>
			<!--  Fin "FRASE"  -->
			<?php endwhile; else: ?>
			<?php endif; ?>


			<!-- Inicia  Misión  /  Visión -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/>
					</div>
				</div>

				
				<div class="accordion" id="accordionExample">

					<!-- CARD 1 -->
					<div class="card sin_somb">
						<?php 
			            $query = new WP_Query( 'pagename=mision' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>
						<div id="progBe1" class="margin_sec_collaps" style="cursor: pointer;">
							<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe1" aria-expanded="false" aria-controls="collapseProgBe1">
								<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_1"><?php the_title(); ?></span>
							</h2>
						</div>

						<div id="collapseProgBe1" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
							<div class="card-body tex_sec_sec">
								<?php the_content(); ?>
							</div>
						</div>
						<?php }
		                    }
		                    /* Restore original Post Data */
		                    wp_reset_postdata();
		                  ?>
					</div>
					<!-- CARD 1 -->

					<!-- CARD 1 -->
					<div class="card sin_somb">
						<?php 
			            $query = new WP_Query( 'pagename=vision-2' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>
						<div id="progBe1" class="margin_sec_collaps" style="cursor: pointer;">
							<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe2" aria-expanded="false" aria-controls="collapseProgBe2">
								<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_1"><?php the_title(); ?></span>
							</h2>
						</div>

						<div id="collapseProgBe2" class="collapse" aria-labelledby="progBe2" data-parent="#accordionExample">
							<div class="card-body tex_sec_sec">
								<?php the_content(); ?>
							</div>
						</div>
						<?php }
		                    }
		                    /* Restore original Post Data */
		                    wp_reset_postdata();
		                  ?>
					</div>
					<!-- CARD 1 -->
				</div>
				

				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/>
					</div>
				</div>	
			</div>
			<!-- Termina  Misión  /  Visión -->

			
			<!-- Inicia  NUESTRO IMPACTO -->
			<div class="conteiner-fluid sin_padd fondo_nos">
				<div class="conteiner">
					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/><br/>
						</div>
					</div>
					
					<!-- PAGE NUESTRO IMPACTO -->

					<?php 
			            $query = new WP_Query( 'pagename=nuestro-impacto' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

			            	<?php the_content(); ?>

			            <?php }
		                    }
		                    /* Restore original Post Data */
		                    wp_reset_postdata();
		                  ?>

					<!-- PAGE NUESTRO IMPACTO -->

					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/>
						</div>
					</div>
				</div>
			</div>
			<!-- Fin  NUESTRO IMPACTO -->


			<!-- Inicio  ALIADOS -->
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h3 class="text_res_nos_mor text-center">¡Los sueños cumplidos también son tuyos!</h3>
					<br/><br/>
					<p class="titu_sec text-center">Aliados</p>

					<!--<img src="img/nos/card_3.png" class="img_nos">-->
				</div>
			</div>

			<div class="container">
				
				<div class="row justify-content-center">
					<?php query_posts(array(
						'post_type' => 'Logos',
						'showposts' => 4,
						'category_name' => 'bancos-linea-1'
						));
					?>
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-3 col-sm-4 col-6 logo-grande wow zoomIn">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div>


			<div class="container-fluid">
				<div class="row justify-content-center">
					<?php query_posts(array(
						'post_type' => 'Logos',
						'showposts' => 3,
						'category_name' => 'bancos-linea-2'
						));
					?>
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-3 col-sm-3 col-4 logo-grande  wow zoomIn">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div>

			<div class="separar"></div>

			<div class="container-fluid">
				<div class="row justify-content-center">
					<?php query_posts(array(
						'post_type' => 'Logos',
						'showposts' => 8,
						'category_name' => 'bancos-linea-3'
						));
					?>
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-1 col-sm-3 col-2 logo-thumb  wow zoomIn">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div>

			<div class="separar"></div>

			<div class="container-fluid">
				<div class="row justify-content-center">
					<?php query_posts(array(
						'post_type' => 'Logos',
						'showposts' => 7,
						'category_name' => 'bancos-linea-4'
						));
					?>
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-1 col-sm-3 col-2 logo-thumb  wow zoomIn">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div>

			<div class="separar"></div>

			<div class="container-fluid">
				<div class="row justify-content-center">
					<?php query_posts(array(
						'post_type' => 'Logos',
						'showposts' => 6,
						'category_name' => 'bancos-linea-5'
						));
					?>
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-1 col-sm-3 col-2 logo-thumb  wow zoomIn">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/>
				</div>
			</div>
			<!-- Fin  ALIADOS -->


			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8"><hr/></div>
				<div class="col-md-2"></div>
			</div>


			<!-- Inicio AMIGOS -->
			<div class="container-fluid sin_padd">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<br/><br/><br/><br/>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<p class="titu_sec text-center">Amigos</p>
							<!--<img src="img/nos/card_4.png" class="img_nos">-->
						</div>
					</div>
				</div>

				<div class="separar"></div>
				<div class="separar"></div>

				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<?php query_posts(array(
							'post_type' => 'Logos',
							'showposts' => 5,
							'category_name' => 'amigos-linea-1'
							));
						?>
						<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
						<div class="col-md-2 col-sm-6 col-4 logo-grande wow zoomIn">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php endwhile; } wp_reset_query(); ?>
					</div>
				</div>
				<div class="separar"></div>

				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<?php query_posts(array(
							'post_type' => 'Logos',
							'showposts' => 5,
							'category_name' => 'amigos-linea-2'
							));
						?>
						<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
						<div class="col-md-1 col-sm-4 col-3 logo-thumb wow zoomIn">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php endwhile; } wp_reset_query(); ?>
					</div>
				</div>
				<div class="separar"></div>

				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<?php query_posts(array(
							'post_type' => 'Logos',
							'showposts' => 9,
							'category_name' => 'amigos-linea-3'
							));
						?>
						<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
						<div class="col-md-1 col-sm-3 col-2 logo-thumb wow zoomIn">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php endwhile; } wp_reset_query(); ?>
					</div>
				</div>
				<div class="separar"></div>

				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<?php query_posts(array(
							'post_type' => 'Logos',
							'showposts' => 5,
							'category_name' => 'amigos-linea-4'
							));
						?>
						<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
						<div class="col-md-1 col-sm-3 col-2 logo-thumb wow zoomIn">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php endwhile; } wp_reset_query(); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/>
					</div>
				</div>
			</div>
			<!-- Fin AMIGOS -->
		</div>
	</main>
	<!-- NOSOTROS -->


<?php get_footer(); ?>