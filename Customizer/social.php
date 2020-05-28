<?php

function benachi_social_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'benachi_facebook_handle', [
        'default'   =>  ''
    ]); 
    $wp_customize->add_setting( 'benachi_twitter_handle', [
        'default'   =>  ''
    ]);  
    
    
    $wp_customize->add_section( 'benachi_social_section', [
        'title'     =>  __('Social Settings', 'benachi'),
        'priority'  =>   50,
    ]);
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'benachi_social_facebook_input',
         array(
            'label'          => __( 'Facebook Handle', 'benachi' ),
            'section'        => 'benachi_social_section',
            'settings'       => 'benachi_facebook_handle',
         )
    ));
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
         'benachi_social_twitter_input',
         array(
            'label'          => __( 'Twitter Handle', 'benachi' ),
            'section'        => 'benachi_social_section',
            'settings'       => 'benachi_twitter_handle',
        )
    ));
}

?>
