<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

	<header class="entry-header">

		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>		
			</a>
		</h2>

		<?php the_post_thumbnail( 'full' ); ?>

	</header>

	<div class="entry-content">

		<?php the_excerpt(); ?>

	</div>

</article>