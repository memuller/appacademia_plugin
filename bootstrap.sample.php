<?php
/*
Plugin Name: Bricks Framework Starter Plugin
Plugin URI: http://github.com/memuller/bricks-starter
Description: A base plugin for using the Bricks framework. Replace the values bellow and rename this to 'plugin-name.php'.
Author: Matheus E. Muller
Version: 0.1a
Author URI: https://memuller.com
 */

// Namespace for all plugin classes. CHANGE THIS!
// remember to use this namespace on all your classes.
define( 'BRICKS_NAMESPACE', 'YourPlugin' );

// The plugin's base directory. You don't need to change this.
define( 'BRICKS_BASE_DIR', __DIR__);
// The plugin's base url. You don't need to change this either.
define ( 'BRICKS_BASE_URL', plugins_url( '', __FILE__ ) );

require_once 'vendor/autoload.php' ;


?>
