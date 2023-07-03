<div class="container-fluid">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h2 class="h2_gris text-center">Noticias</h2>
					<br/>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br/><br/>
				</div>
			</div>
			<div class="row dist">
				<div id="owl-carousel2" class="owl-carousel owl-theme">
					<?php $args = Array(
						'category__and' => 7,
						 "orderby"=>"rand",
						  "posts_per_page"=>8,
						);
						query_posts($args); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-12">
						<!-- Card -->
						<div class="card">
							<!-- Card image -->
							<!-- <img class="card-img-top" src="img/ind/card_1.jpg" alt="Card image cap"> -->
							<div class="card-img-top">
								<?php the_post_thumbnail('full', ['class' => 'img_not_card', 'title' => 'full']); ?>
							</div>

							<?php if(has_tag('talento')){
								echo '<div class="distintivo-talento"></div>';
							}elseif(has_tag('english-challenge')){
								echo '<div class="distintivo-english-challenge"></div>';
							}elseif(has_tag('movilidad')){
								echo '<div class="distintivo-movilidad"></div>';
							}elseif(has_tag('becas-de-excelencia')){
								echo '<div class="distintivo-becas-de-excelencia"></div>';
							}elseif(has_tag('desafio-b21')){
								echo '<div class="distintivo-desafio-b21"></div>';
							}elseif(has_tag('capacitacion-docente')){
								echo '<div class="distintivo-capacitacion-docente"></div>';
							}elseif(has_tag('desarrollo-de-competencias')){
								echo '<div class="distintivo-desarrollo-de-competencias"></div>';
							}else{
								echo '<div class="distintivo-default"></div>';
							} ?>
							<!-- Card content -->
							
							<div class="card-body l_card_not">

								<div class="row">

									<?php if(has_tag('talento')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_1.png"></div>
									<?php }elseif(has_tag('english-challenge')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_2.png"></div>
									<?php }elseif(has_tag('movilidad')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_3.png"></div>
									<?php }elseif(has_tag('becas-de-excelencia')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_4.png"></div>
									<?php }elseif(has_tag('desafio-b21')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_5.png"></div>	
									<?php }elseif(has_tag('capacitacion-docente')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_6.png"></div>
									<?php }elseif(has_tag('desarrollo-de-competencias')){ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/ind/prog_7.png"></div>
									<?php }else{ ?>
										<div class="col-md-3 distintivo"><img src="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png"></div>
									<?php } ?>
									<div class="col-md-9">
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
											               $output .= '<span class="align-middle"><a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "Ver todas las noticias en %s", 'tracks' ), $tag->name ) ) . '">'.$tag->name.'</a></span>'.$separator;
											            }
											          }
											            echo trim($output, $separator);
											    echo "</div>";
											}
										?>
									</div>
								</div>
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
						<br/>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/>
				</div>
			</div>
		</div>
	</div>