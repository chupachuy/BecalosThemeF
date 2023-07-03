<?php
/*
* Template name: Programas
*/
?>
<?php get_header(); ?>
<?php include('btnDonar.php'); ?>
<!-- PROGRAMAS -->
<main>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/><br/>
				</div>
			</div>
			<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
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
				<div class="col-md-12 tex_sec_sec">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; } ?>
			<div class="row">
				<div class="col-md-12">
					<br/><br/>
				</div>
			</div>
			<!-- Inicia menú -->
			<div class="accordion" id="accordionExample">

				<!-- Becas de excelencia -->
				<?php
				$query = new WP_Query( 'pagename=becas-de-excelencia' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe1" aria-expanded="false" aria-controls="collapseProgBe1">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_1"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe1" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->

				<!--Talento -->
				<?php
				$query = new WP_Query( 'pagename=talento' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe2" aria-expanded="false" aria-controls="collapseProgBe2">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_2"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe2" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->

				<!--English Challeneg -->
				<?php
				$query = new WP_Query( 'pagename=english-challenge' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe3" aria-expanded="false" aria-controls="collapseProgBe3">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_3"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe3" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<?php if (get_post_meta( get_the_ID(), 'video_youtube', true ) ) { ?>

									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <?php }else{
									 	echo '<p></p>';
									 }

									 ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->


				<!--Talento -->
				<?php
				$query = new WP_Query( 'pagename=movilidad' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe4" aria-expanded="false" aria-controls="collapseProgBe4">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_4"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe4" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>

									<?php if (get_post_meta( get_the_ID(), 'video_youtube', true ) ) { ?>

									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <?php }else{
									 	echo '<p></p>';
									 }

									 ?>

								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->



				<!--Desafio B21 -->
				<?php
				$query = new WP_Query( 'pagename=desafio-b21' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe5" aria-expanded="false" aria-controls="collapseProgBe5">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_5"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe5" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<?php if (get_post_meta( get_the_ID(), 'video_youtube', true ) ) { ?>

									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <?php }else{
									 	echo '<p></p>';
									 }

									 ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->

				<!--Capacitación docente -->
				<?php
				$query = new WP_Query( 'pagename=capacitacion-docente' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe6" aria-expanded="false" aria-controls="collapseProgBe6">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_6"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe6" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<?php if (get_post_meta( get_the_ID(), 'video_youtube', true ) ) { ?>

									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <?php }else{
									 	echo '<p></p>';
									 }

									 ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->


				<!--Desarrollo de competencias -->
				<?php
				$query = new WP_Query( 'pagename=desarrollo-de-competencias' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() )
				$query->the_post(); { ?>
				<div class="card sin_somb">
					<div class="card-header" id="progBe1" style="cursor: pointer;">
						<h2 class="mb-0" data-toggle="collapse" data-target="#collapseProgBe7" aria-expanded="false" aria-controls="collapseProgBe7">
						<?php the_post_thumbnail('full', ['class' => 'img_titu_col', 'title' => 'full']); ?><span class="titu_coll_7"><?php the_title(); ?></span>
						</h2>
					</div>
					<div id="collapseProgBe7" class="collapse" aria-labelledby="progBe1" data-parent="#accordionExample">
						<div class="card-body">
							<p class="text_num"><?php echo  get_post_meta($post->ID, 'programa_beneficiados', true); ?></p>
							<br/>
							<?php the_content(); ?>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
									<h3 class="text-center h3_sec_gen">Grandes historias</h3>
									<br/>
									<?php if (get_post_meta( get_the_ID(), 'video_youtube', true ) ) { ?>

									<iframe width="560" height="315" style="margin-left: calc(50% - 280px);" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									 <?php } ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<a class="btn_con_his" href="<?php bloginfo('url'); ?>/historias/">Conoce más historias</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br/><br/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } }
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				<!-- CARD 1 -->
				
				
				
			</div>
			<!-- Termina menú -->
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/><br/>
				</div>
			</div>
			
		</div>
	</div>
</main>
<!-- PROGRAMAS -->
<?php get_footer(); ?>