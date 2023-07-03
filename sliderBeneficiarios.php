<?php query_posts(array(
		'post_type' => 'sliders',
		/*'showposts' => 5,*/
		'category_name' => 'nuestros-beneficiarios'
	));
?>

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
					<h2 class="h2_gris text-center">Se parte del futuro de nuestros beneficiarios</h2>
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
				<div id="owl-carousel2" class="owl-carousel owl-theme">
					<?php if(have_posts() ) { while (have_posts()) : the_post(); ?>
					<div class="col-md-12">
						<!-- Card -->
						<div class="card">
							<!-- Card image -->
							<!-- <img class="card-img-top" src="img/ind/card_1.jpg" alt="Card image cap"> -->
							<div class="card-img-top">
								<!--<img class="img_card" src="<?php bloginfo('template_url'); ?>/img/ind/benef_1.jpg">-->
								<?php the_post_thumbnail('full', ['class' => 'img_card', 'title' => 'full']); ?>
							</div>
							<!-- Card content -->
							<div class="card-body">
								<!-- Title -->
								<h5 class="p_ti_card"><?php echo  get_post_meta($post->ID, 'programa', true); ?></h5>
								<p class="p_sub_his"><?php echo  get_post_meta($post->ID, 'subprograma', true); ?></p>
								<h5 class="p_ti_card"><span class="tam_2 text_azul"><?php the_title(); ?></span></h5>
								<br/>
								<!-- Text -->
								<div class="card-text">
									<?php the_content(); ?>
								</div>
								<p class="text-right"><a href="#" class="btn_t_vm">Ver más</a></p>
							</div>
						</div>
						<!-- Card -->
						<br/>
					</div>
					<?php endwhile; } wp_reset_query(); ?>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-12">
					<br/><br/><br/><br/><br/>
				</div>
			</div>
		</div>
	</div>