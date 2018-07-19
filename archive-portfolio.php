<?php get_header(); ?>

  <div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

	<h1><?php the_archive_title(); ?></h1>

	<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/content-posts', 'portfolio' ); ?>
	
	<?php endwhile; else : ?>
	
		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p>Template: archive-portfolio.php</p>

    </main>

  </div>

<?php get_footer(); ?>
