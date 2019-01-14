<?php
/*
Plugin Name: Appacademia
Plugin URI: http://github.com/memuller/appacademia_wp-plugin
Description: gfasdsad
Author: Matheus E. Muller
Version: 0.1a
Author URI: https://memuller.com
 */

  define( 'BRICKS_NAMESPACE', 'Appacademia' );
  define( 'BRICKS_BASE_DIR', __DIR__);
  define ( 'BRICKS_BASE_URL', plugins_url( '', __FILE__ ) );

  require_once 'vendor/autoload.php' ;


  require_once 'helpers/InterfaceHooks.php'; Appacademia\InterfaceHooks::init();
?>
