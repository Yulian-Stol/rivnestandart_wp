<?php

//------------------підключення додаткових функцій для постов ----------------------
function myfirsttheme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

add_action( 'after_setup_theme', 'myfirsttheme_setup' );

//------------------меню----------------------
register_nav_menus(array(
		'menu' => 'Навигация по сайту'
));


