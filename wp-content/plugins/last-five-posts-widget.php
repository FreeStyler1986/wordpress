<?php
class Last_Five_Posts_Widget extends WP_Widget {

    function __construct() {
    }

    function form( $instance ) {
    }

    function update( $new_instance, $old_instance ) {
    }

    function widget( $args, $instance ) {

    }

}

function last_five_posts_register_widget() {

    register_widget( 'Last_Five_Posts_Widget');

}
add_action( 'widgets_init', 'last_five_posts_register_widget' );