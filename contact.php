?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pixlfest
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <h2>Got a Question?</h2>
// Insert form on this page

&nbsp;

PixlFest is run by Francis Tuttle Technology Center PixlCREW students. For assistance or registration questions, please complete this form.
If you are interested in speaking at a future conference or sponsoring the event. Feel free to use the form to get in touch with us.


<h2>Find what you need.</h2>

<?php
						get_search_form();

						
					?>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php