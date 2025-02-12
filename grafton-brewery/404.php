<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grafton-brewery
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">


			<div class="page-content">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'grafton-brewery' ); ?></h1>
				<a href="/"><p class="return">Return Home</p></a>
				<img src="/wp-content/uploads/2023/06/grafton-brewery-logo.png" alt="grafton-brewery">
			</div><!-- .page-content -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
