<?php

namespace App;

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
 class customsidebarsocial extends \WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your sidebar .') );
        parent::__construct( 'btn', __('Sage THC Social Button'), $widget_ops );
    }

    function widget($args, $instance) {
        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo '<div class="asider__socical">';

        if ( !empty($instance['title']) )
            echo '<div class="asider__socical-title"><h3>' . $instance['title'] .'</h3></div>';

        echo '<div class="asider__socical-facebook">
                        <a href="'. $instance['fb'].'" target="_blank" rel="noopener">
                        <div class="asider__socical-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <span class="asider__socical-name">Facebook</span>
                        </a>
                    </div>
                    <div class="asider__socical-youtube">
                        <a href="'. $instance['yt'].'" target="_blank" rel="noopener">
                        <div class="asider__socical-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <span class="asider__socical-name">Youtube</span>
                    </a>
                </div>';
        echo '</div>';
    }

    function update( $new_instance, $old_instance ) {
        $instance['title'] = strip_tags( stripslashes($new_instance['title']) );
        $instance['fb'] = (string) $new_instance['fb'];
        $instance['yt'] = $new_instance['yt'];
        return $instance;
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $fb = isset( $instance['fb'] ) ? $instance['fb'] : '';
        $yt = isset( $instance['yt'] ) ? $instance['yt'] : '';
        ?>
       
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo 'Title:' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fb'); ?>"><?php echo 'Link Facebook :' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('fb'); ?>" name="<?php echo $this->get_field_name('fb'); ?>" value="<?php echo $fb; ?>" />
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('yt'); ?>"><?php echo 'Link Youtube :'?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('yt'); ?>" name="<?php echo $this->get_field_name('yt'); ?>" value="<?php echo $yt; ?>" />
              
        </p>
        <?php
    }
}
add_action('widgets_init', __NAMESPACE__ . '\\Updated_WP_btn_Widget');

function Updated_WP_btn_Widget() {
    return register_widget(  __NAMESPACE__ .'\\customsidebarsocial' );
 }