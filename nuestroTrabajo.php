<!-- SECC 2 -->
		<div class="container">

			<div id="progId" class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/>
				</div>
			</div>

			 
            <?php 
            $query = new WP_Query( 'pagename=conoce-nuestro-trabajo' );
              // The Loop
               if ( $query->have_posts() ) {
               	while ( $query->have_posts() ) 
            $query->the_post(); { ?>
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2_gris text-center"><?php the_title(); ?></h2>
					<br/>
					<h3 class="h3_gris text-center"><?php the_content(); ?></h3>
				</div>
				 <?php }
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                  ?>
			</div>

			<div class="row">
				<div class="col-md-12">
					<br/><br/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div id="owl-carousel" class="owl-carousel owl-theme">
						<?php 
			            $query = new WP_Query( 'pagename=talento' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>
						
						<div class="btn_carousel" onclick="javascript:modProg(1);">
							<div class="row">
								<div class="col-md-12">
									<!--<img class="img_prog" src="<?php bloginfo('template_url'); ?>/img/ind/prog_1.png">-->
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=english-challenge' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(2);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=movilidad' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(3);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=becas-de-excelencia' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(4);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=desafio-b21' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(5);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                 <?php 
			            $query = new WP_Query( 'pagename=capacitacion-docente' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(6);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=desarrollo-de-competencias' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<div class="btn_carousel" onclick="javascript:modProg(7);">
							<div class="row">
								<div class="col-md-12">
									<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
								</div>
								<div class="col-md-12 carr_pro text-center">
									<?php the_title(); ?>
								</div>
							</div>
						</div>

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/>
				</div>
			</div>


		</div>



<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modProg">
  Launch demo modal
</button> -->

		<!-- Modal PROGRAMAS -->
		<div class="modal fade" id="modProg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
						<br/>

						<?php 
			            $query = new WP_Query( 'pagename=talento' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 1 -->
						<div id="progMod1" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-8 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 1 -->

						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>


		                 <?php 
			            $query = new WP_Query( 'pagename=english-challenge' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 2 -->
						<div id="progMod2" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 2 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=movilidad' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 3 -->
						<div id="progMod3" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 3 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=becas-de-excelencia' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 4 -->
						<div id="progMod4" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 4 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=desafio-b21' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 5 -->
						<div id="progMod5" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 5 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=capacitacion-docente' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 6 -->
						<div id="progMod6" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 6 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

		                <?php 
			            $query = new WP_Query( 'pagename=desarrollo-de-competencias' );
			              // The Loop
			               if ( $query->have_posts() ) {
			               	while ( $query->have_posts() ) 
			            $query->the_post(); { ?>

						<!-- Prog 7 -->
						<div id="progMod7" class="modOc">
							<div class="row">
								<div class="col-md-3">
									<div class="il_mod">
										<div class="row">
											<div class="col-md-12">
												<?php the_post_thumbnail('full', ['class' => 'img_prog', 'title' => 'full']); ?>
											</div>
											<div class="col-md-12 carr_pro text-center">
												<?php the_title(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text_modProg col-md-9 contMod">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<!-- Prog 7 -->
						<?php }
		                   }
		                   /* Restore original Post Data */
		                   wp_reset_postdata();
		                 ?>

					</div>
					
				</div>
			</div>
		</div>
		<!-- Modal PROGRAMAS -->
		<!-- SECC 2 -->