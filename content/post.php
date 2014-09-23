<?php 

	// get image source
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'novella-post-cover');

	// inline style if post thumb is present
	$style = has_post_thumbnail() ? sprintf('style="background:url(%s);background-size:cover;background-position:top center;"',$imgsrc[0]) : false;

do_action('ast_article_before');?>
<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'class' => 'ast-article' ) );?> >
	<header class="ast-entry-mast">

		<div class="ast-entry-mast-inner-wrap">
			<div class="ast-entry-mast-inner">
				<?php echo the_title('<h1 class="ast-entry-title">','</h1>');?>
				<span class="ast-entry-author"><span><?php echo apply_filters('ast_story_by', __('by','aesop-story-theme'));?></span> <?php the_author();?></span>
			</div>
		</div>

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="ast-entry-mast-img" <?php echo apply_filters('ast_post_top_styles', $style);?>></div>
		<?php } ?>

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
