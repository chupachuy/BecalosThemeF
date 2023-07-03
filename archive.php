<?php get_header(); ?>


<!--Main layout-->
	<main>
		<!-- SECC 1 -->
		<div class="container-fluid">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h2 class="h2_gris text-center"><?php single_tag_title( __( '', 'textdomain' ) ); ?></h2>
						<!--<p class="text_1_menu_post_not text-center">Entérate de las noticias más relevantes de nuestros programas</p>-->
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/>
					</div>
				</div>
				

				<div class="row">
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
									echo '<div class="tags-category">';
									        foreach($tags as $tag) {
									            // dpm($tag) here by uncomment you can check tag slug which you want to exclude
									            if($tag->slug != "yourtag"){ // replace yourtag with you required tag name
									               $output .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "Ver todas las noticias en %s", 'tracks' ), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
									            }
									          }
									            echo trim($output, $separator);
									        echo "</p>";
									    echo "</div>";
									}
								?>
								<div class="title_noticias">
									<h5 class="text_3_menu_post_not"><?php the_title(); ?></h5>
								</div>
								<!-- Text -->
								<div class="text_4_menu_post_not">
									<?php the_excerpt(); ?>
								</div>

								<div class="text_5_menu_post_not text-right">
									<a href="<?php the_permalink(); ?>">Seguir leyendo</a>
								</div>
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