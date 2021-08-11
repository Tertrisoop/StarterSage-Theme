<?php

namespace App;

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
 class customwidgetlastedpost extends \WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your sidebar TEST.') );
        parent::__construct( 'post', __('Sage THC Lasted Post'), $widget_ops );
    }

    function widget($args, $instance) {
        $num = ! empty( $instance['post'] ) ? $instance['post'] : 5 ;
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => $num, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
    
        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo '<div class="asider__late-post">';

        if ( !empty($instance['title']) )
            echo '<h3 class="asider__late-post-title">' . $instance['title'] .'</h3>';

        foreach ($recent_posts as $postw) {
           echo '<div class="media asider__category-pos">
                    <div class="media-body">
                        <h3 class="asider__aside">
                        <a href="'. home_url("/").$postw['post_name'] .'" title="" rel="bookmark">
                        '. $postw['post_title'] .'
                        </a>
                        </h3>
                    </div>
                    <img class="ml-1 asider__img" src="'.wp_get_attachment_url( get_post_thumbnail_id($postw['ID']) ).'" alt="">
                </div>';
        }
        echo '</div>';
    }

    function update( $new_instance, $old_instance ) {
        $instance['title'] = strip_tags( stripslashes($new_instance['title']) );
        $instance['post'] = (int) $new_instance['post'];
        return $instance;
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $post = isset( $instance['post'] ) ? $instance['post'] : '';
        ?>
       
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('post'); ?>"><?php _e('Select Number :'); ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('post'); ?>" name="<?php echo $this->get_field_name('post'); ?>" value="<?php echo $post; ?>" />
              
        </p>
        <?php
    }
}
add_action('widgets_init', __NAMESPACE__ . '\\Updated_WP_Nav_Menu_Widget');

function Updated_WP_Nav_Menu_Widget() {
    return register_widget(  __NAMESPACE__ .'\\customwidgetlastedpost' );
 }
 