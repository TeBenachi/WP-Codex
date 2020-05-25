
// =======================================================
//  Version 1 - In functions.php
// =======================================================

function benachi_scripts() {

wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '3.3.7', false);

wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css', array(), false, 'all' );
wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.css');
wp_enqueue_style( 'momoyo-google-fonts', '//fonts.googleapis.com/css?family=Lora|Pacifico|Source+Sans+Pro');
wp_enqueue_style( 'momoyo-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'benachi_scripts' );



// =======================================================
//  Version 2 - Enqueue+Register separately in enqueue.php
// =======================================================

function benachi_enqueue(){
    $uri        =   get_theme_file_uri();
    $ver        =   benachi_DEV_MODE ? time() : false;

    wp_register_style('benachi_google_fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap', [], $ver);
    wp_register_style('benachi_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver);
    wp_register_style('benachi_style', $uri . '/assets/css/style.css', [], $ver);
    wp_register_style('benachi_font_icons', $uri . '/assets/css/font-icons.css', [], $ver);
    wp_register_style('benachi_custom', $uri . '/assets/css/custom.css', [], $ver);

    wp_enqueue_style( 'benachi_bootstrap' );
    wp_enqueue_style( 'benachi_style' );
    wp_enqueue_style( 'benachi_font_icons' );
    wp_enqueue_style( 'benachi_custom' );

    wp_register_script( 'benachi_plugins', $uri . '/assets/js/app.js', [], $ver, true  );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'benachi_app' );
}




