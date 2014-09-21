<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'class' => 'ast-index-article' ) );?> >
	<?php echo the_title('<h2>','</h2>');?>
	<?php echo the_content();?>
</article>