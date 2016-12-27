<?php
	namespace Sample ;
	use BasePlugin ;

	class Plugin extends BasePlugin {

		static $scripts_version = '54fea4b6cfd0b37b34490a8916a8181b';
		static $styles_version = 'a17ba3afe59b91d60add55bb3eeb5b49';

		static $db_version = '0.1' ;
		static $custom_posts = array();
		static $custom_taxonomies = array();
		static $custom_post_formats = array();
		static $custom_classes = array();
		static $custom_users = array();
		static $presenters = array();
		static $has_translations = false ;

		static $absent_roles = array();
		static $restricted_menus = array();
		static $restrict_for_everyone = true;

		static $migrations = array(
		);

		static $query_vars = array(
		);
		static $rewrite_rules = array(
		);

		static function build(){
			parent::build();
		}

	}

 ?>
