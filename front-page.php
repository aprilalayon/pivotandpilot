<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pivot-pilot
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="landing-page">
			    
			    <div class="container-landing-page">
			        
			        <figure classs="container-lines">
			            <span class="line"></span>
			            <span class="line"></span>
			            <span class="line"></span>
			            <span class="line"></span>
			            <span class="line"></span>
			            <span class="line"></span>
			        </figure>
			        
			        <article class="main-article">
			            
                        <h1 class=led>Our LED configuration</h1>
			            
			            <object type="image/svg+xml" data="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/raysent-the-brightest.svg" class="brightest">
			            </object>
			            
			            <p>for focused areas and wide settings</p>
			            
			        </article>
			        
			        <picture class="image-container">
			            
			            <source media="(min-width: 650px)" srcset="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/raysent-led-light-homepage-full.jpg">
                        <source media="(max-width: 500px)" srcset="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/raysent-led-light-homepage-small.jpg">
			            
			            <img src="http://localhost:8888/pivot-pilot/wp-content/uploads/2017/10/raysent-led-light-homepage.jpg"
			            alt="LED light">
			         
			        </picture>
			     
			    </div>
			    
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php 
wp_footer(); 
?>