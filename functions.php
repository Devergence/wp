<?php 
function strongly_setup (){
 load_theme_text_domain( 'strongly' );

 add_theme_support( 'title-tag' );  //изменение логотипа из админки

 add_theme_support ( 'custom-logo' , array(
'height' => число,
'width' => число,
'flex-width' => true
) );       //добавляет возможность загрузку собственного логотипа на сайт., для этого в хидере замекняем img на <?php the_custom_logo(); //?//>

add_theme_support( 'html5' , array( 'search-form' , 'gallery' , 'caption' ));    //поддержка HTML5

register_nav_menu( 'primary', 'primary menu' );

}

add_action( 'after_theme_setup' , 'strongly_setup' );


function strongly_scripts() {
	
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'ie8', get_template_directory_uri() . '/css/ie8.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-dropotron', get_template_directory_uri() . '/js/jquery.dropotron.min.js', array(), '1.0.0', true  );
    wp_enqueue_script( 'skel', get_template_directory_uri() . '/js/skel.min.js', array(), '1.0.0', true  );
	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/skel-viewport.min.js', array(), '1.0.0', true  );
	
    wp_enqueue_script( 'util', get_template_directory_uri() . '/js/util.js', array(), '1.0.0', true  );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true  );
}
add_action( 'wp_enqueue_scripts', 'strongly_scripts' );




?>