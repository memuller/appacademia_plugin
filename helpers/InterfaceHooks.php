<?php
namespace Appacademia;

class InterfaceHooks {

    static $hide_menus = [ 'Posts', 'Comments', 'Pages' ];

    static function init(){
      static::enqueue_admin_assets();
      static::hide_menus();
    }

    static function hide_menus(){
      add_action('admin_menu', function () use ($class) {
        global $menu;
        $restricted_menus = static::$hide_menus;
        $restricted = array();
        foreach ($restricted_menus as $item) {
          $restricted[]= __($item);
        }
        end ($menu);
        while (prev($menu)){
          $value = explode(' ',$menu[key($menu)][0]);
          if(in_array($value[0] != NULL?$value[0]:"", $restricted)){
            unset($menu[key($menu)]);
          }
        }
      });
    }

    static function enqueue_admin_assets () {
      add_action('admin_enqueue_scripts', function($hook){
        wp_enqueue_style('bricks_admin_css',BRICKS_BASE_URL.'/assets/css/admin.css');
        wp_enqueue_script('bricks_admin_script', BRICKS_BASE_URL.'/assets/js/admin.js');
      });
    }
  }
