<?php

namespace App;

/**
 * Navigation Menu widget class
 *
 * @since 3.0.0
 */
 class customvideowg extends \WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your sidebar .') );
        parent::__construct( 'vid', __('Sage THC Social Video footer'), $widget_ops );
    }

    function widget($args, $instance) {
        echo '<div class="fotorama">';
        if ( !empty($instance['fb']) )  
            $img = $this->getid($instance['fb']);
            echo '<a href="'. $instance['fb'].'" >
            <img src="https://i.ytimg.com/vi/'.$img .'/hq720.jpg" alt="" title="">  </a>';
        if ( !empty($instance['yt']) )
            $img = $this->getid($instance['yt']);
            echo '<a href="'. $instance['yt'].'" >
            <img src="https://i.ytimg.com/vi/'.$img .'/hq720.jpg" alt="" title="">  </a>';
   
        if ( !empty($instance['tw']) )
            $img = $this->getid($instance['tw']);   
            echo '<a href="'. $instance['tw'].'" >
            <img src="https://i.ytimg.com/vi/'.$img .'/hq720.jpg" alt="" title="">  </a>';
        
        echo    ' </div>';
    }
    
    public function getid( $var )
    {
        $cat = null ;
        try {
            $str = ((int) strpos($var,'=') ) + 1;
            $cat = substr( $var  ,$str);
        } catch (\Throwable $th) {
            $cat = 'eshxgZVtZdA';
        }
       
        return $cat;
    }
   
    
    
    function update( $new_instance, $old_instance ) {
        $instance['tw'] = strip_tags( stripslashes($new_instance['tw']) );
        $instance['fb'] = (string) $new_instance['fb'];
        $instance['yt'] = $new_instance['yt'];
        return $instance;
    }

    function form( $instance ) {
        $tw = isset( $instance['tw'] ) ? $instance['tw'] : '';
        $fb = isset( $instance['fb'] ) ? $instance['fb'] : '';
        $yt = isset( $instance['yt'] ) ? $instance['yt'] : '';
        ?>
       
        <p>
            <label for="<?php echo $this->get_field_id('fb'); ?>"><?php echo 'Link video (Youtube only) :' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('fb'); ?>" name="<?php echo $this->get_field_name('fb'); ?>" value="<?php echo $fb; ?>" />
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('yt'); ?>"><?php echo 'Link video (Youtube only) :'?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('yt'); ?>" name="<?php echo $this->get_field_name('yt'); ?>" value="<?php echo $yt; ?>" />
              
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tw'); ?>"><?php echo 'Link video (Youtube only):' ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('tw'); ?>" name="<?php echo $this->get_field_name('tw'); ?>" value="<?php echo $tw; ?>" />
        </p>
        <?php
    }
}

add_action('widgets_init', __NAMESPACE__ . '\\Updated_WP_vid_Widget');

function Updated_WP_vid_Widget() {
    return register_widget(  __NAMESPACE__ .'\\customvideowg' );
 }