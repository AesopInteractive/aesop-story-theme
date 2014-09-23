
		<footer id="ast-footer" itemscope itemtype="http://schema.org/WPFooter" class="ast-footer">
			<div class="ast-footer-inner ast-width">

			<?php 

				$footertext = get_theme_mod('ast_footer_text','<p>Test</p>');

				if ($footertext) {
					echo $footertext;
				} ?>
			</div>

			<div>
				<?php wp_footer();?>
			</div>

		</footer>

		<?php do_action('aesop_theme_body_inside_bottom'); // Aesop Universal Theme Hook ?>

	</body>

	<?php do_action('aesop_theme_body_after'); // Aesop Universal Theme Hook ?>

</html>
