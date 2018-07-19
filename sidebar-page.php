<?php 

if (! is_active_sidebar('page-sidebar')) {
	return;
}

?>

<aside id="secondary" class="widget-area" role="complementary">

	<?php wp_loginout( get_permalink() ) ?>

	<?php if( !is_user_logged_in() ) : ?>
		
		<!-- WP GET ARCHIVES -->
		<?php 

			$args = [
				'type' => 'weekly',
				'limit' => 10,
				'show_post_count' => true,
				'order' => 'ASC'
			];

			wp_get_archives( $args );

		?>

		<!-- LOGIN FORM -->
		<?php 

			$args = [
				'label_username' => 'Enter your username',
				'label_password' => 'Enter your password'
			];

			wp_login_form( $args ); 

		?>

		<!-- CALENDAR TAGS -->
		<?php get_calendar(); ?>


	<?php endif; ?>

	<?php dynamic_sidebar('page-sidebar'); ?>

</aside>
