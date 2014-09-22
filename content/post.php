<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'class' => 'ast-article' ) );?> >
	<?php echo the_title('<h2 itemprop="title">','</h2>');?>
	<?php the_content(); ?>
	<?php wp_link_pages( array(
		'before'      => '<div class="ast-post-pagination"><span class="ast-post-pagination-title">' . __( 'Pages:', 'aesop-story-theme' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) );
	?>
</article>
