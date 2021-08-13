<?php

namespace App;

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
 class customfootsocial extends \WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your sidebar .') );
        parent::__construct( 'btnfoot', __('Sage THC Social Button footer'), $widget_ops );
    }

    function widget($args, $instance) {
        echo '<ul class="footer__socical-list">';
        if ( !empty($instance['fb']) )
            echo '<li><a href="'. $instance['fb'].'"><i class="fab fa-facebook-f"></i></a></li>';
        if ( !empty($instance['ig']) )
            echo '<li><a href="'. $instance['ig'].'"><i class="fab fa-instagram"></i></a></li>';
        if ( !empty($instance['tw']) )
            echo '<li><a href="'. $instance['tw'].'"><i class="fab fa-twitter"></i></a></li>';
        if ( !empty($instance['yt']) )
            echo '<li><a href="'. $instance['yt'].'"><i class="fab fa-youtube"></i></a></li>';
        echo    ' </ul>';
    }

    function update( $new_instance, $old_instance ) {
        $instance['tw'] = strip_tags( stripslashes($new_instance['tw']) );
        $instance['fb'] = (string) $new_instance['fb'];
        $instance['yt'] = $new_instance['yt'];
        $instance['ig'] = $new_instance['ig'];
        return $instance;
    }

    function form( $instance ) {
        $tw = isset( $instance['tw'] ) ? $instance['tw'] : '';
        $fb = isset( $instance['fb'] ) ? $instance['fb'] : '';
        $yt = isset( $instance['yt'] ) ? $instance['yt'] : '';
        $ig = isset( $instance['ig'] ) ? $instance['ig'] : '';
        ?>
       
        <p>
            <label for="<?php echo $this->get_field_id('tw'); ?>"><?php echo 'Link Twitter:' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('tw'); ?>" name="<?php echo $this->get_field_name('tw'); ?>" value="<?php echo $tw; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fb'); ?>"><?php echo 'Link Facebook :' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('fb'); ?>" name="<?php echo $this->get_field_name('fb'); ?>" value="<?php echo $fb; ?>" />
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('yt'); ?>"><?php echo 'Link Youtube :'?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('yt'); ?>" name="<?php echo $this->get_field_name('yt'); ?>" value="<?php echo $yt; ?>" />
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('ig'); ?>"><?php echo 'Link Instagram :'?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('ig'); ?>" name="<?php echo $this->get_field_name('ig'); ?>" value="<?php echo $ig; ?>" />
              
        </p>
        <?php
    }
}

add_action('widgets_init', __NAMESPACE__ . '\\Updated_WP_fbtn_Widget');

function Updated_WP_fbtn_Widget() {
    return register_widget(  __NAMESPACE__ .'\\customfootsocial' );
 }