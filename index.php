<?php

	get_header();

	?><main class="ast-main">

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
	</main>

<?php get_footer(); ?>
