<?php
namespace Appacademia;

class InterfaceHooks
{

  use \Bricks\Hookable;

  static $hide_menus = ['Posts', 'Comments', 'Pages'];

  static $actions = [
    'admin_menu' => 'hide_menus',
    'admin_enqueue_scripts' => 'enqueue_admin_assets'
  ];

  static function init()
  {
    static::set_hooks();
  }

  static function hide_menus()
  {
    global $menu;
    $restricted_menus = static::$hide_menus;
    $restricted = array();
    foreach ($restricted_menus as $item) {
      $restricted[] = __($item);
    }
    end($menu);
    while (prev($menu)) {
      $value = explode(' ', $menu[key($menu)][0]);
      if (in_array($value[0] != null ? $value[0] : "", $restricted)) {
        unset($menu[key($menu)]);
      }
    }
  }

  static function enqueue_admin_assets()
  {
    wp_enqueue_style('bricks_admin_css', BRICKS_BASE_URL . '/assets/css/admin.css');
    wp_enqueue_script('bricks_admin_script', BRICKS_BASE_URL . '/assets/js/admin.js');
  }
}
