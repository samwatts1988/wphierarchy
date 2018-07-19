<?php get_header('splash'); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

	<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/content'); ?>
	
	<?php endwhile; else : ?>
	
		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p>
		<a href="<?php the_field('url'); ?>">
			<?php esc_html_e('Visit the Site', 'wphierarchy'); ?>
		</a>
	</p>

	<p>Template: single-portfolio-php-for-wordpress.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
