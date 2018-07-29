<?php
   
   global $googleFonts, $hamburgerCSS, $fontAwesome, $fancyBoxCSS, $fancyboxJS, $addThis;

   $googleFonts= 'https://fonts.googleapis.com/css?family=Roboto';
   $hamburgerCSS= 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';
   $fontAwesome= 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
   $fancyBoxCSS= 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css';
   $fancyboxJS= 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js';
   $addThis= 'https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5cb5f6c7a92d2f';

   function tatoeba_scripts(){
   		global $googleFonts, $hamburgerCSS, $fontAwesome, $fancyBoxCSS, $fancyboxJS, $addThis;

   		wp_enqueue_style('googleFonts', $googleFonts, array(), 'all');
   		wp_enqueue_style('hamburgerCSS', $hamburgerCSS, array(), 'all');
   		wp_enqueue_style('fontAwesome', $fontAwesome, array(), 'all');
   		wp_enqueue_style('fancyBoxCSS', $fancyBoxCSS, array(), 'all');
   		wp_enqueue_style('style', get_stylesheet_uri(), array('googleFonts', 'hamburgerCSS', 'fontAwesome', 'fancyBoxCSS'), 'all');

		wp_enqueue_script('jquery');
		wp_enqueue_script('fancyBoxJS', $fancyboxJS, array('jquery'), '3.3.5', true);
		if(is_single()):
			wp_enqueue_script('addThis', $addThis, array(), '1.0.0', true);
		endif;
   		wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true); //true injects it in footer, false in header

   }

   function tatoeba_menus(){
   		register_nav_menus(
   			array('main_menu'=> 'Main menu', 
   				  'social_media_menu'=> 'Social media menu',
   				  'about_menu'=> 'Corporative menu')
   		);
   }

   function tatoeba_register_sidebar(){
   		register_sidebar(array(
   			'id'=> 'main_sidebar',
   			'name'=> 'Main sidebar',
   			'description'=> 'This is the main sidebar',
   			'before_widget'=> '<article id="%1$s" class="Widget %2$s">',
   			'after_widget'=> '</article>',
   			'before_title'=> '<h3>',
   			'after_title'=> '</h3>'
   		));
   		register_sidebar(array(
   			'id'=> 'footer_sidebar',
   			'name'=> 'Footer sidebar',
   			'description'=> 'This is the footer sidebar',
   			'before_widget'=> '<article id="%1$s" class="Widget %2$s">',
   			'after_widget'=> '</article>',
   			'before_title'=> '<h3>',
   			'after_title'=> '</h3>'
   		));
   }

   function tatoeba_setup(){
   		add_theme_support('post-thumbnails');
   		add_theme_support('html5', array(
   			'comment-list',
   			'comment-form',
   			'search-form',
   			'gallery',
   			'caption'
   		));
   		add_theme_support('post-formats', array(
   			'aside',
   			'gallery',
   			'link',
   			'image',
   			'quote',
   			'status',
   			'video',
   			'audio',
   			'chat'
   		));
   		add_theme_support('title-tag');
   		add_theme_support('custom-logo', array(
   			'width'=>100,
   			'height'=>100,
   			'flex-width'=>true,
   			'flex-height'=>true
   		));
   		remove_action('wp_head', 'wp_generator');
   }

   function tatoeba_excerpt_more(){
   		return '... <a href="'.get_permalink().'">Read more</a>';
   }

   add_filter('excerpt_more', 'tatoeba_excerpt_more');

   function tatoeba_excerpt_length(){
   		return 30;
   }

   add_filter('excerpt_length', 'tatoeba_excerpt_length');

   add_action('wp_enqueue_scripts', 'tatoeba_scripts');
   add_action('init', 'tatoeba_menus');
   add_action('widgets_init', 'tatoeba_register_sidebar');
   add_action('after_setup_theme', 'tatoeba_setup');
