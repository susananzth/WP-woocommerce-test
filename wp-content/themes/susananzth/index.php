<?php get_header(); ?><!-- Call to header partial -->
		<section id="main-content">
		    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		    <!-- Si hay posts para mostrar, mientras los consiga, por cada post carga la información. Se cierra el while y el if al final de los article -->
				<article class="post resume">
						<header class="post-title">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				                    <!-- the_permalink() enlaza el título al detalle del artículo. the_title() va cargando todos los títulos  -->
								<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <?php the_category(', '); ?></small>
						</header>
						<div class="post-content">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo &rarr;', 'win'); ?></a>
						</div>
				</article>	<!-- article -->
	      <?php endwhile; else: ?>
	      <?php endif; ?>
	      <?php if( get_next_posts_link() || get_previous_posts_link() ) { ?>
	          <div class="posts-nav cf">
	              <?php next_posts_link( __('&larr; Previos', 'win')); ?>
	              <?php previous_posts_link( __('Recientes &rarr;', 'win')); ?>
	          </div>
	      <?php } ?>
		</section><!-- /#main-content -->
<?php get_footer(); ?><!-- Call to footer partial -->
