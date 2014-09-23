<?php

// class if thumbnail is present
$thumbclass = has_post_thumbnail(get_the_ID()) ? 'ast-has-thumb' : 'ast-no-thumb';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ast-index-article '.$thumbclass); ?>>
	<?php if (has_post_thumbnail()) { ?>
	<a href="<?php echo the_permalink();?>"><?php the_post_thumbnail(array(90,90));?></a>
	<?php } ?>
	<div class="ast-archive-post-inner">
		<?php the_title( '<h2 class="ast-entry-title"><a href="'.get_permalink().'">', '</a></h2>'); ?>
		<p class="ast-archive-post-author"><?php _e('Written by:','aesop-story-theme');?> <span><?php the_author();?></span></p>
		<time datetime="<?php echo the_time('c');?>"><?php the_time('F jS, Y');?></time>
	</div>
</article><?php
