<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

	<header class="entry-header">

		<h1><?php the_title(); ?></h1>

		<h2><?php the_title('<h2><a href="'. get_the_permalink() . '">', '</a></h2>'); ?></h2>
	</header>

	<div class="entry-content">

		<?php the_content(); ?>

	</div>

</article>