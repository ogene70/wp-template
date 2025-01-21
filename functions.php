<?php
// ENQUEUE SCRIPTS & STYLES
if ( !function_exists( 'mmi_enqueues' ) ) { // On vérifie que cela n'a pas déjà été chargé
	function mmi_enqueues() {
		// Récupère les données du thème
		$theme = wp_get_theme();
		$theme_version = $theme->get('Version');
		global $post;


		wp_enqueue_style(
			'bootstrap',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', 
			array(),
			"5.3.3"
		);
		wp_enqueue_style('main-css', get_template_directory_uri() .'/dist/style.css', array(), 1.0);
		wp_enqueue_script(
            'bootstrap-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
            array(),
            "5.3.3",
            true
        );
		
		// wp_enqueue_script('tailwind',  'https://cdn.tailwindcss.com', array(), "2.11.8");

		          
		
	}
	}
add_action( 'wp_enqueue_scripts', 'mmi_enqueues' );


function mmi_theme_register_menus(){

	register_nav_menus(array(
			'menu-principal'=> __('Menu Principal','basetheme'),
			'menu-footer'=> __('Menu Pied de page','basetheme'),
	));
		
	
	}
add_action('init', 'mmi_theme_register_menus');

//Personnalisatio de la  login page
function mmi_enqueues_login() {
	wp_enqueue_style('login-page', get_template_directory_uri() . '/dist/style-login.css', array('login'));
}
add_action( 'login_enqueue_scripts', 'mmi_enqueues_login' );





function mmi_theme_support() {
	add_theme_support('custom-logo'); // logo
	add_theme_support('site-icon'); // favicon
	}
add_action('after_setup_theme', 'mmi_theme_support');

?>