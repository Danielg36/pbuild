<?php

namespace Inc\Pages;

class Admin {

   public function register(){
      add_action( 'admin_menu', [$this, 'add_admin_pages']);
   }

    function add_admin_pages() {
        add_menu_page( 'My Plugin', 'Menu title plugin', 'manage_options', 'myplugin', [$this, 'admin_index'], 'dashicons-store', 110 );
    }

    function admin_index() {
        //require styles for our custom plug
        require_once PLUGIN_PATH . 'templates/admin.php';
    }




}