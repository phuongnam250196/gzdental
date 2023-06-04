<?php
/**
 * vatlieunhakhoa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vatlieunhakhoa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'vatlieunhakhoa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vatlieunhakhoa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vatlieunhakhoa, use a find and replace
		 * to change 'vatlieunhakhoa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vatlieunhakhoa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'vatlieunhakhoa' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'vatlieunhakhoa_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// custom woocommerce

		// remove link a
		remove_action("woocommerce_before_shop_loop_item", "woocommerce_template_loop_product_link_open", 10);
		remove_action("woocommerce_after_shop_loop_item", "woocommerce_template_loop_product_link_close", 5);

		// custom thump
		function woocommerce_template_loop_product_thumbnail_fix() {
			global $product;
			$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
			echo '<div class="product-wrapper"><div class="thumb-wrapper"><a class="img-fix" href="' . esc_url($link) . '" class="grid-product__link">'.woocommerce_get_product_thumbnail().'</a></div></div>';
		}
		remove_action("woocommerce_before_shop_loop_item_title", "woocommerce_template_loop_product_thumbnail", 10);
		add_action("woocommerce_before_shop_loop_item_title", "woocommerce_template_loop_product_thumbnail_fix", 10);

		// custom title
		function woocommerce_template_loop_product_title_fix() {
			global $product;
			$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
			echo '<div class="item-title"> <a
			href="'. esc_url($link) .'"
			title="'.get_the_title().'">' . get_the_title() . '</a></div>';
		}
		remove_action("woocommerce_shop_loop_item_title", "woocommerce_template_loop_product_title", 10);
		add_action("woocommerce_shop_loop_item_title", "woocommerce_template_loop_product_title_fix", 10);

		// remove rating
		remove_action("woocommerce_after_shop_loop_item_title", "woocommerce_template_loop_rating", 5);

		add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
		function woocommerce_custom_product_add_to_cart_text() {
			return __( 'Mua hàng', 'woocommerce' );
		}

		add_theme_support( 'woocommerce' );

		// remove sale trong product detail
		remove_action("woocommerce_before_single_product_summary", "woocommerce_show_product_sale_flash", 10);

		// remove rating trong product detail
		remove_action("woocommerce_single_product_summary", "woocommerce_template_single_rating", 10);

		// custom text add to cart
		function single_add_to_cart_text_fix() {
			return  __( 'Mua ngay', 'woocommerce' );
		}
		add_filter( 'woocommerce_product_single_add_to_cart_text', 'single_add_to_cart_text_fix' );

		// create sidebar about us
		register_sidebar( array(
			'id' => 'sidebar_about_us',
			'name'          => __( 'Sidebar About Us', 'textdomain' )
		));

		// create sidebar tutorial
		register_sidebar( array(
			'id' => 'sidebar_tutorial',
			'name'          => __( 'Sidebar Tutorial', 'textdomain' )
		));

		// create sidebar information
		register_sidebar( array(
			'id' => 'sidebar_information',
			'name'          => __( 'Sidebar Information', 'textdomain' )
		));

		// create sidebar policy
		register_sidebar( array(
			'id' => 'sidebar_policy',
			'name'          => __( 'Sidebar Policy', 'textdomain' )
		));

		// create sidebar news
		register_sidebar( array(
			'id' => 'sidebar_news',
			'name'          => __( 'Sidebar Tin tức', 'textdomain' ),
			'before_title'  => '<div class="color-blog"><h3 class="title-blog">',
			'after_title'   => '</h3></div>',
		));

		// create sidebar category
		register_sidebar( array(
			'id' => 'sidebar_category',
			'name'          => __( 'Sidebar Danh mục sản phẩm', 'textdomain' ),
			// 'before_widget' => '<div class="danh-muc-blog">',
			// 'after_widget'  => '</div>',
			'before_title'  => '<div class="color-blog"><h3 class="title-blog">',
			'after_title'   => '</h3></div>',
		));
		

		// create theme setting AFC
		if (function_exists('acf_add_options_page')) {
			acf_add_options_page(array(
				'page_title' 	=> 'Theme General Settings',
				'menu_title'	=> 'Theme Settings',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'	=> 'edit_posts',
				'redirect'		=> false
			));
		}

		// get sub list cate
		function get_product_subcategories_list( $category_slug ){
			$terms_html = array();
			$taxonomy = 'product_cat';
			// Get the product category (parent) WP_Term object
			$parent = get_term_by( 'slug', $category_slug, $taxonomy );
			// Get an array of the subcategories IDs (children IDs)
			$children_ids = get_term_children( $parent->term_id, $taxonomy );
		
			// Loop through each children IDs
			foreach($children_ids as $children_id){
				$term = get_term( $children_id, $taxonomy ); // WP_Term object
				$term_link = get_term_link( $term, $taxonomy ); // The term link
				if ( is_wp_error( $term_link ) ) $term_link = '';
				// Set in an array the html formated subcategory name/link
				$terms_html[] = '<li><a href="' . esc_url( $term_link ) . '" rel="tag" class="' . $term->slug . '" title="'. $term->name .'">' . $term->name . '</a></li>';
			}
			return implode( '', $terms_html );
		}

		// custome menu PC
		class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
			public $submenu_unique_id = '';
			public function start_lvl( &$output, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = str_repeat( $t, $depth );
		
				$before_start_lvl = '<div class="level'.$depth.'-wrapper dropdown-6col"><div class="level0-wrapper2">';
		
				if($depth==0){
					$output .= "{$n}{$indent}{$before_start_lvl}<div class=\"nav-block nav-block-center\"><ul class=\"level".$depth."\">{$n}";
				}
				else{
					$output .= "{$n}{$indent}<ul id=\"$this->submenu_unique_id\" class=\"sub-menu dropdown-content\">{$n}";
				}
			}
			public function end_lvl( &$output, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = str_repeat( $t, $depth );
				$after_end_lvl = '</div></div>';
		
				if($depth==0){
					$output .= "$indent</ul></div>{$after_end_lvl}{$n}";
				}
				else{
					$output .= "$indent</ul>{$n}";
				}
			}
			
			public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		
				$classes[] = 'level'.$depth.' parent';
		
				// set active class for current nav menu item
				if( $item->current == 1 ) {
					$classes[] = 'active';
				}
		
				// set active class for current nav menu item parent
				if( in_array( 'current-menu-parent' ,  $classes ) ) {
					$classes[] = 'active';
				}
		
				/**
				 * Filters the arguments for a single nav menu item.
				 */
				$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
		
				// add a divider in dropdown menus
				if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
					$output .= $indent . '<li class="divider">';
				} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
					$output .= $indent . '<li class="divider">';
				} else {
					$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		
					//adding col-md-3 class to column
					if( in_array('menu-item-has-children', $classes ) ) {
						if( $depth === 1 ) {                    
							$class_names = $class_names ? ' class="col-md-3 mega-menucolumn '.esc_attr( $class_names ) . '"' : '';
						} else {
							$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
						}
					}else{
						$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
					}
		
					$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
					$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
					$output .= $indent . '<li' . $id . $class_names .'>';
		
					$atts = array();
					$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
					$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
					$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		
					if( in_array('menu-item-has-children', $classes ) ) {
						$atts['href']   = ' ';
						$this->submenu_unique_id = 'dropdown-'.$item->ID;
					} else {
						$atts['href']   = ! empty( $item->url ) ? $item->url  : '';
						$atts['class'] = '';
					}
		
					$atts['class'] .= 'menu-item-link-class ';
		
					$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		
					$attributes = '';
					foreach ( $atts as $attr => $value ) {
						if ( ! empty( $value ) ) {
							$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
							$attributes .= ' ' . $attr . '="' . $value . '"';
						}
					}
		
					if( ! in_array( 'icon-only' , $classes ) ) {
		
						$title = apply_filters( 'the_title', $item->title, $item->ID );
		
						$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
					}
		
					$item_output = $args->before;
					$item_output .= '<a'. $attributes .'><span>';
		
					// set icon on left side
					if( !empty( $classes ) ) {
						foreach ($classes as $class_name) {
							if( strpos( $class_name , 'fa' ) !== FALSE ) {
								$icon_name = explode( '-' , $class_name );
								if( isset( $icon_name[1] ) && !empty( $icon_name[1] ) ) {
									$item_output .= '<i class="fa fa-'.$icon_name[1].'" aria-hidden="true"></i> ';
								}
							}
						}
					}
		
					$item_output .= $args->link_before . $title . $args->link_after;
		
					if( in_array('menu-item-has-children', $classes) ){
						if( $depth == 0 ) {
							$item_output .= ' <i class="fa fa-bolt" aria-hidden="true"></i>';
						}
					}
		
					$item_output .= '</span></a>';
					$item_output .= $args->after;
		
					$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
				}
			}
		
			/**
			 * Ends the element output, if needed.
			 *
			 */
			public function end_el( &$output, $item, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$output .= "</li>{$n}";
			}
		
		}

		// custome menu Mobile
		class Custom_Walker_Nav_Mobile extends Walker_Nav_Menu {
			public $submenu_unique_id = '';
			public function start_lvl( &$output, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = str_repeat( $t, $depth );
		
				$before_start_lvl = '<ul class="level'.$depth.'">';
		
				if($depth==0){
					$output .= "{$n}{$indent}{$before_start_lvl}{$n}";
				}
				else{
					$output .= "{$n}{$indent}<ul id=\"$this->submenu_unique_id\" class=\"sub-menu dropdown-content\">{$n}";
				}
			}
			public function end_lvl( &$output, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = str_repeat( $t, $depth );
				$after_end_lvl = '</ul>';
		
				if($depth==0){
					$output .= "$indent{$after_end_lvl}{$n}";
				}
				else{
					$output .= "$indent</ul>{$n}";
				}
			}
			
			public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
		
				$classes[] = 'level'.$depth.' level-top parent';
		
				// set active class for current nav menu item
				if( $item->current == 1 ) {
					$classes[] = 'active';
				}
		
				// set active class for current nav menu item parent
				if( in_array( 'current-menu-parent' ,  $classes ) ) {
					$classes[] = 'active';
				}
		
				/**
				 * Filters the arguments for a single nav menu item.
				 */
				$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
		
				// add a divider in dropdown menus
				if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
					$output .= $indent . '<li class="divider">';
				} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
					$output .= $indent . '<li class="divider">';
				} else {
					$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		
					//adding col-md-3 class to column
					if( in_array('menu-item-has-children', $classes ) ) {
						if( $depth === 1 ) {                    
							$class_names = $class_names ? ' class="col-md-3 mega-menucolumn '.esc_attr( $class_names ) . '"' : '';
						} else {
							$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
						}
					}else{
						$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
					}
		
					$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
					$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
					$output .= $indent . '<li' . $id . $class_names .'>';
		
					$atts = array();
					$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
					$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
					$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		
					if( in_array('menu-item-has-children', $classes ) ) {
						$atts['href']   = ' ';
						$this->submenu_unique_id = 'dropdown-'.$item->ID;
					} else {
						$atts['href']   = ! empty( $item->url ) ? $item->url  : '';
						$atts['class'] = '';
					}
		
					$atts['class'] .= 'menu-item-link-class ';
		
					$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		
					$attributes = '';
					foreach ( $atts as $attr => $value ) {
						if ( ! empty( $value ) ) {
							$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
							$attributes .= ' ' . $attr . '="' . $value . '"';
						}
					}
		
					if( ! in_array( 'icon-only' , $classes ) ) {
		
						$title = apply_filters( 'the_title', $item->title, $item->ID );
		
						$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
					}
		
					$item_output = $args->before;
					$item_output .= '<a'. $attributes .'><span>';
		
					// set icon on left side
					if( !empty( $classes ) ) {
						foreach ($classes as $class_name) {
							if( strpos( $class_name , 'fa' ) !== FALSE ) {
								$icon_name = explode( '-' , $class_name );
								if( isset( $icon_name[1] ) && !empty( $icon_name[1] ) ) {
									$item_output .= '<i class="fa fa-'.$icon_name[1].'" aria-hidden="true"></i> ';
								}
							}
						}
					}
		
					$item_output .= $args->link_before . $title . $args->link_after;
		
					if( in_array('menu-item-has-children', $classes) ){
						if( $depth == 0 ) {
							$item_output .= ' <i class="fa fa-bolt" aria-hidden="true"></i>';
						}
					}
		
					$item_output .= '</span></a>';
					$item_output .= $args->after;
		
					$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
				}
			}
		
			/**
			 * Ends the element output, if needed.
			 *
			 */
			public function end_el( &$output, $item, $depth = 0, $args = array() ) {
				if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
					$t = '';
					$n = '';
				} else {
					$t = "\t";
					$n = "\n";
				}
				$output .= "</li>{$n}";
			}
		
		}

		// show danh mục sản phẩm
		function show_category_in_nav() {
			$str = '<ul id="left-menu">';
			$taxonomy     = 'product_cat';
			$orderby      = 'name';  
			$show_count   = 0;      // 1 for yes, 0 for no
			$pad_counts   = 0;      // 1 for yes, 0 for no
			$hierarchical = 1;      // 1 for yes, 0 for no  
			$title        = '';  
			$empty        = 0;

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
			foreach ($all_categories as $cat) {
				if($cat->category_parent == 0) {
					$category_id = $cat->term_id;       
					$str .= '<li class="lv0 open menu-icon"><a class="lv0" href="'. get_term_link($cat->slug, 'product_cat') .'"><span
					class="child-title">'. $cat->name .'</span><i
					class="fa fa-angle-right" aria-hidden="true"></i></a>';

					$args2 = array(
							'taxonomy'     => $taxonomy,
							'child_of'     => 0,
							'parent'       => $category_id,
							'orderby'      => $orderby,
							'show_count'   => $show_count,
							'pad_counts'   => $pad_counts,
							'hierarchical' => $hierarchical,
							'title_li'     => $title,
							'hide_empty'   => $empty
					);
					$sub_cats = get_categories( $args2 );
					$str .= '<ul class="lv1" style="margin: 0">';
					if($sub_cats) {
						foreach($sub_cats as $sub_category) {
							$str .= '<li class="lv1"><a class="lv1"><span
							class="lv1-title">'.$sub_category->name.'</span></a></li>' ;
						}   
					}
					$str .= '</li></ul>';
				}       
			}
			$str.'</ul>';
			return $str;
		}

		// show danh mục sản phẩm trong category
		function show_category_in_category() {
			$str = '<ul class="links on_links">';
			$taxonomy     = 'product_cat';
			$orderby      = 'name';  
			$show_count   = 0;      // 1 for yes, 0 for no
			$pad_counts   = 0;      // 1 for yes, 0 for no
			$hierarchical = 1;      // 1 for yes, 0 for no  
			$title        = '';  
			$empty        = 0;

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
			foreach ($all_categories as $cat) {
				if($cat->category_parent == 0) {
					$category_id = $cat->term_id;       
					$str .= '<li><a href="javascript:void(0);">'. $cat->name .'<i class="fa fa-angle-down pull-right"></i></a>';

					$args2 = array(
							'taxonomy'     => $taxonomy,
							'child_of'     => 0,
							'parent'       => $category_id,
							'orderby'      => $orderby,
							'show_count'   => $show_count,
							'pad_counts'   => $pad_counts,
							'hierarchical' => $hierarchical,
							'title_li'     => $title,
							'hide_empty'   => $empty
					);
					$sub_cats = get_categories( $args2 );
					$str .= '<ul style="display:none;">';
					if($sub_cats) {
						foreach($sub_cats as $sub_category) {
							$str .= '<li><a href="'.home_url( '/product-category/' ).$sub_category->slug.'">'.$sub_category->name.'</a></li>' ;
						}   
					}
					$str .= '</li></ul>';
				}       
			}
			$str.'</ul>';
			return $str;
		}

		// remove fields checkout
		function remove_fileds_checkout($fields)
		{
			unset($fields['billing']['billing_postcode']);
			unset($fields['billing']['billing_address_2']);
			unset($fields['billing']['billing_country']);

			unset($fields['shipping']['shipping_postcode']);
			unset($fields['shipping']['shipping_address_2']);
			unset($fields['shipping']['shipping_country']);
			return $fields;
		}
		add_filter('woocommerce_checkout_fields', 'remove_fileds_checkout');

		// remove fields in billing
		function custom_override_billing_fields($fields)
		{
			unset($fields['billing_postcode']);
			unset($fields['billing_address_2']);
			unset($fields['billing_country']);
			return $fields;
		}
		add_filter('woocommerce_billing_fields', 'custom_override_billing_fields');

		// remove fields in shipping
		function custom_override_shipping_fields($fields)
		{
			unset($fields['shipping_postcode']);
			unset($fields['shipping_address_2']);
			unset($fields['shipping_country']);
			return $fields;
		}
		add_filter('woocommerce_shipping_fields', 'custom_override_shipping_fields');
		
		// custom field
		// custom fields checkokut
		function custom_fileds_checkout($fields)
		{
			$fields['billing']['billing_first_name']['label'] = 'Tên';
			$fields['billing']['billing_last_name']['label'] = 'Họ';
			$fields['billing']['billing_company']['label'] = 'Tên công ty';
			$fields['billing']['billing_address_1']['label'] = 'Địa chỉ';
			$fields['billing']['billing_city']['label'] = 'Tỉnh/ Thành phố';
			$fields['billing']['billing_phone']['label'] = 'Số điện thoại';
			$fields['billing']['billing_email']['label'] = 'Email';
			return $fields;
		}
		add_filter('woocommerce_checkout_fields', 'custom_fileds_checkout');

		// custom fields billing
		function custom_fileds_billings($fields)
		{
			$fields['billing_first_name']['label'] = 'Tên';
			$fields['billing_last_name']['label'] = 'Họ';
			$fields['billing_company']['label'] = 'Tên công ty';
			$fields['billing_address_1']['label'] = 'Địa chỉ';
			$fields['billing_address_1']['placeholder'] = '';
			$fields['billing_city']['label'] = 'Tỉnh/ Thành phố';
			$fields['billing_phone']['label'] = 'Số điện thoại';
			$fields['billing_email']['label'] = 'Email';
			return $fields;
		}
		add_filter('woocommerce_billing_fields', 'custom_fileds_billings');

		// custom fields shipping
		function custom_fileds_shippings($fields)
		{
			$fields['shipping_first_name']['label'] = 'Tên';
			$fields['shipping_last_name']['label'] = 'Họ';
			$fields['shipping_company']['label'] = 'Tên công ty';
			$fields['shipping_address_1']['label'] = 'Địa chỉ';
			$fields['shipping_address_1']['placeholder'] = '';
			$fields['shipping_city']['label'] = 'Tỉnh/ Thành phố';
			$fields['shipping_phone']['label'] = 'Số điện thoại';
			$fields['shipping_email']['label'] = 'Email';
			return $fields;
		}
		add_filter('woocommerce_shipping_fields', 'custom_fileds_shippings');
		
		// Hook in
		add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

		// Our hooked in function - $fields is passed via the filter!
		function custom_override_checkout_fields( $fields ) {
			$fields['order']['order_comments']['label'] = 'Chú ý';
			$fields['order']['order_comments']['placeholder'] = 'Ghi chú về đơn hàng của bạn';
			return $fields;
		}

		// remove action woocommerce_pagination
		remove_action("woocommerce_after_shop_loop", "woocommerce_pagination", 10);

		// custom name navigation
		function custom_navigation_name($name) {
			$n = '';
			switch ($name) {
				case 'dashboard':
					$n = 'Trang chủ';
					break;
				case 'orders':
					$n = 'Quản lý hóa đơn';
					break;
				case 'downloads':
					$n = 'downloads';
					break;
				case 'edit-address':
					$n = 'Quản lý địa chỉ';
					break;
				case 'edit-account':
					$n = 'Thông tin tài khoản';
					break;
				
				default:
					$n = 'Đăng xuất';
					break;
			}
			return $n;
		}	
		
		//
		add_filter( "woocommerce_loop_add_to_cart_args", "filter_wc_loop_add_to_cart_args", 20, 2 );
		function filter_wc_loop_add_to_cart_args( $args, $product ) {
			if ( $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ) {
				$args['attributes']['data-product_name'] = $product->get_name();
				$args['attributes']['data-product_image'] = $product->get_image();
				$args['attributes']['data-product_price'] = $product->get_price();
				$args['attributes']['data-product_slug'] = $product->get_slug();
			}
			return $args;
		}

		add_action( 'wp_footer', 'ajax_added_to_cart_popup_script' );
			function ajax_added_to_cart_popup_script() {
				?>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
				<script type="text/javascript">
				jQuery( function($){
					// On "added_to_cart" live event
					// let url = "<?php echo esc_url( home_url( '/' ) ); ?>";
					$(document.body).on('added_to_cart', function( a, b, c, d ) {

						var prod_id   = d.data('product_id'), // Get the product name
							prod_qty  = d.data('quantity'), // Get the quantity
							prod_name = d.data('product_name'), // Get the product name
							prod_image = d.data('product_image'), // Get the product image
							prod_price = d.data('product_price'), // Get the product price
							prod_slug = d.data('product_slug'); // Get the product slug
							// console.log('image', prod_image);
						
							
							$.notify({
								title: prod_name,
								message: format_money_vn(prod_price)
							},{
								type: 'minimalist',
								delay: 5000,
								icon_type: 'image',
								template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0} fix-alert" role="alert">' 
								+ '<div class="notify_parent">' +prod_image +'<div class="notify_div">'+
										'<p data-notify="title"><a href="'+url+prod_slug+'">{1}</a></p>' +
										'<p data-notify="message">{2}</p>' +
									'</div>' +
									'</div>' +
								'</div>'
							});

							let check_cart_list = cart_lists.some(function(item) {
								return item.id === prod_id;
							});
							if (check_cart_list) {
								let cart_item_find = cart_lists.find(function(item) {
									return item.id === prod_id;
								});
								cart_item_find.quantity += 1;
								// console.log('cart_item_find', cart_item_find.quantity);
							} else {
								cart_lists.push({
									id: prod_id,
									name: prod_name,
									slug: prod_slug,
									quantity: prod_qty,
									price: prod_price,
									image: prod_image,
								});
								
							$("#cart-total").text(cart_lists.length)
							$(".top-subtotal .price").text(format_money_vn(total_prices(cart_lists)));
							// console.log('cart_lists length',cart_lists.length);

							// show_cart_lists(cart_lists, prod_id);
							$("#cart-sidebar").replaceWith(show_cart_lists(cart_lists, prod_id));

							product_views.push({
									id: prod_id,
									name: prod_name,
									slug: prod_slug,
									quantity: prod_qty,
									price: prod_price,
									image: prod_image,
								});
							}
							// console.log('product_views', product_views);
							$(".pr-list-product-slide").replaceWith(product_view(product_views));
							localStorage.setItem("product_lists", JSON.stringify(product_views));
					});
					$(document).on("click",".remove",function() {
						var prod_id   = $(this).data('product_id');
						// console.log('prod_id', prod_id);
						let item_cart_list = cart_lists.find(function(item) {
							return item.id === prod_id;
						});
						cart_lists.pop(item_cart_list);

						$("#cart-total").text(cart_lists.length)
						$(".top-subtotal .price").text(format_money_vn(total_prices(cart_lists)));
						// console.log('cart_lists length',cart_lists.length);

						show_cart_lists(cart_lists, prod_id);
						$("#cart-sidebar").replaceWith(show_cart_lists(cart_lists, prod_id));
					});
				});
				</script>
				<?php
			}

		// remove woocommerce_result_count, woocommerce_output_all_notices
		remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
		remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);

		// custom ordering
		function woocommerce_catalog_ordering_fix() {
			if ( ! wc_get_loop_prop( 'is_paginated' ) || ! woocommerce_products_will_display() ) {
				return;
			}
			$show_default_orderby    = 'menu_order' === apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby', 'menu_order' ) );
			$catalog_orderby_options = apply_filters(
				'woocommerce_catalog_orderby',
				array(
					'menu_order' => __( 'Thứ tự', 'woocommerce' ),
					'popularity' => __( 'Hàng phổ biến', 'woocommerce' ),
					'rating'     => __( 'Hàng theo đánh giá', 'woocommerce' ),
					'date'       => __( 'Hàng mới nhất', 'woocommerce' ),
					'price'      => __( 'Giá tăng dần', 'woocommerce' ),
					'price-desc' => __( 'Giá giảm dần', 'woocommerce' ),
				)
			);
	
			$default_orderby = wc_get_loop_prop( 'is_search' ) ? 'relevance' : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby', '' ) );
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			$orderby = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : $default_orderby;
			// phpcs:enable WordPress.Security.NonceVerification.Recommended
	
			if ( wc_get_loop_prop( 'is_search' ) ) {
				$catalog_orderby_options = array_merge( array( 'relevance' => __( 'Relevance', 'woocommerce' ) ), $catalog_orderby_options );
	
				unset( $catalog_orderby_options['menu_order'] );
			}
	
			if ( ! $show_default_orderby ) {
				unset( $catalog_orderby_options['menu_order'] );
			}
	
			if ( ! wc_review_ratings_enabled() ) {
				unset( $catalog_orderby_options['rating'] );
			}
	
			if ( ! array_key_exists( $orderby, $catalog_orderby_options ) ) {
				$orderby = current( array_keys( $catalog_orderby_options ) );
			}
	
			wc_get_template(
				'loop/orderby.php',
				array(
					'catalog_orderby_options' => $catalog_orderby_options,
					'orderby'                 => $orderby,
					'show_default_orderby'    => $show_default_orderby,
				)
			);
		}
		remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
		add_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering_fix", 30);

		add_filter( 'woocommerce_page_title', 'woo_shop_page_title');
		function woo_shop_page_title( $page_title ) {
			if( 'Shop' == $page_title) {
						return "Cửa hàng";
			}
		}

		add_filter( 'woocommerce_page_title', 'woo_cart_page_title');
		function woo_cart_page_title( $page_title ) {
			if( 'Cart' == $page_title) {
						return "Giỏ hàng";
			}
		}


	}
endif;
add_action( 'after_setup_theme', 'vatlieunhakhoa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vatlieunhakhoa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vatlieunhakhoa_content_width', 640 );
}
add_action( 'after_setup_theme', 'vatlieunhakhoa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vatlieunhakhoa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vatlieunhakhoa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vatlieunhakhoa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vatlieunhakhoa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vatlieunhakhoa_scripts() {
	wp_enqueue_style( 'vatlieunhakhoa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vatlieunhakhoa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'vatlieunhakhoa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vatlieunhakhoa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

