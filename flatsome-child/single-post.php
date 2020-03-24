<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large">
		<?php //get_template_part( 'template-parts/posts/layout', get_theme_mod('blog_post_layout','right-sidebar') ); 
		while (have_posts()) : the_post();
			echo '<div class="head_title_blog_single">';
			echo '<h1 class="h1_global uppercase">'.get_the_title().'<span> Blog | '.get_the_modified_time('d F Y').'</span></h1>';
			echo '</div>';

		?>
			<div class="blog-image">
				<?php
				if ( has_post_thumbnail() ) { 
					the_post_thumbnail('full'); 
				}
				?>
			</div>
			<div class="row blog_single_data"> 
				<div class="large-9 col">
					<?php the_content(); ?>
				</div>
				<div class="post-sidebar large-3 col">
					<h3>Meest Recent</h3>
					<div class="most-recent">
						<?php 
						$args = array( 'numberposts' => '3', 'post__not_in' => array(get_the_ID()) );
	    				$recent_posts = wp_get_recent_posts( $args );
	    				if(!empty($recent_posts)) :
	    					?>
	    					<ul>
	    						<?php 
	    						foreach( $recent_posts as $recent ){
								        echo '<li>';
									        echo get_the_post_thumbnail($recent['ID'], 'full');
								        	echo '<p><a href="'.esc_url( get_permalink( $recent['ID'] ) ).'">'.$recent['post_title'].'</a></p>';
								        echo '</li>';
								       
								 }
	    						?>
	    					</ul>
	    					<?php
	    				endif;
						?>
					</div>
				</div>
			</div><!-- .row -->

		<?php
		endwhile;
		?>
	</div><!-- .row -->
</div><!-- #content .page-wrapper -->

<?php 
echo do_shortcode('[block id="footer-banner-block"]');
get_footer();
