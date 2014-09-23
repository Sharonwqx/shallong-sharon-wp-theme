<?php
	// define menu location
	register_nav_menu( 'header', 'Header' );
	register_nav_menu( 'footer', 'Footer' );
	function customize_register_sidebar($name){
		register_sidebar( array(
			'id'            => sanitize_title( $name ),
			'name'          => $name,
			'before_widget' => '<div id="%1$s" class="section %2$s">',
			'after_widget'  => '</div>',

			'before_title'  => '<h1 class="section_title">',
			'after_title'   => '</h1>'
		) );
	}
	
	function customize_sidebar(){
		customize_register_sidebar('index');
	}

	add_action( 'widgets_init', 'customize_sidebar' );

?>