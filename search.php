<?php

	get_header();

	?>

		<?php get_template_part( 'content/viewing' ); ?>

		<div class="ast-index-listing ast-width clearfix">

			<?php

			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'content/index-post' );

				endwhile;

			else :

				get_template_part( 'content', 'none' );

			endif;

			?>

		</div>

		<?php echo ast_get_pagination();?>


<?php get_footer(); ?>
