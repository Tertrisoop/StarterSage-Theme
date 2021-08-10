<?php

namespace App;

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
 class customwidgetmenu extends \WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your sidebar TEST.') );
        parent::__construct( 'post', __('menu mới fake'), $widget_ops );
    }

    function widget($args, $instance) {
        var_dump($instance);
        // Get menu
        $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

        if ( !$nav_menu )
            return;

        /** This filter is documented in wp-includes/default-widgets.php */
        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo $args['before_widget'];

        if ( !empty($instance['title']) )
            echo $args['before_title'] . $instance['title'] . $args['after_title'];

        wp_nav_menu( array( 'fallback_cb' => '', 'menu' => $nav_menu ) );

        echo $args['after_widget'];
    }

    function update( $new_instance, $old_instance ) {
        $instance['title'] = strip_tags( stripslashes($new_instance['title']) );
        $instance['nav_menu'] = (int) $new_instance['nav_menu'];
        return $instance;
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

        // Get menus
        $menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );

        // If no menus exists, direct the user to go and create some.
        if ( !$menus ) {
            echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
            return;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
            <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
                <option value="0"><?php _e( '&mdash; Select &mdash;' ) ?></option>
        <?php
            foreach ( $menus as $menu ) {
                echo '<option value="' . $menu->term_id . '"'
                    . selected( $nav_menu, $menu->term_id, false )
                    . '>'. esc_html( $menu->name ) . '</option>';
            }
        ?>
            </select>
        </p>
        <?php
    }
}
// add_action( 'widgets_init', function() { return register_widget("customwidgetmenu"); }, 1 );
add_action('widgets_init', __NAMESPACE__ . '\\Updated_WP_Nav_Menu_Widget');

function Updated_WP_Nav_Menu_Widget() {
    return register_widget(  __NAMESPACE__ .'\\customwidgetmenu' );
 }