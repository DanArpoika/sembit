<?php

/* MENUS */
function register_navs() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu-l' => __( 'Footer Links Left' ),
      'footer-menu-r' => __( 'Footer Links Right' )
    )
  );
}
add_action( 'init', 'register_navs' );

/* WIDGETS */
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Join Section',
		'id' => 'joinsection',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    <div id="link" class="link-blue"><a href="#">I\'d like to join the team!</a></div></div>' . PHP_EOL,
		'before_title' => '<h3>',
		'after_title' => '</h3>' . PHP_EOL,
	));
	register_sidebar(array(
		'name'=> 'Header Section',
		'id' => 'headersection',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    <div id="link" class="link-light-blue"><a href="#">Talk to an Expert!</a></div></div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'Intro Left',
		'id' => 'introleft',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'Intro Center',
		'id' => 'introcenter',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'Intro Right',
		'id' => 'introright',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'What to Expect Left',
		'id' => 'expectleft',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'What to Expect Center',
		'id' => 'expectcenter',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));

	register_sidebar(array(
		'name'=> 'What to Expect Right',
		'id' => 'expectright',
		'before_widget' => '<div class="widget_box">',
		'after_widget' => '    </div>' . PHP_EOL,
		'before_title' => '<h2>',
		'after_title' => '</h2><br>' . PHP_EOL,
	));
}

/* WIDGET CUSTOMIZATION */
function allow_breaks($title) {
	$title = str_replace( '[', '<', $title );
	$title = str_replace( '[/', '</', $title );
	$title = str_replace( 'br]', 'br>', $title );
	return $title;
}
add_filter( 'widget_title', 'allow_breaks' );
?>