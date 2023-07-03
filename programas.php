<?php get_header(); ?>
<?php include('btnDonar.php'); ?>
<?php echo '<input id="ver_his" type="hidden" value="'.$_GET['secc'].'">'; ?> 
<!-- Loop exclude category ('cat=-7,-8,-9') -->

<!-- Bottom bar with filter and cart info -->
	<div class="bar">
		<span class="filter__label">Programas: </span>
		<div class="filter">
			
			<button id="tod" class="action filter__item filter__item--selected" data-filter="*">Todos</button>
			<button id="bde" class="action filter__item" data-filter=".becas-de-excelencia"><i class="icon icon--jacket"></i><span class="action__text">Becas de excelencia</span></button>
			<button id="tal" class="action filter__item" data-filter=".talento"><i class="icon icon--shirt"></i><span class="action__text">Talento</span></button>
			<button id="ech" class="action filter__item" data-filter=".english-challenge"><i class="icon icon--dress"></i><span class="action__text">English challenge</span></button>
			<button id="mov" class="action filter__item" data-filter=".movilidad"><i class="icon icon--trousers"></i><span class="action__text">Movilidad</span></button>
			<button id="db21" class="action filter__item" data-filter=".desafio-b21"><i class="icon icon--shoe"></i><span class="action__text">Desafio B21</span></button>
			<button id="cad" class="action filter__item" data-filter=".capacitacion-docente"><i class="icon icon--shoe"></i><span class="action__text">Capacitación docente</span></button>
			<button id="ddc" class="action filter__item" data-filter=".desarrollo-de-competencias"><i class="icon icon--shoe"></i><span class="action__text">Desarrollo de competencias</span></button>
		</div>
		<button style="cursor: none; display: none;" class="cart">
			<span class="text-hidden"></span>
			<span class="cart__count"></span>
		</button>
	</div>

	<!-- Main view -->
	<div class="view" style="height: auto !important;">
		<!-- Blueprint header -->
		<!-- Grid -->
		<section style="top: 0em; padding-bottom: 15em;" class="grid grid--loading">
			<!-- Loader -->
			<!--<img class="grid__loader" src="img/his/grid.svg" width="60" alt="Loader image" /> -->
			<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
			<div class="grid__sizer"></div>

			<?php $custom_query = new WP_Query('cat=-7');
			$term = get_queried_object();
			$category = get_the_category(); 
			/*$category = get_the_category( $id );*/
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="grid__item <?php echo $term->slug; ?>">
					<iframe style="width: 100%;" src="https://www.youtube.com/embed/<?php echo  get_post_meta($post->ID, 'video_youtube', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="meta">
						<a class="btn_his_1" href="programas.php"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></a>
						<?php echo $term->slug; ?>

					</div>
					<!--<button class="action action--button action--buy"></button>-->
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>

			<div class="fin_his"></div>

		</section>
		<!-- /grid-->
	</div>
	<!-- /view -->

	<br/><br/><br/><br/><br/><br/><br/><br/>


<?php get_footer(); ?>