<?php
/**
 * Plugin Name: LH Dequeue RTmedia
 * Plugin URI: https://lhero.org/portfolio/lh-dequeue-rtmedia/
 * Description: Plugin to dequeue RTMedia styles and scripts
 * Version: 1.03
 * Author: Peter Shaw
 * Author URI: https://shawfactor.com/
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (!class_exists('LH_dequeue_rtmedia_plugin')) {


class LH_dequeue_rtmedia_plugin {
    

private static $instance;
    
public function dequeue_scripts() {

if (!is_user_logged_in()){

   wp_dequeue_script( 'rtmedia-main' );
    wp_deregister_script( 'rtmedia-main' );

wp_dequeue_script( 'rtmedia-backbone' );
wp_deregister_script( 'rtmedia-backbone' );


wp_dequeue_script( 'plupload-all' );
wp_deregister_script( 'plupload-all' );

wp_dequeue_script( 'wp-mediaelement' );
wp_deregister_script( 'wp-mediaelement' );


wp_dequeue_script( 'rtmedia-touchswipe' );
wp_deregister_script( 'rtmedia-touchswipe' );


wp_dequeue_script( 'bpm-plupload' );
wp_deregister_script( 'bpm-plupload' );

wp_dequeue_script( 'bp-plupload' );
wp_deregister_script( 'bp-plupload' );

wp_dequeue_script( 'rtmedia-backbone' );
wp_deregister_script( 'rtmedia-backbone' );


wp_dequeue_script( 'media-views' );
wp_deregister_script( 'media-views' );

wp_dequeue_script( 'wp-plupload' );
wp_deregister_script( 'wp-plupload' );


wp_dequeue_script( 'wp-mediaelement-start' );
wp_deregister_script( 'wp-mediaelement-start' );
	
wp_dequeue_script( 'rt-mediaelement' );
wp_deregister_script( 'rt-mediaelement' );
	
wp_dequeue_script( 'rt-mediaelement-wp' );
wp_deregister_script( 'rt-mediaelement-wp' );

wp_dequeue_script( 'rtmedia-upload-terms-main' );
wp_deregister_script( 'rtmedia-upload-terms-main' );




}



}


public function dequeue_styles() {
    
if (!is_user_logged_in()){

wp_dequeue_script( 'plupload-all' );
wp_deregister_script( 'plupload-all' );

wp_dequeue_script( 'wp-mediaelement' );
wp_deregister_script( 'wp-mediaelement' );


wp_dequeue_script( 'rtmedia-touchswipe' );
wp_deregister_script( 'rtmedia-touchswipe' );

		wp_dequeue_style('rtmedia-main');
		wp_deregister_style( 'rtmedia-main' );
		
		wp_dequeue_style('mediaelement');
		wp_deregister_style( 'mediaelement' );

   wp_dequeue_script( 'rtmedia-main' );
    wp_deregister_script( 'rtmedia-main' );

wp_dequeue_script( 'rtmedia-backbone' );
wp_deregister_script( 'rtmedia-backbone' );

wp_dequeue_script( 'bpm-plupload' );
wp_deregister_script( 'bpm-plupload' );

wp_dequeue_script( 'bp-plupload' );
wp_deregister_script( 'bp-plupload' );

wp_dequeue_script( 'rtmedia-backbone' );
wp_deregister_script( 'rtmedia-backbone' );


wp_dequeue_script( 'media-views' );
wp_deregister_script( 'media-views' );

wp_dequeue_script( 'wp-plupload' );
wp_deregister_script( 'wp-plupload' );


wp_dequeue_script( 'wp-mediaelement-start' );
wp_deregister_script( 'wp-mediaelement-start' );
	
wp_dequeue_style( 'rt-mediaelement' );
wp_deregister_style( 'rt-mediaelement' );
	
wp_dequeue_style( 'rt-mediaelement-wp' );
wp_deregister_style( 'rt-mediaelement-wp' );

wp_dequeue_style( 'rtmedia-upload-terms-main' );
wp_deregister_style( 'rtmedia-upload-terms-main' );


		
		
}


	  

    }
    
    
public function remove_actions() {
    
if (!is_user_logged_in()){
          
    global $rtmedia;

    remove_action( 'wp_head', array( $rtmedia, 'custom_style_for_image_size' ), 10);
    remove_action( 'wp_head', array( 'RTMedia', 'custom_style_for_image_size' ), 10);
    
  }
    

   
}


public function remove_menu(){


remove_menu_page( 'rtmedia-settings' );

}

public function add_menu(){

add_submenu_page( 'options-general.php', 'RTMedia', 'RTMedia', 'manage_options',  'rtmedia-settings');

}

public function plugins_loaded(){
    
    if (!is_admin()){
        
  add_action( 'wp_print_scripts', array($this,"dequeue_scripts"), 1000 ); 
  
  add_action('wp_enqueue_scripts', array($this,"dequeue_styles"),100000);
  
  add_action( 'template_redirect', array($this,"remove_actions") );
  

  
    } else {
        
        
    add_action( 'admin_init', array($this,"remove_menu"));
  
    add_action( 'admin_menu', array($this,"add_menu"));
        
    }
    
}

    /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }
    
    
    
    public function __construct() {
        

	 //run our hooks on plugins loaded to as we may need checks       
    add_action( 'plugins_loaded', array($this,'plugins_loaded'));


        
    }
    
    
}

$lh_dequeue_rtmedia_instance = LH_dequeue_rtmedia_plugin::get_instance();

}



?>