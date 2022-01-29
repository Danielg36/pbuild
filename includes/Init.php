<?php

namespace Inc;

final class Init {


    public static function get_services(){
        return [
            Pages\Admin::class
        ];
    }

    public static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
        }

        if(method_exists($service, 'register')){
            $service->register();
        }
    }

    private static function instantiate($class){
        $service = new $class;
        return $service;
    }

}

// use Inc\Core\Activate;
// use Inc\Core\Deactivate;
// use Inc\Pages\Admin;

// class MyPlugin {

//     public $plugin;

//     function __construct(){
//         $this->plugin = plugin_basename( __FILE__ );
//     }

//     // function __construct(){
//     //     add_action('init', [$this, 'custom_post_type']);
//     // }


//     //register enqueue func.
//     function register(){
//         // add styles css & js to our plugin
//         add_action('admin_enqueue_scripts', [$this, 'enqueue']);
//         //add to action custom post type after wp init
//         add_action( 'init', [$this, 'custom_post_type']);
//         //add a custom button link to a admin dashboard
//         add_action( 'admin_menu', [$this, 'add_admin_pages']);
//         //add a custom link "settings" on plugin list.
//         add_filter( "plugin_action_links_$this->plugin", ['Admin', 'modify_plugin_links'] );
//     }

   

//     function add_admin_pages() {
//         add_menu_page( 'My Plugin', 'Menu title plugin', 'manage_options', 'myplugin', [$this, 'admin_index'], 'dashicons-store', 110 );
//     }

//     function admin_index() {
//         //require styles for our custom plug
//         require_once plugin_dir_path(__FILE__ ) . 'templates/admin.php';
//     }

//     // crete a custom post type.
//     function custom_post_type(){
//         register_post_type( 'book', ['public' => true, 'label' => 'books'] );
//     }

// function modify_plugin_links($links){
//     $settings_link = '<a href="admin.php?page=myplugin">Settings</a>';
//     array_push($links, $settings_link);
//     return $links;
// }
    

//     //enqueue js & styles.
//     function enqueue(){
//         wp_enqueue_style('myplugin_style', plugins_url('/assets/css/mystyle.css', __FILE__));
//         wp_enqueue_script('myplugin_script', plugins_url('/assets/js/index.js', __FILE__));
//     }

//     function activate() {
//         //require_once plugin_dir_path(__FILE__ ) . 'includes/my_plugin_activate.php';
//         Activate::activate();
//     }

// }

// $user1 = new MyPlugin();
// $user1->register();


// //Register activate func
// register_activation_hook(__FILE__, [$user1, 'activate']);

// //Register deactivate func
// //require_once plugin_dir_path(__FILE__ ) . 'includes/my_plugin_deactivate.php';
// register_deactivation_hook(__FILE__, ['Deactivate', 'deactivate']);

// //uninstall func