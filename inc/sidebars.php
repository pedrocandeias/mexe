<?php 
/**
* Register widget area.
*/

function mexe_sidebar_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => esc_html__( $name,'mexe' ),
        'id' => $id,
        'description' =>  esc_html__( $description,'mexe' ),
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}

function mexe_widgets_init() {
    mexe_sidebar_registration(
        'Articles Sidebar',
        'articles-widgets',
        'Add widgets here.',
        '<section id="%1$s" class="widget %2$s">',
        '</section>',
        '<h2 class="widget-title">',
        '</h2>'
    );

    mexe_sidebar_registration(
        'Footer Section',
        'footer-section-1',
        'Add widgets here.',
        '<section id="%1$s" class="widget %2$s">',
        '</section>',
        '<h2 class="widget-title">',
        '</h2>'
    );

    mexe_sidebar_registration(
        'Footer Column 1',
        'footer-widgets-1',
        'Add widgets here.',
        '<div class="margin-bottom-lg ">',
        '</section>',
        '<h4 id="%1$s" class="widget %2$s margin-bottom-xs text-base@md ">',
        '</div>'
    );

    mexe_sidebar_registration(
        'Footer Column 2',
        'footer-widgets-2',
        'Add widgets here.',
        '<div class="margin-bottom-lg ">',
        '</section>',
        '<h4 id="%1$s" class="widget %2$s margin-bottom-xs text-base@md ">',
        '</div>'
    );

    mexe_sidebar_registration(
        'Footer Column 3',
        'footer-widgets-3',
        'Add widgets here.',
        '<div class="margin-bottom-lg ">',
        '</section>',
        '<h4 id="%1$s" class="widget %2$s margin-bottom-xs text-base@md ">',
        '</div>'
    );

    mexe_sidebar_registration(
        'Footer Column 4',
        'footer-widgets-4',
        'Add widgets here.',
        '<div class="margin-bottom-lg ">',
        '</section>',
        '<h4 id="%1$s" class="widget %2$s margin-bottom-xs text-base@md ">',
        '</div>'
    );

}
add_action( 'widgets_init', 'mexe_widgets_init' );

?>
