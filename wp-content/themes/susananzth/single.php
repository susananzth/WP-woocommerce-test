<?php get_header(); ?><!-- Call to header partial -->

			<section id="main-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Si hay posts, mientras haya posts, muestra el post -->

				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
                        <!-- Muestra el título del post -->
						<small class="meta"><?php the_time(get_option('date_format')); ?> &bull; <?php the_category(', '); ?></small>
                        <!-- Muestra la fecha y hora en que fue publicado el post y le da formto. Muestra la categoría -->
					</header>
					<div class="post-content">
						<?php the_content(); ?>
                        <!-- Muestra el artículo -->
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif ?>
			</section><!-- /#main-content -->

			<?php get_sidebar(); ?><!-- Call to sidebar partial -->

<?php get_footer(); ?><!-- Call to footer partial -->


<section id="global-content-fullwidth" class="cf">
		<section id="main-content" class="fullwidth">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Si hay posts, mientras haya posts, muestra el post -->
				<article class="post">
						<header class="post-title">
								<h1><?php the_title(); ?></h1>
								<!-- Muestra el título del post -->
						</header>
						<div class="post-content">
								<?php the_content(); ?>
								<!-- Muestra el artículo -->
						</div>
				</article>	<!-- article -->
				<?php endwhile; endif ?>
		</section><!-- /#main-content -->
</section><!-- /#global-content -->
