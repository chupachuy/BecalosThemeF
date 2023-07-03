<?php get_header(); ?>


<!--Main layout-->
	<main>
		<!-- SECC 1 -->
		<div class="container-fluid">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/>
					</div>
				</div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="row">
					<div class="col-md-12">
						<?php
							$tags = get_the_tags( $post->ID );
							$separator = ', ';
							$output = '';
							if($tags){
								echo '<div class="tx_1_post_not text-center">';
								foreach($tags as $tag) {
								 // dpm($tag) here by uncomment you can check tag slug which you want to exclude
								 if($tag->slug != "yourtag"){ // replace yourtag with you required tag name
								 	$output .= $tag->name;
								 }
								}
								echo trim($output, $separator);
								echo "</p>";
								echo "</div>";
							}
						?>
						<h2 class="h2_gris text-center"><?php the_title(); ?></h2>
						<br/>
						<h3 class="tx_2_post_not text-center"><?php echo get_the_author(); ?></h3>
						<br/>
						<p class="tx_3_post_not text-center"><?php the_date('Y-m-d');?></p>
						<br/><br/>
					</div>

					<div class="row tx_4_post_not">
						<div class="col-md-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				<?php endwhile; endif; ?>

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>

				
				<!-- - - - - - - - - - - - - - - - - Pruebas - - - - - - - - - - - - - - - -->


				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<h2 class="h2_gris text-center">Otras noticias</h2>
						<br/>
					</div>
				</div>

				<div class="separar"></div>
				<div class="separar"></div>


				<div class="row">
					<?php $args = Array(
					    'category__and' => 7,
					    "orderby"=>"rand",
					    "posts_per_page"=>3,
					);
					query_posts($args); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4">
						<!-- Card -->
						<div class="card">
							<!-- Card image -->
							<!-- <img class="card-img-top" src="img/ind/card_1.jpg" alt="Card image cap"> -->
							<div class="card-img-top">
								<?php the_post_thumbnail('full', ['class' => 'img_not_card', 'title' => 'full']); ?>
							</div>
							<!-- Card content -->
							<div class="card-body l_card_not">
								<!-- Title -->
								<?php
								
									$tags = get_the_tags( $post->ID );
									$separator = ', ';
									$output = '';
									if($tags){
									echo '<div class="label-category">';
									        foreach($tags as $tag) {
									            // dpm($tag) here by uncomment you can check tag slug which you want to exclude
									            if($tag->slug != "yourtag"){ // replace yourtag with you required tag name
									               $output .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "Ver todas las noticias en %s", 'tracks' ), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
									            }
									          }
									            echo trim($output, $separator);
									    echo "</div>";
									}
								?>
								<div class="blog_not_text_3">
									<h5><?php the_title(); ?></h5>
								</div>
								
								<!-- Text -->
								<div class="blog_not_text_4">
									<?php the_excerpt(); ?>
								</div>
								<p class="blog_not_text_5 text-right"><a  href="<?php the_permalink(); ?>">Seguir leyendo</a></p>
								<!-- Text -->
							</div>
						</div>
						<!-- Card -->
						<br/><br/><br/>
					</div>
					<?php endwhile; endif; ?>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
		<!-- SECC 1 -->
	</main>
</div>


<?php get_footer(); ?>