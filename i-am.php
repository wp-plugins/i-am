<?php
/* 
Plugin Name: I am
Plugin URI: https://wordpress.org/plugins/i-am/
Description: Show who you are in your blog
Version: 1.6
Author: iLen
Author URI: http://es.ilentheme.com
*/
if ( !class_exists('i_am') ) {
require_once 'assets/functions/options.php';

class i_am extends i_am_make{
    public $parameter  = array();
    public $options    = array();
    public $components = array();
	function __construct(){

    parent::__construct();
 	if( is_admin() ){
      null;
    }elseif( ! is_admin() ) {
      add_action( 'wp_enqueue_scripts', array(__CLASS__,'wp_iam_script_front' ) );
    }
  }

  function widget($args,$instance){
    $opt_iam = IF_get_option( $this->parameter['name'] ) ;

    ?>
<div class="wp_i_am widget">
  <section>
    <header style="background: <?php if( isset($opt_iam->background_color) ){ echo $opt_iam->background_color; } ?> url(<?php if( isset($opt_iam->background) ){ echo $opt_iam->background; } ?>)  no-repeat center center;background-size: cover;height:<?php if( isset($opt_iam->background) ){ echo $opt_iam->height_header; } ?>px;">
      <div class="avatar">
        <img alt="" src="<?php if( isset($opt_iam->photo) ){ echo $opt_iam->photo; } ?>">
      </div>
    </header>
    <div class="info">
      <h2 style="color:<?php if( isset($opt_iam->name_color) ){ echo $opt_iam->name_color; } ?>;"><?php if( isset($opt_iam->name) ){ echo $opt_iam->name; } ?></h2>
      <p><?php if( isset($opt_iam->description) && $opt_iam->description ){ echo $opt_iam->description; } ?></p>
      <?php if( isset($opt_iam->link) && $opt_iam->link ): ?><a href="<?php echo $opt_iam->link; ?>" target="_blank"><?php echo str_replace( array("http://","https://","www."), "", $opt_iam->link); ?></a><?php endif; ?>
    </div>
  
    <div class="social-icons">
      <?php if( isset($opt_iam->facebook) && $opt_iam->facebook ): ?><a class="fa fa-facebook" href="<?php  echo $opt_iam->facebook;  ?>" target="_blank"></a><?php endif; ?>
      <?php if( isset($opt_iam->twitter) && $opt_iam->twitter ): ?><a class="fa fa-twitter" href="<?php  echo $opt_iam->twitter;  ?>" target="_blank"></a><?php endif; ?>
      <?php if( isset($opt_iam->google) && $opt_iam->google ): ?><a class="fa fa-google-plus" href="<?php  echo $opt_iam->google;  ?>" target="_blank"></a><?php endif; ?>
    </div>
    
  </section>
</div>
  <?php }


  function form($instance){ null; }

 
	/**
	* Load scripts and styles
	*/
	function wp_iam_script_front(){
			wp_enqueue_style('widget_i_am', plugins_url( 'assets/css/front.css' , __FILE__ ),'all',isset(parent::$parameter)?parent::$parameter['version']:'1.0' );
      wp_enqueue_style('fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css','all',isset(parent::$parameter)?parent::$parameter['version']:'1.0' );
	}



} // end class
} // end if
global $IF_CONFIG;
unset($IF_CONFIG);
$IF_CONFIG = null;
$IF_CONFIG = new i_am;
require_once "assets/ilenframework/core.php";
add_action( 'widgets_init', create_function('', 'return register_widget("i_am");') ); 
?>