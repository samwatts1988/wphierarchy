<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

	<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/content'); ?>
	
	<?php endwhile; else : ?>
	
		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p>
		<a class="button" href="<?php the_field('url'); ?>">
			<?php esc_html_e('Visit the Site', 'wphierarchy'); ?>
		</a>
	</p>

	<?php the_content(); ?>

	<p>
		Skills:
		<?php the_terms($post->ID, 'skills'); ?>
	</p>

	<p>Template: single-portfolio.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
