<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
<div style="text-align: center;">
<p>A Frank Enterprises Production<br />
Sister Site:. <a href="http://www.centralportland.com">Central Portland: all things great about Portland</a> .:Sister Site</p>
</div>
			<div id="site-generator">
Proudly Powered by WordPress
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>