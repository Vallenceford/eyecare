<?php  
function wordpress_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Links', 'wordpress' ),
        'id' => 'linker-zijbalk',
        'description' => __( 'widget komt overal.', 'wordpress' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
register_sidebar( array(
        'name' => __( 'rechts', 'wordpress' ),
        'id' => 'rechts',
        'description' => __( 'Widgets komt rechts.', 'wordpress' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

}
add_action( 'widgets_init', 'wordpress_widgets_init' );
?>