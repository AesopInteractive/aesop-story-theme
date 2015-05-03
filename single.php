<?php

	get_header();

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part('content/post');

				if ( comments_open() || get_comments_number() )
					comments_template();

			endwhile;

		else :

			get_template_part( 'content/none' );

		endif;
get_footer();