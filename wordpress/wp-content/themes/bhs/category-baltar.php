<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="entry-header">
				  <h1 class="entry-title">Baltar: a family saga</h1>
				</header>


				<?php /* Start the Loop */
				//Sort the loop oldest to newest
				//$baltar_order = array('order' => 'ASC');
				$baltar_order = '&order=ASC';
				query_posts($query_string . $baltar_order);
				?>
				<?php while ( have_posts() ) : the_post(); ?>

	<div class="entry-content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
  </div>

				<?php endwhile; ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
