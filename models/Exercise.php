<?php
  namespace Appacademia;

  class Exercise extends \Bricks\CustomPost {

    static $label = 'Exercícios';
    static $menu_icon = 'dashicons-hammer';
    static $supports = [ 'title', 'editor' ];

    static $fields = [
      'repetitions' => [
        'name' => 'Repetições Recomendadas',
        'description' => 'dsad'
      ],
      'settings' => [
        'name' => 'Configurações Recomendadas',
        'description' => 'asd',
        'type' => 'wysiwyg', 'options' => [ 'textarea_rows' => 5, 'media_buttons' => false]
      ]
    ];

    static $boxes = [

    ];

  }

?>
