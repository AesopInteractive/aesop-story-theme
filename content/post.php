<?php do_action('ast_article_before');?>
<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'class' => 'ast-article' ) );?> >
	<header>
		<?php echo the_title('<h2 itemprop="title">','</h2>');?>
	</header>
	<section class="ast-entry">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before'      => '<div class="ast-post-pagination"><span class="ast-post-pagination-title">' . __( 'Pages:', 'aesop-story-theme' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
		?>
	</section>
	<footer class="ast-post-meta ast-width">
		<div class="ast-cat-links"><?php echo get_the_category_list( _x( '<span>&middot;</span> ', '', 'aesop-story-theme' ) ); ?></div>
		<?php echo get_the_tag_list('<div class="ast-tag-links">','<span>&middot;</span> ','</div>'); ?>
	</footer>
</article>
<?php do_action('ast_article_after');?>
