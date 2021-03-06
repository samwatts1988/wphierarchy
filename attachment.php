<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

	<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

		<header class="entry-header">

			<?php echo get_post_format( $post->ID ); ?>

			<h1><?php the_title(); ?></h1>

		</header>

		<div class="entry-content">
			
			<p><a href="<?php echo $post->guid; ?>">Download</a></p>
		
			<?php the_content(); ?>

		</div>

	</article>
	
	<?php endwhile; else : ?>
	
		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p>Template: attachment.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
