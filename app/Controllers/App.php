<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $str = strpos(get_the_archive_title(),':');
            $cat = substr( get_the_archive_title(),$str);
            return sprintf(__('<i class="fas fa-tasks"></i> %s', 'sage'), $cat);
        }
        if (is_search()) {
            return sprintf(__('<i class="fas fa-search"></i> %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function getPostByCategory( $nbProjects,$amout)
    {
        $args =  array(
            'cat' =>  $nbProjects,
            'posts_per_page' => $amout,

        );
        $projects = new \Wp_Query($args);
        
        if ($projects->have_posts()) {

            return $projects;
        } else {
            return null;
        }

    }
    public static function getPostrandom()
    {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'order' => 'DESC',
            'posts_per_page' => 1,
            // Using the date_query to filter posts from last week
            'date_query' => array(
                array(
                    'after' => '2 week ago'
                )
            )
        ); 
        $postrd = new \Wp_Query($args);
        
        if ($postrd->have_posts()) {

            return $postrd;
        } else {
            return null;
        }

    }
}
